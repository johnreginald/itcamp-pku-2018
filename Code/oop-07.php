<?php 
	
	$name = "John Doe";

	function printInfo() {
		return $name;
	}

	// Undefined Variable
	var_dump( printInfo() );

 ?>