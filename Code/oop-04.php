<?php 
	
	class John
	{
		public $name = "John Doe";

		public function message() 
		{
			return "Hello World from John Doe";
		}
	}

	// Create an Object from Class - Instantiation
	$john = new John();

	// Using Variable from Object
	echo $john->name;

	// Calling Function from Object
	echo $john->message();

 ?>