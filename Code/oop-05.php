<?php 
	
	class John
	{
		public $name = "John Doe";

		public function message() 
		{
			return "Hello World from John Doe";
		}
	}

	class Mary
	{
		public $name = "Mary James";

		public function message()
		{
			return "Hello World from Mary James";
		}
	}

	$john = new John();
	echo $john->name;
	echo "<br>";
	echo $john->message();
	echo "<br>";

	$mary = new Mary();
	echo $mary->name;
	echo "<br>";
	echo $mary->message();
	echo "<br>";

 ?>