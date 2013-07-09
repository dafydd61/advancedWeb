<?php
// Get the variables from the query
$name = $_GET['yourname'];
$age = $_GET['age'];
$color = $_GET['color'];
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello PHP!</title>
	<style>
		body {
			background: <?php echo $color; ?>;
		}
	</style>
</head>
<body>
	<?php var_dump($_GET); ?>
	<h1>Ohai <?php echo $name; ?>!</h1>
	<p>In which we display the results of our work.</p>
	<p>By my calculations, you are <strong><?php echo $age; ?></strong> years old.</p>
</body>
</html>