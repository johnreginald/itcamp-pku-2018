<?php 
	class Calculator
	{
		public function add($x, $y)
		{
			return $x + $y;
		}

		public function subtract($x, $y)
		{
			return $x - $y;
		}

		public function multiply($x, $y)
		{
			return $x * $y;
		}

		public function division($x, $y)
		{
			return $x / $y;
		}
	}
	
	$calculator = new Calculator();

	echo $calculator->add(10, 20);

 ?>