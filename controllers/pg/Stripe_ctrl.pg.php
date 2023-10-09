<?php
// Amount should be in cents, or paise
final class Stripe_ctrl extends Main_ctrl
{
    function request_pay()
    {
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
                            "unit_amount" => 2000,
                            "product_data" => [
                                "name" => "T-shirt"
                            ]
                        ]
                    ]
                ],
                'metadata' => [
                    'order_id' => '6735',
                ],
            ]);

            // Log the response data in a JSON format
            $logData = [
                'status' => 'success',
                'message' => 'Checkout session created successfully.',
                'checkout_session_id' => $checkout_session->id,
                'checkout_session_url' => $checkout_session->url
            ];
            file_put_contents('checkout_logs.json', json_encode($logData));

            // Redirect the user to the checkout session URL
            http_response_code(303);
            header("Location: " . $checkout_session->url);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle Stripe API errors
            $logData = [
                'status' => 'error',
                'message' => 'Stripe API error: ' . $e->getMessage()
            ];
            file_put_contents('checkout_logs.json', json_encode($logData));

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
            file_put_contents('checkout_logs.json', json_encode($logData));

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
        $this->render_layout(context: $context, layout: "apps/travel/pages/stripe/cancelled.php");
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
