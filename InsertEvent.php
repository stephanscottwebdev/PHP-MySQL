<?php include 'dbConnect.php';

/*$sql = "INSERT INTO wdv341_events (emp_fName, event_date) VALUES ('Stephan', 2015-10-22)";
echo "<p>$sql</p>";*/ //This WORKS!

if(isset($_POST["submitForm"]))
{
$emp_fName = $_POST['emp_fName'];
$emp_lName = $_POST['emp_lName'];
$emp_city = $_POST['emp_city'];
$event_date = $_POST['event_date'];
$emp_email = $_POST['emp_email'];


$sql = "INSERT INTO wdv341_events (event_id, emp_fName, emp_lName, emp_city, event_date, emp_email)
VALUES (null,'$emp_fName','$emp_lName','$emp_city','$event_date','$emp_email')";


/*
$sql = "INSERT TO wdv341_events ("; //First set of () are column names
$sql .= "emp_fName, ";
$sql .= "emp_lName, ";
$sql .= "emp_city, ";
$sql .= "event_date, ";
$sql .= "emp_email";

$sql .= ") VALUES ("; 
$sql .= "'$emp_fName',";
$sql .= "'$emp_lName',";
$sql .= "'$emp_city',";
$sql .= "'$event_date',";
$sql .= "'$emp_email'";

$sql .=")";

*/

 //$city = $mysqli->real_escape_string($city); *Example of escaping.* 
//DELETE From table
//WHERE rec_id=some_value; The RECORD ID
//INSERT is adding to shopping cart.
//SELECT is viewing the shopping cart.
//UPDATE is adding or removing a quantity.
//DELETE is removing content from the cart/database.

//sqli = "DELETE From wdv341_events
//WHERE event_id = 1";
//<a href = 'deleteEvent.php?rec_id=3'>delete</a>"
//$recId=$_GET["rec_id"];

if (mysqli_query($link,$sql) ) //Run the SQL command using the database you connected with....$link or $conn? Result object.
{
    echo "<h1>Your record has been successfully added to the database.</h1>";
}
else
{
  echo "<h1>You have encountered a problem.</h1>";
  echo "<h2 style='color:red'>" . mysqli_error($link) . "</h2>";
}
}
mysqli_close($link); //Closes connection
?>