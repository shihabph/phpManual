<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Types</title>
</head>
<body>
	<?php
$a_bool = TRUE; // a boolean
$a_str = "foo"; // a string
$a_str2 = 'foo'; // a string
$an_int = 12; // an integer

echo gettype( $a_bool ); // prints out:  boolean
echo ("<br>");
echo gettype( $a_str ); // prints out:  string
echo ( "<br>" );
echo var_dump( $an_int ); //Priints out: Integer
echo ( "<br>" );


// If this is an integer, increment it by four
if ( is_int( $an_int ) ) {
    $an_int += 4;
	echo ($an_int);
}

// If $a_bool is a string, print it out
// (does not print out anything)
if ( is_string( $a_bool ) ) {
    echo "String: $a_bool";
}
?>

<!-- Boolean -->
<?php
var_dump( (bool) "" );
echo ("<br>"); // bool(false)
var_dump( (bool) "0" );
echo ("<br>"); // bool(false)
var_dump( (bool) 1 );
echo ("<br>"); // bool(true)
var_dump( (bool)  - 2 );
echo ("<br>"); // bool(true)
var_dump( (bool) "foo" );
echo ("<br>"); // bool(true)
var_dump( (bool) 2.3e5 );
echo ("<br>"); // bool(true)
var_dump( (bool) [ 12 ] );
echo ("<br>"); // bool(true)
var_dump( (bool) [] );
echo ("<br>"); // bool(false)
var_dump( (bool) "false" );
echo ("<br>"); // bool(true)
?>


<!-- String -->
<?php
echo '<br><br> this is a simple string <br>';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do <br>';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back" <br>';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*? <br>';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*? <br>';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline <br>';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either <br>';
?>

<!-- Heredoc -->
<?php
echo <<<END
      a
     b
    c
\n
END;

// 4 spaces of indentation
echo <<<END
      a
     b
    c
    END;
	?>

</body>
</html>