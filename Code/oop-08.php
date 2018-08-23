<?php 
	
	class Student 
	{
		public $name = "John Doe";

		public $age = 25;

		public function printInfo()
		{
			return "My name is " . $name . " and " . $age . " years old";
		}		
	}

	$student = new Student();

	echo $student->printInfo();
?>