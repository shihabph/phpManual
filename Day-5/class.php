<?php

echo "<h2> Class Object </h2>";

class person
{
	public $Feeling; //Declaring value
	private $Time;

	public function PersonFeeling()
	{ //It will automatically be public if we don't mention the function type.
		echo "My Time going like a " . $this->Feeling . "<br>"; //Getting value from calling buy "$this->" method

	}
	public function personTime($Value)
	{ //It will automatically be public if we don't mention the function type.
		echo "My Time will come at: " . $this->Time = $Value;
	}
}

$personOne = new person;
$personOne->Feeling = "Painful Afternoon"; //Initialized the value in the Name
$personOne->PersonFeeling(); // As the statement is inside the personName() Method so it need to call.
$personOne->PersonTime('7.00');// As the statement is inside the personName() Method so it need to call.
?>