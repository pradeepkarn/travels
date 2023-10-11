<?php
use PHPMailer\PHPMailer\PHPMailer;
// Amount should be in cents, or paise
final class Stripe_ctrl extends Main_ctrl
{
    // function stripe($amount)  {
    //     $stripe =  new \Stripe\StripeClient(STRIPE_SK);
    //     try {
    //         $payment_intent = $stripe->paymentIntents->create([
    //             'amount'=>$amount*100,
    //             'currency'=>'aed',
    //             'payment_method_types'=>[
    //                 'card'
    //             ]
    //         ]);
    //         $payment_intent->client_secret;
    //     } catch (\Stripe\Exception\ApiErrorException $e) {

    //     }
    // }
    function get_pckage_details($id)
    {
        $db = new Dbobjects;
        return $db->showOne("select * from content where content.id = $id and content_group='package'");
    }
    function request_pay($req = null)
    {
        $req = obj($_POST);
        $rules = [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'country_code' => 'required|numeric',
            'mobile' => 'required|numeric',
            'address1' => 'required|string',
            'address2' => 'required|string',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|string',
            'pkgid' => 'required|numeric',
            'adults' => 'required|numeric',
            'booking_date' => 'required|datetime',
            'email' => 'required|email',
        ];
        $pass = validateData(data: $_POST, rules: $rules);
        if (!$pass) {
            echo msg_ssn(return: true, lnbrk: "<br>");
            return;
        }
        if (!email_has_valid_dns($req->email)) {
            msg_set("Please provide valid email address");
            echo msg_ssn(return: true, lnbrk: "<br>");
            return;
        }
        $pkg = obj($this->get_pckage_details($req->pkgid));
        $amt = $req->adults * $pkg->price;
        if ($amt <= 0) {
            msg_set("Invalid amount");
            echo msg_ssn(return: true, lnbrk: "<br>");
            return;
        }
        // return;
        try {
            $stripe_secret_key = STRIPE_SK;

            \Stripe\Stripe::setApiKey($stripe_secret_key);

            $checkout_session = \Stripe\Checkout\Session::create([
                "mode" => "payment",
                "success_url" => BASEURI . route('stripePaymentSuccess'),
                "cancel_url" => BASEURI . route('stripePaymentCancelled'),
                "locale" => "auto",
                "line_items" => [
                    [
                        "quantity" => 1,
                        "price_data" => [
                            "currency" => "aed",
                            "unit_amount" => $amt * 100,
                            "product_data" => [
                                "name" => "Travel Packages"
                            ]
                        ]
                    ]
                ],
                'metadata' => [
                    'order_id' => '100',
                ],
            ]);

            // Log the response data in a JSON format
            $logData = [
                'status' => 'success',
                'message' => 'Checkout session created successfully.',
                'checkout_session_id' => $checkout_session->id,
                'checkout_session_url' => $checkout_session->url
            ];
            $db = new Dbobjects;
            $orderid = uniqid('ord');
            $_SESSION['cust_sess_email'] = $req->email;
            $_SESSION['cust_sess_product_id'] = $req->pkgid;
            $_SESSION['cust_sess_order_id'] = $orderid;
            $db->execSql("INSERT INTO stripe_payments (order_id, product_id, checkout_session_id, amount, email) VALUES('{$orderid}','$req->pkgid', '$checkout_session->id', $amt, '$req->email');");

            file_put_contents("log/{$checkout_session->id}.json", json_encode($logData));
            // Redirect the user to the checkout session URL
            http_response_code(303);
            header("Location: " . $checkout_session->url);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle Stripe API errors
            $logData = [
                'status' => 'error',
                'message' => 'Stripe API error: ' . $e->getMessage()
            ];
            file_put_contents('log/checkout_logs.json', json_encode($logData));

            // Handle the error (e.g., show an error page to the user)
            // Redirect the user to an error page or display an error message
            // header("Location: " . BASEURI . route('errorPage'));
            echo "Error: " . $e->getMessage();
        } catch (Exception $e) {
            // Handle other exceptions
            $logData = [
                'status' => 'error',
                'message' => 'Unexpected error: ' . $e->getMessage()
            ];
            file_put_contents('log/checkout_logs.json', json_encode($logData));

            // Handle the error (e.g., show an error page to the user)
            // Redirect the user to an error page or display an error message
            // header("Location: " . BASEURI . route('errorPage'));
            echo "Error: " . $e->getMessage();
        }
    }

