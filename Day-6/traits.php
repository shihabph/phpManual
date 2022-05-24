<?php

trait TraitName
{
	public function FunctionName()
	{
		echo "I Am Printing using traits<br>";
	}	
}
class A{
	use TraitName;
}
class B extends A{
}
$obj= new B();
$obj->FunctionName();
$obj = new A();
$obj->FunctionName();

?>
