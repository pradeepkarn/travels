<?php
$pg_routes = [
    "/stripe/stripe-checkout" => 'Stripe_ctrl@checkout@name.stripeCheckoutPage',
    "/stripe/request-pay" => 'Stripe_ctrl@request_pay@name.requestPay',
    "/stripe/request-cancelled" => 'Stripe_ctrl@payment_cancelled@name.stripePaymentCancelled',
    "/stripe/request-success" => 'Stripe_ctrl@payment_success@name.stripePaymentSuccess',
];

