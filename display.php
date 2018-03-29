<?php include "Notice.php";

 $notice1 = new notice;
 $notice1->setName("Stephan","Scott");
 $notice1->setDisplayDate(10, 15, 2015);
 $notice1->setMessage("This expires on: ");
 $notice1->setExpirationDate(11, 15, 2015);
 


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OOP Display</title>
</head>

<body>
<h3><?php $notice1->displayNotice(); ?></h3>


</body>
</html>