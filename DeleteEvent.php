<?php include 'dbConnect.php';


$deleteRecId = $_GET['event_id'];


$sql = "DELETE FROM wdv341_events WHERE event_id = '$deleteRecId'";

if ($link->query($sql) === TRUE) 
	{
    	echo "<h2>Record deleted successfully!</h2>";
    	echo "<p>Please <a href='select.php'>view</a> your records.</p>";
	} 
else 
	{
    	echo "<h2>Error deleting record. </h2>" . $link->error;
	}

$link->close();

?>

    <!doctype html>
    <html>

    <head>
        <title>Delete Event</title>
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

    </body>

    </html>
