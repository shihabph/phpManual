<?php
class Drink{
	public $Suger, $Milk;
	function __construct($sgr="No Suger <br>", $mlk="No Milk")
	{
		$this->Suger=$sgr;
		$this->Milk=$mlk;
	}

	function blend()
	{
		echo $this->Suger, $this->Milk;
	}
	
}
$s1 = new Drink( );
// $s1->Suger= "2 Tea spoon &";
// $s1->Milk= "200ml of Milk";

$s1->blend()


 ?>