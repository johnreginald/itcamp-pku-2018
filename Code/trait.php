<?php 
	trait Paypal
	{
		public function charge($user, $amount)
		{
			return "Charged";
		}
	}

	trait Sms
	{
		public function send()
		{
			return "Sending SMS";
		}
	}

	class PaymentGateway
	{
		use Paypal, Sms;

		public function checkout()
		{
			$this->charge();
			$this->send();
		}
	}

	$payment = new PaymentGateway();
	$payment->checkout();

?> 