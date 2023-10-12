<?php
$ctx = $context;
$dbobj = $context->dbobj;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Information</title>
    <!-- Add Bootstrap CSS (You can link to a CDN or include it locally) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add your custom CSS for styling -->
    <style>
        /* Add your custom CSS here */
        body {
            background-color: #f4f4f4;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #e1e1e1;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-reset {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container email-container">
        <?php if (!empty($ctx->order_id)) { ?>
            <h1>Order Information</h1>

            <h4>Payment Information</h4>
            <p><b>Order Number:</b> <?php echo $ctx->order_id; ?></p>
            <p><b>Transaction ID:</b> <?php echo $ctx->transaction_id; ?></p>
            <p><b>Paid Amount:</b> <?php echo $ctx->amount . ' ' . $ctx->currency; ?></p>
            <p><b>Payment Status:</b> <?php echo $ctx->payment_status; ?></p>

            <h4>Customer Information</h4>
            <p><b>Name:</b> <?php echo $ctx->customer_name; ?></p>
            <p><b>Email:</b> <?php echo $ctx->customer_email; ?></p>
            <p><b>Package Name :</b> <?php echo "{$dbobj->product_name}"; ?></p>
            <p><b>Address :</b> <?php echo "{$dbobj->address1} <br> {$dbobj->address2} <br> {$dbobj->city} <br> {$dbobj->state} <br> {$dbobj->country}"; ?></p>
            <p><b>Booking Date :</b> <?php echo "{$dbobj->booking_date}"; ?></p>
            <p><b>Adults :</b> <?php echo "{$dbobj->adults}"; ?></p>
            <p><b>Children :</b> <?php echo "{$dbobj->children}"; ?></p>
            <a href="<?php echo BASEURI; ?>">HOME</a>
        <?php } else { ?>
            <h1 class="error">Your Payment been failed!</h1>
            <a href="<?php echo BASEURI; ?>"><?php echo SITE_NAME; ?></a>
        <?php } ?>
    </div>
</body>

</html>