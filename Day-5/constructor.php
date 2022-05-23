<?php

echo "<h2> Constructor </h2>";

class person
{
	public $Feeling; //Declaring value
	public $Time;
	public function __construct($a, $b)//Declaring Constructor 
	{
		$this->Feeling= $a;
		$this->Time= $b;
	}
	
	public function PersonEnvironment()
	{ 
		echo {$this->Feeling}{$this->Feeling};
	}

}

$personOne = new person("Gloomy Sunday, 12.00PM");
$personOne->PersonEnvironment();
?>