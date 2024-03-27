<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form Calculations</title>
    <style>
        body{
            margin: 1rem 2rem;
        }
        *{
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
    <?php 
        
        $item = $_POST['item'];
        $description = $_POST['description'];
        $price = $_POST['price']; 
        $price = ceil($price * 100) / 100;
        $price = (double)$price;
        $quantity = $_POST['qty'];
        $discount = $_POST['discount'];
        $tax = $_POST['tax'];
        $shippingMethod = $_POST['shippingMethod'];
        $subtotal = $price * $quantity;
        $total = $subtotal - ($subtotal / $discount);
        $total = $total + ($subtotal / $tax);
        $total += $shippingMethod;
        $total = number_format($total, 2); 
    ?>

    <h3>Data</h3>
    <p>Item: <?= $item ?></p>
    <p>Description: <?= $description ?></p>
    <p>Price: <?= $price ?></p>
    <p>Quantity: <?= $quantity ?></p>
    <p>Discount: <?= $discount ?></p>
    <p>Shipping Method: <?= $shippingMethod ?></p>
    <p>Subtotal: <?= $subtotal ?></p>
    <p>Total: <?= $total ?></p>
</body>
</html>