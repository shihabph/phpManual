<?php 
interface A{
	function newcode($b,$c);
}
interface B{
	function calsum($a);
}
class C implements A, B{
	public function newcode($b, $c)
	{	
		echo $b+$c;
	}
	public function calsum($a)
	{
		echo $a;
	}
}
$test= new C();
$test->calsum(25);
echo "<br>"; //Line Break will be in this area to be defined
$test->newcode(43,71);
