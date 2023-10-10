<!DOCTYPE html>
<html>
<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
</head>
<body>
<?php
if (!isset($_SESSION['cust_sess_email'])) {
    die();
}
// if(!empty($_GET['session_id'])){ 
    $db = new Dbobjects;
    $useremail = $_SESSION['cust_sess_email'];
    $cust = (object)$db->showOne("select checkout_session_id from stripe_payments where email = '$useremail' order by id desc");
    $session_id = $cust->checkout_session_id; 
            
        // Set API key 
        $stripe = new \Stripe\StripeClient(STRIPE_SK); 
         
        // Fetch the Checkout Session to display the JSON result on the success page 
        try { 
            $checkout_session = $stripe->checkout->sessions->retrieve($session_id); 
            // myprint($checkout_session);
        } catch(Exception $e) {  
            $api_error = $e->getMessage();  
        } 
         
        if(empty($api_error) && $checkout_session){ 
            // Get customer details 
            $customer_details = $checkout_session->customer_details; 
 
            // Retrieve the details of a PaymentIntent 
            try { 
                $paymentIntent = $stripe->paymentIntents->retrieve($checkout_session->payment_intent); 
            } catch (\Stripe\Exception\ApiErrorException $e) { 
                $api_error = $e->getMessage(); 
            } 
             
            if(empty($api_error) && $paymentIntent){ 
                // Check whether the payment was successful 
                if(!empty($paymentIntent) && $paymentIntent->status == 'succeeded'){ 
                    // Transaction details  
                    $arr['transactionID'] = $paymentIntent->id; 
                    $arr['paidAmount'] = $paymentIntent->amount; 
                    $arr['paidAmount'] = ($arr['paidAmount']/100); 
                    $arr['paidCurrency'] = $paymentIntent->currency; 
                    $arr['payment_status'] = $paymentIntent->status; 
                     
                    // Customer info 
                    $customer_name = $customer_email = ''; 
                    if(!empty($customer_details)){ 
                        $arr['customer_name'] = !empty($customer_details->name)?$customer_details->name:''; 
                        $arr['customer_email'] = !empty($customer_details->email)?$customer_details->email:''; 
                    }                     
                }
            }
        }
  myprint($arr);
    // }
?>
    <h1>Stripe Example</h1>
    <p>Thank you for your payment!</p>
    <a href="<?php echo BASEURI; ?>">HOME</a>
</body>
</html>