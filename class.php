<?php

echo "<h2> Class Object </h2>";

class person
{
	public $name; //Declaring value
	private $age;

	public function PersonName()
	{ //It will automatically be public if we don't mention the function type.
		echo "My Time going like a : " . $this->name . "<br>"; //Getting value from calling buy "$this->" method

	}
	public function personAge($Value)
	{ //It will automatically be public if we don't mention the function type.
		echo "My Time will come at: " . $this->age = $Value;
	}
}

$personOne = new person;
$personOne->name = "Painful Afternoon"; //Initialized the value in the Name
$personOne->PersonName(); // As the statement is inside the personName() Method so it need to call.
$personOne->PersonAge('7.00');// As the statement is inside the personName() Method so it need to call.
?>