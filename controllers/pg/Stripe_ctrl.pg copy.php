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

        // webhook.php
        //
        // Use this sample code to handle webhook events in your integration.
        //
        // 1) Paste this code into a new file (webhook.php)
        //
        // 2) Install dependencies
        //   composer require stripe/stripe-php
        //
        // 3) Run the server on http://localhost:4242
        //   php -S localhost:4242

        // The library needs to be configured with your account's secret key.
        // Ensure the key is kept out of any version control system you might be using.
        $stripe = new \Stripe\StripeClient(STRIPE_SK);

        // This is your Stripe CLI webhook secret for testing your endpoint locally.
        $endpoint_secret = 'whsec_ee18fbcd63d2e0084601b69b6d6b3edff144423df69f3d0badb1e75d806ac611';

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sig_header,
                $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            http_response_code(400);
            exit();
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            http_response_code(400);
            exit();
        }

        // Handle the event

        switch ($event->type) {
            case 'checkout.session.async_payment_failed':
                $session = $event->data->object;
            case 'checkout.session.async_payment_succeeded':
                $session = $event->data->object;
            case 'checkout.session.completed':
                $session = $event->data->object;
            case 'checkout.session.expired':
                $session = $event->data->object;
                // ... handle other event types
            default:
                echo 'Received unknown event type ' . $event->type;
        }

        http_response_code(200);

        print_r($session ?? null);
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
