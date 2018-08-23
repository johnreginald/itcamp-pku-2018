<?php 
	
	class Student
	{
		protected $name;

		protected $age;

		private $test = 50;

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

	class Teacher extends Student
	{
		public function getTest()
		{
			return $this->test;
		}
	}

	$student = new Student("John Doe", 45);

	var_dump( $student );

	$teacher = new Teacher("John Doe", 45);

	var_dump( $teacher );

	echo $teacher->getTest();

?>