<?php
$breakfast_menu = simplexml_load_file('menu.xml');
if ( $_GET['calories'] && $_GET['calories'] != '' ) {
	$calories = $_GET['calories'];
	$calCount = true;
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>XML!</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section id="main">
		<form action="calories.php">
			<input name="calories" type="number" placeholder="Calorie limit">
			<input type="submit">
		</form>
			<?php if ($calCount) {
				echo('<h1>Fewer than ' . $calories . ' calories:</h1>');
				echo('<ul>');
					foreach ($breakfast_menu as $food) {
						if ( $food->calories < $calories ) {
							echo('<li>' . $food->name . ': $' . $food->price . '</li>');
						}
					}
				echo('</ul>');					
				echo('<p><a href="calories.php">Full menu</a></p>');
			} else {
				echo('<h1>Our breakfast menu</h1>');
				echo('<ul>');
					foreach ($breakfast_menu as $food) {
						echo('<li>' . $food->name . ': $' . $food->price . '</li>');
					}
				echo('</ul>');
			}
			?>
			</ul>
	</section>
</body>
</html>