<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1 align="center">Array in the Manual</h1>

	<!-- Array to String Conversion and display them with their type -->
	<?php
	$arr = ["Hello", "This", "is", "XYZ"];
	var_dump($arr); //Output:  array(4) { [0]=> string(5) "Hello" [1]=> string(4) "This" [2]=> string(2) "is" [3]=> string(3) "XYZ" }
	echo "<br>";

	print_r($arr); //Output:  Array ( [0] => Hello [1] => This [2] => is [3] => XYZ )
	echo "<br>";

	var_export($arr); //Output:  array ( 0 => 'Hello', 1 => 'This', 2 => 'is', 3 => 'XYZ', )
	echo "<br>";

	echo json_encode($arr); //Output:  ["Hello","This","is","XYZ"]
	echo "<br>";

	foreach ($arr as $value) {
		echo $value . ' '; // $value is the portion within single quotation
	} //Output:  Hello This is XYZ
	echo "<br>";

	$array = [
		"a",
		"b",
		6 => "c", //Changed the indexing
		"d",
	];
	var_dump($array);
	echo "<br>";
	?>
	<?php
	function getArray()
	{
		return array(1, 2, 3);
	}

	$secondElement = getArray()[1];

	// or
	list(, $secondElement) = getArray();
	?>

</body>

</html>