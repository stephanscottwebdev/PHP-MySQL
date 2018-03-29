<?php include 'dbConnect.php';?>
<?php
/*
if(isset($_POST["submitForm"]))
{
	$emp_fName = $_POST['emp_fName'];
	$emp_lName = $_POST['emp_lName'];
	$emp_city = $_POST['emp_city'];
	$emp_email = $_POST['emp_email'];
	$event_id = $_POST['event_id'];

	$sql = "UPDATE wdv341_events SET ";
	$sql .= "emp_fName=$emp_fName=?,";
	$sql .= "emp_lName=$emp_lName=?,";
	$sql .= "emp_city=$emp_city=?,";
	$sql .= "emp_email=$emp_email=?,";
	$sql .= " WHERE (event_id = '$updateRecId')";

$query = $link->prepare($sql); //Prepare SQL query.

$query->bind_param('ssss',$emp_fName, $emp_lName, $emp_city, $emp_email);

if ( $query->execute() )
{
	$message = "<h1>Your record has been successfully updated in the database<h1>";
	$message = "<p>Please <a href='select.php'>view</a> your records.</p>";
}

else
{
	$message = "<h1>We have encountered a problem.</h1>";
}
*/
?>
<?php

if(isset($_POST["submitForm"]))
{
	$emp_fName = $_POST['emp_fName'];
	$emp_lName = $_POST['emp_lName'];
	$emp_city = $_POST['emp_city'];
	$emp_email = $_POST['emp_email'];
	$event_id = $_POST['event_id'];


	$sql = "UPDATE wdv341_events SET ";
	$sql .= "emp_fName='$emp_fName',";
	$sql .= "emp_lName='$emp_lName',";
	$sql .= "emp_city='$emp_city',";
	$sql .= "emp_email='$emp_email'";
	$sql .= "WHERE (event_id='$event_id')";


if (mysqli_query($link,$sql) )
{
    echo "<h1>Your information has been successfully updated.</h1>";
	echo "<p>Please <a href='select.php'>view</a> your records.</p>";
}
else
{
  echo "<h1>You have encountered a problem.</h1>";
  echo "<h2 style='color:red'>" . mysqli_error($link) . "</h2>";
}
mysqli_close($link); 
}

else	
{
	
	$updateEventId = $_GET['event_id'];
	
	$sql = "SELECT * FROM wdv341_events WHERE event_id = $updateEventId";	

	$result = $link->query($sql);

	//Check the result to make sure it ran correctly
	if (!$result)
	{
		echo "<h1>You have encountered a problem with your update.</h1>";
		die( "<h2>" . mysqli_error($link) . "</h2>") ;		
		//This will display the error and then stop the page
	}
	$row = $result->fetch_array();	//Turn the result into an associative array 
									//This allows you to get the column values by name
}
?>


<!doctype html>
<html>
<head>
</head>
<title>Update Event</title>
<style>
#container {
    width: 960px;
    margin: 0 auto;
    
}
body {
  background-color: #6699FF;
}


</style>
<body>

<?php
   if(isset($_POST["submitForm"])) 
   {
?>
        
<?php
  }
  	else
  {
?>

<div id = "container">
<form method="post" action="updateEvent.php"> 

<fieldset><legend><strong><u>Update your Information</u></strong></legend>


		<label for = "First Name">First Name:</label>
    		<input type="text" name="emp_fName" id="emp_fName" value="<?php echo $row['emp_fName']; ?>"/>
 
    	<p><label for = "Last Name">Last Name:</label>
    		<input type="text" name="emp_lName" id="emp_lName" value="<?php echo $row['emp_lName']; ?>"/></p>
    
        <p><label for = "City">City:</label>
    		<input type="text" name="emp_city" id="emp_city" value="<?php echo $row['emp_city']; ?>"/> </p>

        <p><label for = "Email">Email:</label>
    		<input type="email" name="emp_email" id="emp_email" value="<?php echo $row['emp_email']; ?>"/></p>

    	<p><input type="hidden" name="event_id" id="event_id" value="<?php echo $updateEventId; ?>"/></p>
        
        <input type = "submit" value = "Update" name = "submitForm" id = "submitForm" class = "button" />
		<input type = "reset" value = "Clear Form" class = "button" />

        </fieldset>


</form>



<?php
	}
?>

</div>
</body> 
</html>