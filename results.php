<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="utf-8">
	
	<title>Random number generated</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php 	$min = $_POST['my_html_input_low'];
		$max = $_POST['my_html_input_high'];

	if ($min == false ) {
	function randomGen($min, $max, $quantity) {
	    $numbers = range($min, $max);
	    shuffle($numbers);
	    return array_slice($numbers, 0, $quantity);
	    
	} ?>
	<h3>Random as fuck!</h3>
	<h1><?php 
		$valueR = randomGen(0,99999,1);
		echo $valueR[0]; //generates 20 unique random numbers ?>
	</h1>
	<br /><br />
	<a href="index.php">Generate another number</a>

<?php } elseif ( $max > $min ) { ?>
	<h3>Random number between 1 and "<?php echo $max ?>": </h3>
	<h1><?php echo mt_rand($min, $max); ?></h1>
	<br /><br />
	<a href="index.php">Generate another number</a>
 <?php } elseif ($max == $min)  { ?>
	<h3>Random number between 1 and "Don't be an idiot": </h3>
	<h1>Number must be from "3" up!</h1>
	<br /><br />
	<a href="index.php">Try again!</a>
 <?php } elseif ( $max <= $min) { ?>
 	<h3>Random number between 1 and "Don't be an idiot": </h3>
	<h1>Try a positive number from "3" up!</h1>
	<br /><br />
	<a href="index.php">Try again!</a>
 <?php } ?>
</body>
</html>