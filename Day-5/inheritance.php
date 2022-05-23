<?php
class employee
{ //Declaration of class Name
	// Declaration of variables
	protected $name;
	protected $age;
	protected $salary;

	function __construct($n, $a, $s) //Constructor function declaration
	{
		$this->name = $n; //Assigning value in constructor veriables
		$this->age = $a;
		$this->salary = $s;
	}
	function info()
	{
		//Function to show the values inside of the function
		echo "<h3>Employee Info of this company</h3>";
		echo "Employee Name:" . $this->name . "<br>";
		echo "Employee Age:" . $this->age . "<br>";
		echo "Employee Salary:" . $this->salary . "<br>";
	}
}
class manager extends employee
{ //Without the "extends" portion this showed an error but this including the properties of the employee class this is what Inheritance is.
	public $ta=2000;
	public $da=3000;
	public $totalSalary;
	function info()
	{
		$this->totalSalary= $this->salary+$this->ta+$this->da;
		//Function to show the values inside of the function
		echo "<h3>Manager Info of this company</h3>";
		echo "Employee Name:" . $this->name . "<br>";
		echo "Employee Age:" . $this->age . "<br>";
		echo "Employee Salary:" . $this->totalSalary . "<br>";

	}
}
$a1 = new manager("Md. Afsana Parvin", "25", "15000"); //Initialized the values inside the construct veriables
$a1->info();
$a2= new employee("Md. Aminul Islam", "25", "10000"); //Initialized the values inside the construct veriables

$a2->info(); //Calling the function
