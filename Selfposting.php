<?php include 'dbConnect.php';?>
<?php
/*$sql = "INSERT INTO wdv341_events (emp_fName, event_date) VALUES ('Stephan', 2015-10-22)";
echo "<p>$sql</p>";*/ //This WORKS!?>
<?php
if(isset($_POST["submitForm"]))
{
$emp_fName = $_POST['emp_fName'];
$emp_lName = $_POST['emp_lName'];
$emp_city = $_POST['emp_city'];
$event_date = $_POST['event_date'];
$emp_email = $_POST['emp_email'];


$sql = "INSERT INTO wdv341_events (event_id, emp_fName, emp_lName, emp_city, event_date, emp_email)
VALUES (null,'$emp_fName','$emp_lName','$emp_city','$event_date','$emp_email')";



if (mysqli_query($link,$sql) ) //Run the SQL command using the database you connected with....$link or $conn? Result object.
{
    echo "<h1>Your record has been successfully added to the database.</h1>";
    echo "<p>Please <a href='select.php'>view</a> your records.</p>";
}
else
{
  echo "<h1>You have encountered a problem.</h1>";
  echo "<h2 style='color:red'>" . mysqli_error($link) . "</h2>";
}
}
mysqli_close($link); //Closes connection
?>
<?php
/*if(isset($_POST["submitForm"]))
{
	$message = "You have submitted the form. Preparing to put into database.";
}
else
{
	$message = "Please enter your information on the form."; 	
}
//mysqli_query() is how you create a query.*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Self Posting</title>
<style>
#container {
    width: 960px;
    margin: 0 auto;
    
}
body {
  background-color: #6699FF;
}


</style>
</head>

<body>
<?php
   if(isset($_POST["submitForm"])) 
   {
    ?>
        <!--<h3> Your information has been processed.</h3>-->
<?php
  }
   else
   {
   ?>

<div id = "container">
<form method="post" action="selfPosting.php"> 

   <!-- <h3><?php echo $message; ?></h3>-->
<fieldset><legend><strong><u>Employee Information</u></strong></legend>


		<label for = "First Name">First Name:</label>
    	<input type = "text" name = "emp_fName" id = "firstname" size = "30" /> 
    
    	<p><label for = "Last Name">Last Name:</label>
    	<input type = "text" name = "emp_lName" id = "lastname" size = "30" maxlength = "30" /></p>
    
        <p><label for = "City">City:</label>
    	<input type = "text" name = "emp_city" id = "city" size = "30" maxlength = "30" /> </p>

        <p><label for = "Date">Date:</label>
          <input type="date" name="event_date"></p>
        
        <p><label for = "Email">Email:</label>
    	<input type = "email" name = "emp_email" id = "email"  size = "30" maxlength = "50" /> </p>
        
        <input type = "submit" value = "Submit" name = "submitForm" id = "submitForm" class = "button" />
		<input type = "reset" value = "Reset" class = "button" />

        </fieldset>


</form>
<?php
}
?>
</div>
</body>
</html>