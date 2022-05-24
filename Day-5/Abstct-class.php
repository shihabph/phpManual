<?php 
abstract class A{
	public $name;
	// public function __construct($n)
	// {
	// echo	$this->name=$n;
	// }
	abstract protected function cal($a, $b);
	
}
class INB extends A{
public function cal($x, $y){// It's Not Mandotary to have the same name
echo $x+$y;
}
}
$nm= new INB();
$nm->cal(2.88, ((.48*2)/8))
?>
