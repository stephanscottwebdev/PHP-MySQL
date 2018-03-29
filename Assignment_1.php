<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Intro to PHP</title>
</head>

<?php
	$firstName = "Stephan"; 

	$classes = 5; 

	$classNames = "Music Appreciation, Intro to PHP, Intro to Flash, Intro to Fireworks and Photoshop, Field Ecology"; 
?>

<body>

<p>
<?php
	echo "Hi! Here are some examples of PHP Jeff.";
?>
</p>


<p> Hi! My name is <?php echo $firstName; ?>!</p>


<p> This semester I am taking <?php echo $classes;?> classes. </p> 


<p><?php echo $firstName." 's schedule includes ".$classNames." . " ?></p> 

</body>
</html>