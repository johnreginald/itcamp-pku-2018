<?php 
	
	class Student
	{
		public $name;

		public $age;

		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}

		public function printInfo()
		{
			return "My name is " . $this->name . " and " . $this->age . " years old";
		}
	}

	class ProgrammingStudent extends Student { }

	$student = new ProgrammingStudent("John Doe", 25);

	echo $student->printInfo();

?>