<?php

// NESTING FUNCTION
function foo()
{
	function bar()
	{
		echo "I don't exist until foo() is called.\n";
	}
}

/* We can't call bar() yet
   since it doesn't exist. */
foo();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */
bar();

function recursion($a)
{
	if ($a < 20) {
		echo "$a\n";
		recursion($a + 1);
	}
}
?> 
<?php
function takes_array($input)
{
	echo "$input[0] + $input[1] = ", $input[0] + $input[1];
}
?> 
<?php
// function makecoffee($type = "cappuccino")
// {
// 	return "<br>Making a cup of $type.\n";
// }
// echo makecoffee();
// echo makecoffee(null);
// echo makecoffee("espresso");
?> 
<?php
function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
{
	$device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
	return "Making a cup of " . join(", ", $types) . " with $device.\n";
}
echo makecoffee();
echo makecoffee(array("cappuccino", "lavazza"), "teapot"); ?> 

<?php
function fool()
{
	echo "In foo()<br />\n";
}

function bari($arg = '')
{
	echo "In bar(); argument was '$arg'.<br />\n";
}

// This is a wrapper function around echo
function echoit($string)
{
	echo $string;
}

$func = 'fool';
$func();        // This calls foo()

$func = 'bari';
$func('test');  // This calls bar()

$func = 'echoit';
$func('test');  // This calls echoit()
?> 

<?php
$greet = function ($name) {
	printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');
?>

<?php

$y = 1;
