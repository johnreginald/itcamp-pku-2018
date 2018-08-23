<?php 

	// Can't Instantiate Abstract Class
	abstract class Model
	{
		public function save($data)
		{
			var_dump( "Save in Database with given Data" );
		}
	}

	class Article extends Model { }

	$article = new Article();

	$article->save("User Data");
 ?>