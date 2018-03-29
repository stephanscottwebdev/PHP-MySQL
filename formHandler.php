<?php 
	//I learned that I did this wrong and that code wasnt changing anything and everything can go into the html. I learned I thought I understood php more than I did!
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>
</head>

<body>
<h1>WDV101 Intro HTML and CSS</h1>
<h2>Chapter 9 - Creating Forms</h2>
<p><strong>PHP Form Handler</strong> - This process will display the 'name = value' pairs for all the elements of a form. Use formHandler.php in the action attribute of your form. </p>
<p>Field '<strong>name</strong>' - The value of the name attribute from the HTML form element.</p>
<p>Field <strong>'value</strong>' - The value entered in the field. This will vary depending upon the HTML form element.</p>
<h3>Form Name-Value Pairs</h3>
<h3>Example of and MVC View area.</h3>
<table border='1'>
	<tr>
    <th>Field Name</th>
    <th>Value of field</th>

<?php	//Instead of echoing html code, just send in the html and echo the php processes/variables.
		foreach($_POST as $key => $value)
	{
		echo '<tr>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	}
    
	echo "<p>&nbsp;</p>";
?> 
<?php		//Better practice and easier for designers to work with this code.
	foreach($_POST as $key => $value)
	{
	?>
    	<tr>
        <td><?php echo $key?></td>
        <td><?php echo $value?></td>
        
    <?php
	}
	?>
    </tr>
</table>
</body>
</html>
