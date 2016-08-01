<?php
require __DIR__."/phpmailer/phpmailer/PHPMailerAutoload.php";
require __DIR__."/ProcessMonitor.php";

$body = '';
$classObject = new ProcessMonitor();

$bodyArray = $classObject->index();

if ( !empty($bodyArray) ) {

	$body = "<h3> List of Process(es) :</h3>";
	$body .= "<ul>";

	foreach ($bodyArray as $bodyString) {
		
		$body .= "<li>$bodyString</li>";
	}

	$body .= "</ul>";

	$mail = new PHPMailer;

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'sanket10@sahusoft.com';
	$mail->Password = 'goldtree9';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->setFrom('sanket10@sahusoft.com', 'CloudRank.me');
	$mail->addAddress('faiz@sahusoft.com', 'Faiz Ahmed');
	$mail->addAddress('khalid@sahusoft.com', 'Khalid Imam');
	$mail->addAddress('pratik@sahusoft.com', 'Kumar Pratik');

	$mail->isHTML(true);

	$mail->Subject = 'Process Manager for CloudRank.me';
	$mail->Body    = $body;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	$mail->send();
}