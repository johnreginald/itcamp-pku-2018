<?php 
	abstract class Human
	{
		protected $name;

		protected $age;

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

	class Student extends Human
	{
		public function printInfo()
		{
			return "My name is " . $this->name . " and " . $this->age . " years old. I'm a Student";
		}
	}

	class Teacher extends Human
	{
		public function printInfo()
		{
			return "My name is " . $this->name . " and " . $this->age . " years old. I'm a Teacher";
		}
	}

	$human = new Human("asdf", 20);
	echo $human->printInfo();

	// $student = new Student("John Doe", 25);
	// echo $student->printInfo();

	// echo "<br>";

	// $teacher = new Teacher("John Smith", 45);
	// echo $teacher->printInfo();

?>