<?php 
	
	require_once 'vendor/autoload.php';
	include 'creds.php';

	//require_once 'lib/swift_required.php';
	// Create the Transport
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
	->setUsername($username)
	->setPassword($password);

		if(isset($_POST['submit'])){
		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$email =  $_POST["email"];
		$prayerRequest = $_POST["prayerRequest"];
	
		$mailer = Swift_Mailer::newInstance($transport);
	// Create a message
		$message = Swift_Message::newInstance('Prayer Request')
		->setFrom(array($email => $email))
		->setTo(array('shemmarr2092@gmail.com' => 'Shemmarrah John'))
		->setBody("Hello, my name is ".$firstName." ".$lastName." and I would like to ask you to keep me in your prayers:<br/>".$prayerRequest,'text/html')
		->addPart(strip_tags($prayerRequest),"text/plain");
			
			// Send the message
		$result = $mailer->send($message);
		$url	= bloginfo('template_url')."index.php";
		wp_redirect( $url );

	}
 ?>