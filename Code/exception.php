<?php 

	// Object-oriented Style Error Handling
	class FileManager
	{
		public function check($name)
		{
			if ( ! file_exists($name) ) {
				throw new asdfasdfException("File Not Found!");
			}

			return "Your File is Found";
		}
	}

	try {

		$file = new FileManager();

		echo $file->check("hello.txt");
		
	} catch ( Exception $e ) {

		echo $e->getMessage();

	}
 
?>