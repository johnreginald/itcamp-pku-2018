<?php 

	interface Talkable 
	{
		public function talk();
	}

	class American implements Talkable
	{
		public function talk()
		{
			return "Hello";
		}
	}

	class Myanmar implements Talkable
	{
		public function talk()
		{
			return "Min Ga Lar Par";
		}
	}

	$american = new American();

	var_dump( $american->talk() );

	$myanmar = new Myanmar();

	var_dump( $myanmar->talk() );
	
 ?>