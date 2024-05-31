<?php
session_start();
require_once 'config-stripe.php';
require_once 'assets/includes/pdo.php';
$lowercaseAlphabet = range('a', 'z');

$uppercaseAlphabet = range('A', 'Z');

$numbers = range(1, 10);

$abc = array_merge($lowercaseAlphabet, $uppercaseAlphabet, $numbers);

$randomOrderId = $abc[rand(19, 21)] . rand(0, 2) . $abc[rand(0, 2)] . $abc[rand(16, 19)]  . rand(5, 3432) . $abc[rand(5, 10)] . $abc[rand(10, 15)];

	if(isset($_POST['stripeToken'])){
		


		\Stripe\Stripe::setVerifySslCerts(false);
	
		$token=$_POST['stripeToken'];
	
		$data=\Stripe\Charge::create(array(
			
			"amount"=>ceil(($_POST['price']) * 100),
			"currency"=>"pkr",
			"description"=>"Skill Sphere X",
			"source"=>$token,
		));
		
		
		
		$paymentSuccess = false;
		$paymentFailed = false;

		if ($pdo->create("stripe_payments", ['order_id' => $randomOrderId, 
		'gig_id' => $_POST['gig_id'], 
		'total' => $_POST['price'], 
		'order_status' => 'pending', 
		'company_id' => $_SESSION['company_id'], 
		'pay_with' => "Stripe",'payment_status' => json_encode($data), 
		'status' => json_decode(json_encode($data), true)['status']])) {
			$paymentSuccess = true;
		} else {
			$paymentFailed = true;
		}
		
		
		if ($paymentSuccess) {
			echo "Payment success. refreshing...";
		} elseif ($paymentFailed) {
			echo "Payment failed. refreshing...";
		}
		$pdo->headTo("index.php", 3000);


	

		
	}
	






?>