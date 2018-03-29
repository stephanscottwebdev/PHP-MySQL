<?php
$departmentName = "DMACC Mailing Department";

$name1 = "Jane";
$name2 = "Smith";

//Define the function.  THis is the code that will run when the function is called.  No parameters/arguments
function printDepartment()
{
	global $departmentName;	//tells the function to use the global scope version of this variable
	echo $departmentName;	
}


//Define the function.  Note this function expects one piece of information to be sent to it.  The local variable $inName will contain the
// value that is passed into the function when the function is called. 
function printName($inName)
{
	echo $inName;
}

//This function has two parameters/arguments.  It expects two pieces of information to be passed to when it is called.  The first piece of information
//will be stored in the local variable $inFirstName and the second piece of information will be stored in the $inLastName.  The order of the pieces of 
//information will determine where the value is stored. 
function printFullName($inFirstName,$inLastName)
{
	echo $inFirstName . " " . $inLastName;
}


function printNameListing($inFirstName,$inLastName)
{
	echo $inLastName . ", " . $inFirstName;	
}

function printSalePrice ($inPrice,$inQuantity)
{
	$salePrice = $inPrice * $inQuantity;
	$formattedSalePrice = "$" . number_format($salePrice, 2); //Number format will format it into numbers with a comma. The 2 decimal will make it look like money.
	echo $formattedSalePrice;
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP Function Examples</title>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Function Examples</h2>
<p>&nbsp;</p>
<p>Example Letter 1</p>
<p>Dear <?php printFullName("Mary", "Smith"); //Calling or activating the function ?> </p>
<p>Please send us your address so that we may mail you your degree award. </p>
<p>Thank You</p>
<p><?php printDepartment() ?></p>
<p>&nbsp;</p>
<p>Example Letter 2</p>
<p>Dear <?php printFullName("Anderson","Mike"); //Note PHP takes the information in the order YOU provide. It does not try to fix your mistake.?> </p>
<p>Please send us your address so that we may mail you your degree award. </p>
<p>Thank You</p>
<p><?php printDepartment() ?></p>
<p>&nbsp;</p>
<p>Example Letter 3</p>
<p>Dear <?php printFullName($name1,$name2); //You can pass the value of a variable as well.  The value stored in the variable is sent to the function?> </p>
<p>Please send us your address so that we may mail you your degree award. </p>
<p>Thank You</p>
<p><?php printDepartment() ?></p>
<p>&nbsp;</p>
<p>Example Letter 4</p>
<p><?php printDepartment() ?></p>
<p>The following people have been contacted.</p>
<p><?php echo printNameListing("Mary","Smith"); ?></p>
<p><?php echo printNameListing("Mike","Anderson"); ?></p>
<p><?php echo printNameListing($name1,$name2); ?></p>
<p>Thank You</p>
<p>The total sale price: <?php echo printSalePrice (34.57, 41); ?></p>
<p>&nbsp;</p>
</body>
</html>