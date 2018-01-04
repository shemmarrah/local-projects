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
		$subject = $_POST["subject"];
		$email =  $_POST["email"];
		$inquiry = $_POST["inquiry"];
	
		$mailer = Swift_Mailer::newInstance($transport);
	// Create a message
		$message = Swift_Message::newInstance($subject)
		->setFrom(array($email => $email))
		->setTo(array('shemmarr2092@gmail.com' => 'Shemmarrah John'))
		->setBody("Hello, my name is ".$firstName." ".$lastName.":<br/>".$inquiry,'text/html')
		->addPart(strip_tags($inquiry),"text/plain");
			
			// Send the message
		$result = $mailer->send($message);

		header("Refresh:0; url=index.php");
	}
 ?>