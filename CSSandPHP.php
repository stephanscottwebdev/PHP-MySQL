<?php //This is the MODEL area.
	$firstName = "Stephan";
	$address = "123 First Avenue";
	$city = "Ankeny";
	$state = "Iowa";
	$zip =  50221;
	$price = 1.35;
	$quantity = 7;
	
	$total = $price * $quantity;
	$totalFormatted = "$" . number_format($total, 2);
	
	$background = "grey";
	$fontcolor = "white";

//Everything below is the VIEW area.	
?> 

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Confirmation Page</title>


<style>

body {
font-family: "Trebuchet MS", Verdana, sans-serif;
font-size: 16px;
color: <?php echo $fontcolor; ?>;
background: <?php echo $background; ?>;
}

</style>


</head>

<body>
<strong>The Shipping Co.</strong>

<p>Dear <?php echo $firstName; ?>,</p>
<p>Thank you for your order.</p>
<p>It will be shipped to:</p>
<p><?php echo $address; ?></p>
<p><?php echo $city.", ".$state; $zip; ?></p>

<p>Your total order is: <?php echo $totalFormatted; ?></p>

</body>
</html>