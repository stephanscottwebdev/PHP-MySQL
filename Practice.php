<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php
	$firstName = "Stephan"; //String

	$count = 7; //Integer

	$price = 3.50; //Float or decimal
?>

<body>

<p>
<?php
	echo "hello world";


?>
</p>

"Hello Stephan!"

<p> Hello <?php echo $firstName; ?>!</p> //This is how you use php inside html.

"Your total is $24.50."

<p> Your total is $<?php echo $count * $price;?> </p> //Math while calling a variable with php inside html. 

"Stephan you ordered 7 items at $3.50"

<p><?php echo $firstName." you ordered ".$count." items at $".$price;?></p> 

</body>
</html>