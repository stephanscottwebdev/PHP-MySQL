<?php include 'processEmail.php';				//Include the Student class so that it is avialable to make new objects

/* Use this block of code to make sure my isset() is checking to see if the form has been submitted.  Removed after testing

if(isset($_POST['submit']) )		//Checks to see if the form data was entered and submitted to this page, if so then process form data
{
	$test = $_POST['submit'];
	echo "<h1>$test</h1>";
}
else
{
	echo "<h1>Not submitted</h1>";		
}
*/
// isset checks to see if that information has been assigned a value. IF it is true, if not false.

if(isset($_POST['submit']) )		// ($_POST is SUPER GLOBAL) Checks to see if the form data was entered and submitted to this page, if so then
//process form data
{
	 $email = new Email();
 		$email->setSendTo($_POST['sendTo']);
 		$email->setSentFrom($_POST['sentFrom']);
 		$email->setEmailMsg($_POST['message']);
 		$email->setEmailSubject($_POST['subject']);

 		$result = $email->sendMail();
	
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Form</title>
<style>

form {
	margin-bottom: 1em;
	padding: 0.5em;
	font-size: 16px;
}

#form {
	margin: 0 ;
	padding: 0.5em;
	clear: both;
}

label {
	width: 180px;
	margin: 0 15px 0 4px;
	color: black;
	float: left;
	text-align: right;
}

legend {
	padding: 0 10px;
	color: #354660;
	font-weight: bold;
}

body {
background-color: #00628B;	
}

fieldset {
	width: 80%;
	margin: 1em;
	border: solid 5px #354660;
	padding: 0.5em;
	background-color: #E6E6DC;
}


</style>
</head>

<body>
<?php
if(!isset($_POST['submit']) )		//Checks to see if the form data was entered and submitted to this page, if not then display the form
{
?>

<form method="post" action="ProcessEmailDisplay.php">
<fieldset><legend><strong>Send us and email!</strong></legend>


		<label for = "your email">Your Email</label>
    	<input type = "email" name = "sentFrom" id = "firstname" size = "30" /> 
    
    	<p><label for = "subject">Subject</label>
    	<input type = "text" name = "subject" id = "subject" size = "25" maxlength = "120" /></p>
    
        <p><label for = "email">Recipient</label>
    	<input type = "email" name = "sendTo" id = "email" size = "40" maxlength = "40" /> </p>
        
        <p><label for = "message">Message</label>
    	<input type = "text" name = "message" id = "message" style="width:500px; height:200px;" size = "40" maxlength = "200" /> </p>
        
        <input type="submit" name="submit" id="submit" value="Submit" />
        <input type="reset" name="button2" id="button2" value="Reset" />

        </fieldset>


</form>

<?php
}
else	//The form has been submitted, the data processed, now display a confirmation message instead of the form
{
?>

    <h3><p>Thank you for emailing us! Someone will be in contact with you shortly.</p></h3>
    

<?php
}//ends else branch and the if statement
?>

</body>
</html>