    function payment_success($req = null)
    {
        $req = obj($req);

        if (!isset($_SESSION['cust_sess_email'])) {
            die();
        }
        // if(!empty($_GET['session_id'])){ 
        $db = new Dbobjects;
        $useremail = $_SESSION['cust_sess_email'];
        $cust = (object)$db->showOne("select * from stripe_payments where order_id = '{$_SESSION['cust_sess_order_id']}' order by id desc");
        $session_id = $cust->checkout_session_id;
    
        // Set API key 
        $stripe = new \Stripe\StripeClient(STRIPE_SK);
    
        // Fetch the Checkout Session to display the JSON result on the success page 
        try {
            $checkout_session = $stripe->checkout->sessions->retrieve($session_id);
            // myprint($checkout_session);
        } catch (Exception $e) {
            $api_error = $e->getMessage();
        }
    
        if (empty($api_error) && $checkout_session) {
            // Get customer details 
            $customer_details = $checkout_session->customer_details;
    
            // Retrieve the details of a PaymentIntent 
            try {
                $paymentIntent = $stripe->paymentIntents->retrieve($checkout_session->payment_intent);
            } catch (\Stripe\Exception\ApiErrorException $e) {
                $api_error = $e->getMessage();
            }

            $arr = null;
            if (empty($api_error) && $paymentIntent) {
                // Check whether the payment was successful 
                if (!empty($paymentIntent) && $paymentIntent->status == 'succeeded') {
                    // Transaction details  
                    $arr['order_id'] =  $cust->order_id;
                    $arr['product_id'] =  $cust->product_id;
                    $arr['transaction_id'] = $paymentIntent->id;
                    $arr['amount'] = ($paymentIntent->amount / 100);
                    $arr['currency'] = $paymentIntent->currency;
                    $arr['payment_status'] = $paymentIntent->status;
                    // Customer info 
                    $customer_name = $customer_email = '';
                    if (!empty($customer_details)) {
                        $arr['customer_name'] = !empty($customer_details->name) ? $customer_details->name : '';
                        $arr['customer_email'] = !empty($customer_details->email) ? $customer_details->email : '';
                    }
                    $email_body = render_template("emails/stripe/success.php", obj($arr));
                    $mail = php_mailer(new PHPMailer());
                    $mail->setFrom(email, SITE_NAME . "Order Information");
                    $mail->isHTML(true);
                    $mail->Subject = 'Order Information';
                    $mail->Body = $email_body;
                    $mail->addAddress($customer_details->email, "$customer_details->email");
                    if ($useremail!=$customer_details->email) {
                        $mail->addAddress($useremail, "$useremail");
                    }
                    if ($mail->send()) {
                        msg_set("An order email sent to  $customer_details->email, thanks.");
                    } else {
                        msg_set("Email sending error");
                    }
                }
            }
        } else {
            $html_body = "Payment not done";
            $html_body .= "<a href=".BASEURI.">HOME</a>";
            $html_body .= msg_ssn(return:true,lnbrk:"<br>");
        }

        $context = (object) array(
            'data' => (object) array(
                'req' => obj($req),
                'html_body' => $email_body,
            )
        );
        $this->render_layout(context: $context, layout: "apps/travel/pages/stripe/success.php");
    }
    function payment_cancelled($req = null)
    {
        $req = obj($req);
        $context = (object) array(
            'page' => 'about.php',
            'data' => (object) array(
                'req' => obj($req)
            )
        );
        $this->render_layout(context: $context, layout: "apps/travel/pages/stripe/cancel.php");
    }

    public function checkout($req = null)
    {
        $req = obj($req);
        $context = (object) array(
            'page' => 'about.php',
            'data' => (object) array(
                'req' => obj($req)
            )
        );
        $this->render_layout(context: $context, layout: "apps/travel/pages/stripe/checkout.php");
    }
}
