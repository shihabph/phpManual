<?php 
abstract class A{
	public $name;
	public function __construct($n)
	{
	echo	$this->name=$n;
	}
}
$nm= new A("Shihab");

?>