<?php

//The following section of PHP acts as the Controller.  It contains the processing logic
//needed to gather the data from the database table.  Format the data into a presentation
//format that can be viewed on the client's browser.


	include 'dbConnect.php';
	
	$sql = "SELECT event_id, emp_fName, emp_lName, emp_city, event_date, emp_email FROM wdv341_events";		//build the SQL command	

	$res = $link->query($sql);	//run the query
	
	//$emp_fName = $mysqli->real_escape_string($emp_fName);
	//$emp_lName = $mysqli->real_escape_string($emp_lName);
	echo "<Table Border='2'>";
	echo "<tr>";
	echo "<th>First Name</th><th>Last Name</th><th>City</th><th>Date</th><th>Email</th><th>Update</th><th>Delete</th>";
	echo "</tr>";
	
	if($res)
	{
		//process the result
		if ($res->num_rows > 0) 
		{
			//echo "<h1>Number of rows is " . $res->num_rows . "</h1>";			
			// output data of each row
			
			//$displayMsg .= "<table class='tableFormat'>";
			while ($row = $res->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>", $row["emp_fName"],"</td>";
				echo "<td>", $row["emp_lName"],"</td>";
				echo "<td>", $row["emp_city"],"</td>";
				echo "<td>", $row["event_date"],"</td>";
				echo "<td>", $row["emp_email"],"</td>";
				echo "<td>", "<a href = 'updateEvent.php?event_id=$row[event_id]'><input type='button' value='Update'/>";
				echo "<td>", "<a href = 'deleteEvent.php?event_id=$row[event_id]'><input type='button' value='Delete'/>"; 
				echo "</tr>";
			}

		} 
		else 
		{
			echo "0 results";
		}		
	}
	else
	{
		//display error message for DEVELOPMENT purposes
		echo "<h3>Sorry there has been a problem.</h3>";
		echo "<p>" . mysqli_error($link) . "</p>";			//Display error message
	}
	$link->close();
	
?>
<html>
<style>
#container {
    width: 960px;
    margin: 0 auto;
    
}
body {
  background-color: #6699FF;
}


</style>
<head>
	<title>Select Event</title>

</head>
<body>
	<h2>We found the following information.</h2>
	<p>Please click <a href='selfposting.php'>here</a> to add another record.</p>
</body>
</html>

