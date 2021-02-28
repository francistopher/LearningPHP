<?php
// get the data from the form
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$tax_percent = $_POST['tax_percent'];

// Catch a non numeric list_price
if (!number_format($list_price, 2)) {
    $list_price = 0.0;
}

// Catch a non numeric tax_percent
if (!number_format($tax_percent, 2)) {
    $tax_price = 0.0;
}

// calculate the tax
$tax = $list_price * $tax_percent * .01;
$total_price = $list_price + $tax;

// apply currency formatting to the dollar and percent amounts
$list_price_formatted = "$".number_format($list_price, 2);
$tax_percent_formatted = number_format($tax_percent, 1)."%";
$tax_formatted = "$".number_format($tax, 2);
$total_price_formatted = "$".number_format($total_price, 2);

// escape the unformatted input
if ($product_description == "") {
    $product_description = "Unknown Product";
}
$product_description_escaped = htmlspecialchars($product_description);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Product Sales Tax Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width, initial-width=1, minimum-scale=1, user-scalable=no"/>
</head>

<body>

<main>
        <h1>Product Sales Tax Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description_escaped; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Standard Sales Tax:</label>
        <span><?php echo $tax_percent_formatted; ?></span><br>

        <label>Sales Tax Amount:</label>
        <span><?php echo $tax_formatted; ?></span><br>

        <label>Total Price:</label>
        <span><?php echo $total_price_formatted; ?></span><br>
    </main>

</body>
    </html>

