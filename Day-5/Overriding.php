<?php
class A{
	public $name="What the Luck";
	public function cal($a, $b){
		return $a*$b;
	}
}
class B extends A{
	public $name="What the Suck";
	public function cal($a, $b)
	{
		return $a + $b;
	}
}
$test= new A();
echo $test->cal;


?>