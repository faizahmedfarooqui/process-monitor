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
			$mail->Username = 'sanket10@sahusoft.com';
			$mail->Password = 'goldtree9';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;

			$mail->setFrom('sanket10@sahusoft.com', 'CloudRank.me');
			$mail->addAddress('faiz@sahusoft.com', 'Faiz Ahmed');
			$mail->addAddress('khalid@sahusoft.com', 'Khalid Imam');
			$mail->addAddress('pratik@sahusoft.com', 'Kumar Pratik');

			$mail->addCC('b9q4f6n6b3k3b2a2@geekyants-sahusoft.slack.com', 'Slack Notification');

			$mail->isHTML(true);

			$mail->Subject = 'Process Manager for CloudRank.me';
			$mail->Body    = $body;
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
		}

		return true;
	}
}