<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello PHP!</title>
</head>
<body>
	<h1>Hello PHP!</h1>
	<p>In which we make a form, submit it, and do someting with the results.</p>
	<form action="result.php" method="get">
		<ol>
			<li>
				<label for="yourname">What is your name?</label>
				<input id="yourname" type="text" name="yourname">
			</li>
			<li>
				<label for="quest">What is your quest?</label>
				<input id="quest" type="text" name="quest">
			</li>
			<li>
				<label for="color">What is your favourite colour?</label>
				<input id="color" type="color" name="color">
			</li>
			<li>
				<input type="submit" value="Okay dude">
			</li>
		</ol>
	</form>
</body>
</html>