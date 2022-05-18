<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1 align="center"> Variable Type</h1>

	<?php
	$foo = 25;
	$bar = &$foo;      // This is a valid assignment.
	$bar = &(24 * 7);  // Invalid; references an unnamed expression.

	function test()
	{
		return 25;
	}

	$bar = &test();    // Invalid.
	?>

</body>

</html>