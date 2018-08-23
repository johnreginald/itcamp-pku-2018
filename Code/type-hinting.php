<?php 
	class Message
	{
		public function getMessage()
		{
			return "Hello World";
		}
	}

	class User
	{
		public function sendMessage(Message $message)
		{
			echo $message->getMessage();
		}
	}

	class Test extends Message { }
	class John extends Test {}

	$user = new User();
	$user->sendMessage( new John() );

 ?>