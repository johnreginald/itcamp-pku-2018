<?php 

	abstract class Model
	{
		abstract public function save($data);
	}

	class Article extends Model
	{
		public function save($data)
		{
			var_dump( "Save in Database with Given Data" );
		}
	}

	$article = new Article();

	$article->save();
 ?>