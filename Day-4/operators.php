<?php
$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
// ternary operator associativity differs from C/C++
// $a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2 (prior to PHP 8.0.0)

// $a = 1;
$b = 2;
// $a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo $a . "," . $b . "<br>";
?>
<?php

$a = ($b = 4) + 5; // $a is equal to 9 now, and $b has been set to 4.
echo $a;




$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;

echo "\n Bitwise AND \n";
foreach ($values as $value) {
	$result = $value & $test;
	printf($format, $result, $value, '&', $test);
}

echo "\n Bitwise Inclusive OR \n";
foreach ($values as $value) {
	$result = $value | $test;
	printf($format, $result, $value, '|', $test);
}

echo "\n Bitwise Exclusive OR (XOR) \n";
foreach ($values as $value) {
	$result = $value ^ $test;
	printf($format, $result, $value, '^', $test);
}
?>

<?php
echo "<h3>Postincrement</h3>";
$a = 5;
echo "Should be 5: " . $a++ . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "Should be 5: " . $a-- . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "Should be 4: " . --$a . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";
?> 

<?php
$a = "Hello ";
$b = $a . "World!"; // now $b contains "Hello World!"
echo $b;
$a = "Hello ";
$a .= "World!";     // now $a contains "Hello World!"
?> 