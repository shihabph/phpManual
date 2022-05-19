<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div class="xprint" style="width: 750px; margin: 0 auto; background-color:thistle; padding: 25px">
		<?php
		// GLOBALS['']	
		echo "<h3>_GLOBALS METHOD <br></h3>";

		$x = 75;
		$y = 25;
		function addition()
		{
			$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		addition();
		echo $z . "<br>"; //Global Declared Value
		?>
		<?php

		echo "<h3>_SERVER METHOD <br></h3>";
		echo $_SERVER['PHP_SELF'] . "<br>"; //name of the file
		echo $_SERVER['SERVER_NAME'] . "<br>"; // Server name or the version of the Common Gateway Interface (CGI) the server is using
		echo $_SERVER['HTTP_HOST'] . "<br>"; //The Host header from the current request
		echo $_SERVER['HTTP_REFERER'] . "<br>"; //complete URL of the current page
		echo $_SERVER['HTTP_USER_AGENT'] . "<br>"; //
		echo $_SERVER['SCRIPT_NAME'] . "<br>";
		?>
		<h3>_SERVER METHOD <br></h3>
		<form method="post" action="
		<?php echo $_SERVER['PHP_SELF']; ?>">
		Name: <input type="text" name="fname"> <input type="submit">
		</form>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// collect value of input field
			$name = $_REQUEST['fname'];
			if (empty($name)) {
				echo "Name is empty";
			} else {
				echo $name;
			}
		}
		?>
	</div>
</body>

</html>