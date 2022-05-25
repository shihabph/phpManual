<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="function_title.css">
	<title>Document</title>
	<style>
		body {
			margin: 5px;
		}

		h3 {
			margin: 0 auto;
			font-family: Arial, Helvetica, sans-serif;
			text-transform: capitalize;
			font-size: 18px;
			height: 25px;
			display: flex;
			justify-content: center;
			border: 1px solid burlywood;
			vertical-align: middle;
		}
	</style>
</head>

<body>

	<h3> array_count_values() function </h3>

	<?php
	$food = ['fish', 'meat', 'fish', 'egg', 'rice'];
	echo "<pre>";
	print_r(array_count_values($food));
	echo "</pre>";
	?>


	<h3> in_array() and array_search() function
	</h3>

	<?php
	// $food = ['fish', 'meat', 'fish', 'egg', 'rice']; 

	echo in_array('egg', $food); //it can call $food from the previously declared array

	$multi = array(array('a', 'b'), array('c', 'd'), 'e');

	echo array_search(array('a', 'b'), $multi);
	?>

	<h3> array_replace() and array_replace_recursive() function </h3>

	<?php

	$a = array('man', 'is', 'the', 'coolest', 'creature');
	$b = array('Only', 'We are');
	$newArray = array_replace($a, $b);
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";

	$c = array(array('B', 'WoMan is Ex'), array('Not', 'She is bad'));
	$d = array(array('A', 'Man is Best'), array('Only', 'We are the Man'));
	$newArray2 = array_replace($c, $d);
	echo "<pre>";
	print_r($newArray2);
	echo "</pre>";

	?>

	<h3> array_change_key_case() to change key uppercase/lowercase </h3>
	<?php
	$input_array = array("FirSt" => 1, "SecOnd" => 4);
	echo "<pre>";
	print_r(array_change_key_case($input_array, CASE_UPPER));
	echo "</pre>";
	?>

	<h3 class=""> array_chunk() to Create a Multi Dimentional Array with set of array value </h3>
	<?php
	$input_array2 = array('a', 'b', 'c', 'd', 'e');
	echo "<pre>";
	print_r(array_chunk($input_array2, 2));
	print_r(array_chunk($input_array2, 3, true)); //Creates a Multi Dimentional Array with set of array value
	echo "</pre>";
	?>

	<h3 class=""> array_column() representing a possible record set returned from a database </h3>
	<?php
	// Array representing a possible record set returned from a database
	$records = array(
		array(
			'id' => 2135,
			'first_name' => 'John',
			'last_name' => 'Doe',
		),
		array(
			'id' => 3245,
			'first_name' => 'Sally',
			'last_name' => 'Smith',
		),
		array(
			'id' => 5342,
			'first_name' => 'Jane',
			'last_name' => 'Jones',
		),
		array(
			'id' => 5623,
			'first_name' => 'Peter',
			'last_name' => 'Doe',
		)
	);

	$first_names = array_column($records, 'first_name');
	$last_name = array_column($records, 'last_name', 'id');
	echo "<pre>";
	print_r($last_name);
	print_r($first_names);
	echo "</pre>";
	?>

	<h3 class=""> array_column() column of names from the private "name" property of an object using the magic __get() method. </h3>


	<?php
	class Person
	{
		private $name;

		public function __construct(string $name)
		{
			$this->name = $name;
		}

		public function __get($prop)
		{
			return $this->$prop;
		}

		public function __isset($prop): bool
		{
			return isset($this->$prop);
		}
	}

	$people = [
		new Person('Fred'),
		new Person('Jane'),
		new Person('John'),
	];
	echo "<pre>";
	print_r(array_column($people, 'name'));
	echo "</pre>";
	?>

	<h3>A simple array_combine() example</h3>

	<?php
	$a = array('green', 'red', 'yellow');
	$b = array('avocado', 'apple', 'banana');
	$c = array_combine($a, $b); //First parameter works as ID of this


	echo "<pre>";
	print_r($c);

	echo "</pre>";
	?>


	<h3>array_diff_assoc() — Computes the difference of arrays with additional index check</h3>
	<?php
	$array1 = array("a" => "green", "1" => "brown", "c" => "blue", "red");
	$array2 = array("a" => "green", "1" => 'yellow', "red");
	$array3 = array('black', 'blue');
	$result = array_diff_key($array1, $array2, $array3);

	echo "<pre>";
	print_r($result);
	echo "</pre>";
	?>
	<h3>A simple array_pop()--> Delete and array_push()--> Add in the last etry of targetted value</h3>
	<!-- Pop -->
	<?php
	$stack = array("orange", "banana", "apple", "raspberry");
	$fruit = array_pop($stack);
	echo "<pre>";
	print_r($stack);
	echo "</pre>";
	?>
	<!-- Push -->
	<?php
	$stack = array("orange", "banana", "apple", "raspberry");
	$fruit = array_push($stack, 'Rosemary');
	echo "<pre>";
	print_r($stack);
	echo "</pre>";
	?>
	<h3>A simple array_marge()--> marge 2 or more index and Associative array and array_marge_recursive()--> marge 2 or more</h3>

	<?php
	$array1 = array("color" => "red", 2, 4);
	$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
	$result = array_merge($array1, $array2);
	echo "<pre>";
	print_r($result);
	echo "</pre>";
	?>
	//Array_marge_recursive()
	<?php
	$ar1 = array("color" => array("favorite" => "red"), 5);
	$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
	$result = array_merge_recursive($ar1, $ar2);
	echo "<pre>";
	print_r($result);
	echo "</pre>";
	?>

	<h3>A simple array_slice() to cut-off the value from begining and the end from the array</h3>
	<?php
	$input = array("a", "b", "c", "d", "e");

	$output = array_slice($input, 2);      // returns "c", "d", and "e"
	$output = array_slice($input, -2, 1);  // returns "d"
	$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

	// note the differences in the array keys
	echo "<pre>";
	print_r(array_slice($input, 1, -1));
	print_r(array_slice($input, 2, -1, true));
	echo "</pre>";
	?>

	<h3>A simple array_splice() to replace the value in any range of the array</h3>
	<?php
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 2);
	echo "<pre>";
	var_dump($input);
	echo "</pre>";

	$input = array("red", "green", "blue", "yellow", "green", "blue",);
	array_splice($input, 1, 3);
	echo "<pre>";
	var_dump($input);
	echo "</pre>";

	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 1, count($input), "orange");
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
	//Adding another array
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, -1, 1, array("black", "maroon"));
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
	?>

	<h3>A simple array_key() to Find the key</h3>

	<?php
	$array = array(0 => 100, "color" => "red");

	echo "<pre>";
	print_r(array_keys($array));
	echo "</pre>";

	$array = array("blue", "red", "green", "blue", "blue");
	echo "<pre>";
	print_r(array_keys($array, "blue"));
	echo "</pre>";

	$array = array(
		"color" => array("blue", "red", "green"),
		"size"  => array("small", "medium", "large")
	);

	echo "<pre>";
	print_r(array_keys($array));
	echo "</pre>"
	?>
	<h3>Get Array value with new key or ID using the Array_value() function</h3>
	<?php
	$array = array("size" => "XL", "color" => "gold");
	echo "<pre>";
	print_r(array_values($array));
	echo "</pre>";
	?>

	<h3>Get Only unique from the Array with Array_unique() function</h3>
	<?php
	$input = array("blue", "red", "green", "blue", "blue");
	$result = array_unique($input);
	echo "<pre>";
	print_r($result);
	echo "</pre>";

	?>
	<h3>Flip value to key using array_flip() function</h3>
	<?php
	$input = array("a" => 1, "b" => 1, "c" => 2);
	$flipped = array_flip($input);
	//Normal
	echo "<pre>";
	print_r($input);
	echo "</pre>";
	//Flipped
	echo "<pre>";
	print_r($flipped);
	echo "</pre>";
	?>

	<h3>Add or Multiply all the array value using the array_sum() and Array_product() function</h3>
	<?php
	$a = array(2, 4, '8.5');
	echo "<pre>";
	echo "sum(a) = " . array_sum($a) . "\n";
	echo "</pre>";

	$b = array("a" => 1.2, "b" => 2, "c" => 3.4);
	echo "<pre>";
	echo "sum(b) = " . array_sum($b) . "\n";
	echo "</pre>";
	?>
	Multiply/Product
	<?php
	$a = array(2, 4, '8.5');
	echo "
	<pre>";
	echo "product(a) = " . array_product($a) . "\n";
	echo "</pre>";

	$b = array("a" => 1.2, "b" => 2, "c" => 3.4);
	echo "
	<pre>";
	echo "product(b) = " . array_product($b) . "\n";
	echo "</pre>";
	?>

	<h3>array_rand() Pick one or more random keys out of an array</h3>
	<?php
	$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
	$rand_keys = array_rand($input, 2);
	echo $input[$rand_keys[0]] . "\n";
	echo $input[$rand_keys[1]] . "\n";
	?>
</body>
<!-- 

echo "<pre>";

echo "</pre>"; 

-->

</html>