
<?php
$servername = "ecbiz171";
$username = "stepha82_wdv341";
$password = "myphppw1";
$db_name = "stepha82_wdv341";

// Create connection
$link = new mysqli($servername, $username, $password, $db_name);

/* Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>*/

//Check connection with DEVELOPMENT exception handling

if($link->connect_error)
{
	die("Connection Failed: " . $link->connect_error);	
}
else
{
	//echo "Connected Successfully";	
}

?>


