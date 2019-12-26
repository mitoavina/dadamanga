<?php
class AdventureModel extends CI_Model
{

	public function addAdventure($title)
	{
		$data = array(
			'name' => $title
		);
		$this->cart->insert($data);
	}
	public function send($recipient)
	{
		$this->load->helper('url');

		// Load PHPMailer library
		$this->load->library('phpmailer_lib');

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'dadamanga.travel@gmail.com';
		$mail->Password = 'dadamanga123$';
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom('tsioryrams@gmail.com', 'Dadamanga');
		// $mail->addReplyTo('info@example.com', 'CodexWorld');

		// Add a recipient
		//a changer
		$mail->addAddress($recipient);

		// Add cc or bcc 
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		// Email subject
		$mail->Subject = 'Register of Adventuries';

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "";
		foreach ($this->cart->contents() as $adventure) {
			$email .= $adventure['name'] . '<br>';
		}
		$mail->Body = $mailContent;

		$error = "";
		// Send email
		if (!$mail->send()) {
			$error .= 'Message could not be sent. <br>';
			$error .= 'Mailer Error: ' . $mail->ErrorInfo;
			throw new Exception($error);
		} else {
			foreach ($this->cart->contents() as $adventure) {
				$this->cart->remove($adventure['rowid']);
			}
		}
	}
}
