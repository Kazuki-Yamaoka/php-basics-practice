<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>価格計算</title>
</head>
<body>

<?php
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total = $subtotal + $tax_amount;

echo ("商品名:" . "ノートパソコン<br>");
echo ("単価:" . $price . "円<br>");
echo ("数量:" . $quantity . "個<br>");
echo ("小計:" . $subtotal . "円<br>");
echo ("消費税(10%):" . $tax_amount . "円<br>");
echo ("合計金額:" . $total . "円<br>");

?>

</body>
</html>