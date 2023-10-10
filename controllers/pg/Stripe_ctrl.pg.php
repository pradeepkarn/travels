<?php
// Amount should be in cents, or paise
final class Stripe_ctrl extends Main_ctrl
{
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
        $amt = $req->adults*$pkg->price;
        if ($amt<=0) {
            msg_set("Invalid amount");
            echo msg_ssn(return: true, lnbrk: "<br>");
            return;
        }
        return;
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
                            "unit_amount" => $amt,
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
            file_put_contents('log/checkout_logs.json', json_encode($logData));

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
        $context = (object) array(
            'page' => 'about.php',
            'data' => (object) array(
                'req' => obj($req)
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
