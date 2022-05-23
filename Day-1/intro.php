<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo "HOla";
	?>
	<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>

<?php
$x=12;
 if ( $x == 10 ): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif;?>

<!-- Variable declaration -->
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?> 

<!-- Mixing HTML and PHP -->

Example #3 Mixing both HTML and PHP modes



<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos() must have returned non-false</h3>
<p>You are using Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() must have returned false</h3>
<p>You are not using Internet Explorer</p>
<?php
}
?> 

<?php
$a_bool = TRUE; // a boolean
$a_str = "foo"; // a string
$a_str2 = 'foo'; // a string
$an_int = 12; // an integer

echo gettype( $a_bool ); // prints out:  boolean
echo gettype( $a_str ); // prints out:  string

// If this is an integer, increment it by four
if ( is_int( $an_int ) ) {
    $an_int += 4;
}

// If $a_bool is a string, print it out
// (does not print out anything)
if ( is_string( $a_bool ) ) {
    echo "String: $a_bool";
}
?>

</body>
</html>