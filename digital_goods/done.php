<html>
<head>

<title>Success</title>
<script>
var clickCount = 0;

function clicked(){
clickCount = clickCount + 1;
//alert(clickCount.toString());
if (clickCount == 2)
{
	document.getElementById("link").innerHTML = "Click Here";
	document.getElementById("sorry").innerHTML = "You have reached the maximum attemtps to download product. Please Contact me for anditional attemps! To return to product page <a href='http://examples.williamthomason.info/monday/paypal/digitalgoods.html'>click here</a>";
}
}


</script>
</head>

<body>
<h1>Success! Your item can be downloaded below.</h1>
<p>Please click <a href="digitalgoods.html">here</a> to return home.</p>
<span id="link"><a href="PseudoSue.pdf" onclick="clicked()" download
   onclick="if (event.button==0) 
     setTimeout(function(){document.body.innerHTML='thanks!'},500)">
 Start automatic download!
</a></span>
<span id="sorry"></span>
<!--<?php
function showOrderDetails() {
	//echo order details
}

function sendEmailToBuyer($emailAddress) {
	//send a thank you email to buyer
}

function checkIfTransactionHasAlreadyBeenProcessed($tx) {
	//check if transaction with this id has already been process
}

function checkThatPaymentIsReceivedAtYourEmailAddress($email) {
	//check $email againt the email address which was suppose receive the payment
}

function checkPaymentAmountAndCurrency($amount, $currency) {
	//verify that the amount and currency code are as required.
}

function processOrder() {
	// process the order
}

function exitCode() {
	die("Error");
	//exit with error message
}


//look if the parameter 'tx' is set in the GET request and that it does not have a null or empty value
if(isset($_GET['tx']) && ($_GET['tx'])!=null && ($_GET['tx'])!= "") {
	$tx = $_GET['tx'];
	verifyWithPayPal($tx);
}
else {
    exitCode();
}



function verifyWithPayPal($tx) {
	$req = 'cmd=_notify-synch';
	$tx_token = $tx;
	$auth_token = "iKl4_sUXcOd7vvY05OuO0z6dJdZa5Se6IIkyzH11tCg-4PRW_fHE1RSH-QK";
	$req .= "&tx=$tx_token&at=$auth_token";

	// post back to PayPal system to validate
	$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";

	// url for paypal sandbox
	//$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);	

	// url for payal
	// $fp = fsockopen ('www.paypal.com', 80, $errno, $errstr, 30);
	// If possible, securely post back to paypal using HTTPS
	// Your PHP server will need to be SSL enabled
	 $fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);

	if (!$fp) {
		exitCode();
	} else {
		fputs ($fp, $header . $req);
		// read the body data
		$res = '';
		$headerdone = false;
		while (!feof($fp)) {
			$line = fgets ($fp, 1024);
			if (strcmp($line, "\r\n") == 0) {
				// read the header
				$headerdone = true;
			}
			else if ($headerdone) {
				// header has been read. now read the contents
				$res .= $line;
			}
		}

		// parse the data
		$lines = explode("\n", $res);

		$response = array();

		if (strcmp ($lines[0], "SUCCESS") == 0) {

			for ($i=1; $i<count($lines);$i++){
				list($key,$val) = explode("=", $lines[$i]);
				$response[urldecode($key)] = urldecode($val);
			}

			$itemName = $response["item_name"];
			$amount = $response["payment_gross"];
			$myEmail = $response["receiver_email"];
			$userEmailPaypalId = $response["payer_email"];
			$paymentStatus = $response["payment_status"];
			$paypalTxId = $response["txn_id"];
			$currency = $response["mc_currency"];

			// check the payment_status is Completed
			if($paymentStatus!="Completed") {
				paymentNotComplete($paymentStatus);
			}

			// check that txn_id has not been previously processed
			checkIfTransactionHasAlreadyBeenProcessed($paypalTxId);
			// check that receiver_email is your Primary PayPal email
			checkThatPaymentIsReceivedAtYourEmailAddress($myEmail);
			// check that payment_amount/payment_currency are correct
			checkPaymentAmountAndCurrency($amount, $currency);
			// process the order
			processOrder();
			} else {
			exitCode();
		}
	}
		fclose ($fp);
	}
	
	echo ("<p><h3>Thank you for your purchase!</h3></p>");
     
    echo ("<b>Payment Details</b><br>\n");
    echo ("<li>Name: $firstname $lastname</li>\n");
    echo ("<li>Item: $itemname</li>\n");
    echo ("<li>Amount: $amount</li>\n");
    echo ("");
?>-->

<body>
</html>
