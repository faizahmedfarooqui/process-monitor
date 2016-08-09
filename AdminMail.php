<?php
require __DIR__."/phpmailer/phpmailer/PHPMailerAutoload.php";

/*
*	
*	✓ Mail
*
*/
class AdminMail
{
	public function __construct()
	{
		//
	}
	
	public function index($bodyArray)
	{	
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
			$mail->Username = 'emailAddress@host.com';
			$mail->Password = 'password';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;

			$mail->setFrom('senderEmail@host.com', 'Project Name');
			$mail->addAddress('receiverEmail@host.com', 'Faiz Ahmed');
			$mail->addAddress('amdinEmail@host.com', 'Khalid Imam');

			$mail->addCC('webhooks@slack.com', 'Slack Notification');

			$mail->isHTML(true);

			$mail->Subject = 'Process Manager for Project Name';
			$mail->Body    = $body;
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
		}

		return true;
	}
}