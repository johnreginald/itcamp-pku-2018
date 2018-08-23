<?php 

	interface Logger
	{
		public function save();
	}

	class FileLogger implements Logger
	{
		public function save()
		{
			var_dump( "Save in File" );
		}
	}

	class DatabaseLogger implements Logger
	{
		public function save()
		{
			var_dump( "Save in Database" );
		}
	}

	// class CloudLogger implements Logger
	// {
	// 	public function save()
	// 	{
	// 		var_dump( "Save in Cloud - Google Drive" );
	// 	}
	// }

	class ArticleController
	{
		protected $logger;

		public function __construct(Logger $logger)
		{
			$this->logger = $logger;
		}

		public function show()
		{
			echo "Hello World";
			$this->logger->save();
		}
	}

	$article = new ArticleController( new DatabaseLogger() );

	$article->show();
 ?>