<?php 
	
	class Student
	{
		private $name;

		private $age;

		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}

		// Getter
		public function getName()
		{
			return $this->name;
		}

		// Setter
		public function setName($name)
		{
			$this->name = $name;
		}

		public function printInfo()
		{
			return "My name is " . $this->name . " and " . $this->age . " years old";
		}
	}

	$student = new Student("John Doe", 25);

	var_dump( $student );

	$student->setName("Mary James");

	var_dump( $student );
	
	echo $student->getName();


?>