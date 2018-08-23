<?php 
	class Paypal
	{
		public function charge($user, $amount)
		{
			return "Charged";
		}
	}

	class Sms
	{
		public function send()
		{
			return "Sending SMS";
		}
	}

	class PaymentGateway
	{
		private $sms;
		private $paypal;

		public function __construct()
		{
			$this->sms = new Sms();
			$this->paypal = new Paypal();
		}

		public function checkout()
		{
			$this->paypal->charge();
			$this->sms->send();
		}
	}

	$payment = new PaymentGateway();
	$payment->checkout();

?> 