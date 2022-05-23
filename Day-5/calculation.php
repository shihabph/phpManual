<?php 

class calculate{
	function addition($a, $b){
		echo "The Sum of the two value: ". ($a+$b)."<br>";
	}
	function sub($a, $b){
		echo "The Subtraction of the two value: " . ($a - $b). "<br>";

	}
	function multi($a, $b)
	{
		echo "The Multiplication of the two value: " . ($a * $b). "<br>";
	}
	function div($a, $b)
	{
		echo "The Divisor of the two value: " . ($a / $b). "<br>";
	}
	function mod($a, $b)
	{
		echo "The Modulas of the two value: " . ($a % $b) . "<br>";
	}
	function Exp($a, $b)
	{
		echo "The Exponent of the two value: " . ($a ** $b) . "<br>";
	}
}
