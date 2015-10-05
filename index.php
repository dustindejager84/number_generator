<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="utf-8">
	
	<title>Random number generator</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>Enter a Minimum and a Maximum number </h1>
<h2>more than 2 numbers apart atleast</h2>
<form action="results.php" method="post">
    Minimum: <input name="my_html_input_low" type="number" value="" /><br />
	Maximum: <input name="my_html_input_high" type="number" value="" /><br /><br />

	<h3>No range - Just hit me! (up to 999999)</h3>

    <input type="submit" name="my_form_submit_button" 
           value="Generate my Number"/>

</form>

</body>
</html>