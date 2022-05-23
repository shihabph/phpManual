<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div class="xprint" style="width: 750px; margin: 0 auto; background-color:bisque; padding: 25px">
		<?php

		// While Loop
		echo "<h3>Simple While loop</h3>";
		$x = 0;
		while ($x <= 10) {
			echo "The number is: $x <br>";
			$x++;
		}
		$x = 0;
		echo "<br>";

		// Number 2
		echo "<h3>Another way of While loop</h3>";
		while ($x <= 10) {
			echo "The Even Number is: $x <br>";
			$x += 2;
		}

		// DO..While Loop
		echo "<h3>Simple Do...While loop</h3>";
		$x = 1;
		do {
			echo "The number is: $x <br>";
			$x++;
		} while ($x <= 5);

		// Number 2
		echo "<h3>Another way of Do...While loop</h3>";
		$x = 1;
		do {
			echo "The Odd number is: $x <br>";
			$x += 2;
		} while ($x <= 8);


		// For Loop

		echo "<h3>Simple For loop</h3>";
		for ($x = 0; $x <= 10; $x++) {
			echo "The number is: $x <br>";
		}
		// Number 2
		echo "<h3>Another way of For loop</h3>";
		for ($x = 2; $x <= 10; $x += 2) {
			echo "Again Even number is: $x <br>";
		}

		// foreach Loop
		// The foreach loop works only on arrays, and is used to loop through each key/value pair in an array
		echo "<h3>Foreach loop for Block of Array </h3>";

		$colors = array("Red", "Green", "Blue", "Yellow");
		foreach ($colors as $value) {
			echo " The Given Color is: " . $value . "<br>";
		}

		echo "<h3>Foreach loop for Block of Array with the Declaration </h3>";
		$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
		foreach ($age as $x => $val) {
			echo "$x = $val<br>";
		}


		// Brake and Continue in For loop
		// Break
		echo "<br>";
		for ($x = 0; $x < 10; $x++) {
			if ($x == 5) {
				break;
			}
			echo "The number is: $x <br>";
		}
		echo "<p>The number Execution stops when it gets it condition fullfilled before break</p>";

		// Continue
		echo "<p>It remain continue whatever the condition</p>";
		
		for ($x = 0; $x < 10; $x++) {
			if ($x == 4) {
				continue;
			}
			echo "The number is: $x <br>";
		}
		?>

	</div>
</body>

</html>