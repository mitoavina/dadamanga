<?php
defined('BASEPATH') or exit('No direct script access allowed');
define("RECAPTCHA_V3_SECRET_KEY", '6LcS0soUAAAAAPv-mQ4xdN4sBw9HT9n9lZnQ09pk');

use Mpdf\Mpdf;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail extends CI_Controller
{
	private $mailSender = "noreply@dadamanga.mg";
	private $adminMail = "contact@dadamanga.mg";

	public const SUBJECT_YOUR_ADVENTURE_RECAP = 'Your adventure recap';
	public const SUBJECT_YOUR_OFF_THE_SHELF_TRIP_RECAP = 'Your Off The Shelf trip recap';
	public const SUBJECT_YOUR_LUXURY_TRIP_RECAP = 'Your Luxury trip recap';

	public const MAILER = 'Dadamanga Travel Service';
	public const CONTACT_SUPPORT = 'Dadamanga Support';

	public const CUSTOMER_SHELF_TRIP = 'Customer Shelf Trip';
	public const CUSTOMER_ADVENTURE_TRIP = 'Customer Adventure Trip';
	public const CUSTOMER_LUXURY_TRIP = 'Customer Luxury Trip';
	public const CUSTOMER_SUPPORT_CONTACT = 'Support Contact';


	private function setMailConfig($mail)
	{
		// SMTP configuration
		// $mail->SMTPDebug = SMTP::DEBUG_LOWLEVEL; // USE THIS VALUE WHEN DEBUGGING
		$mail->SMTPDebug = SMTP::DEBUG_OFF;
		$mail->isSMTP();
		$mail->Host = 'mail.dadamanga.mg';
		$mail->SMTPAuth = true;
		$mail->Username = $this->mailSender;
		$mail->Password = 'Coworking@99';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);
		$mail->Port = 465;
	}

	function getShelfAdminMail($data)
	{
		$this->load->helper('url');
		$this->load->library('phpmailer_lib');
		//must get infos
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('pdf/shelfPdf', $data, TRUE);
		// $mpdf->Output(); // opens in browser
		$mpdf->WriteHTML($html);

		//must write infos on the pdf
		$pdf = $mpdf->Output($data['email'] . '.pdf', 'S');
		// $pdf = $mpdf->Output();

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		// SMTP configuration
		$this->setMailConfig($mail);

		$mail->setFrom($this->mailSender, Mail::MAILER);
		$mail->addReplyTo($data['email'], $data['email']);

		// Add a recipient
		//a changer
		$mail->addAddress($this->adminMail);
		$mail->addStringAttachment($pdf, $data['email'] . '.pdf');


		// Email subject
		$mail->Subject = Mail::CUSTOMER_SHELF_TRIP . " - " . $data['email'];

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = $this->getMailShelfClientView($data);
		$mail->Body = $mailContent;
		return $mail;
	}

	function getShelfClientMail($data)
	{
		$this->load->helper('url');
		$this->load->library('phpmailer_lib');
		//must get infos
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('pdf/shelfPdf', $data, TRUE);
		// $mpdf->Output(); // opens in browser
		$mpdf->WriteHTML($html);

		//must write infos on the pdf
		$pdf = $mpdf->Output($data['email'] . '.pdf', 'S');
		// $pdf = $mpdf->Output();

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		// SMTP configuration
		$this->setMailConfig($mail);

		$mail->setFrom($this->mailSender, Mail::MAILER);
		$mail->addReplyTo($this->adminMail, Mail::CONTACT_SUPPORT);

		// Add a recipient
		//a changer
		$mail->addAddress($data['email']);
		$mail->addStringAttachment($pdf, $data['email'] . '.pdf');


		// Email subject
		$mail->Subject = Mail::SUBJECT_YOUR_OFF_THE_SHELF_TRIP_RECAP;

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = $this->getMailShelfClientView($data);
		$mail->Body = $mailContent;
		return $mail;
	}

	function shelfServiceMail()
	{
		header('Content-Type: application/json');
		$this->load->model('TravelerModel', 'TravelerModel');

		$data = array(); //izay anaovan'la anaran'ty variable ty
		$data['current'] = date("Y/m/d");
		foreach ($_POST as $key => $value) {
			$data[$key] = $this->input->post($key);
		}

		$travelers = array_fill(0, $data['nbTraveler'], NULL);
		$nbAdults = 0;
		$nbChildren = 0;
		for ($i = 0; $i < $data['nbTraveler']; $i++) {
			$traveler = new TravelerModel();
			$traveler->setFirstName($data['firstNames'][$i]);
			$traveler->setLastName($data['lastNames'][$i]);
			$traveler->setType($data['age' . $i]);
			if ($traveler->getType() == "adult") {
				$nbAdults++;
			} else if ($traveler->getType() == "child") {
				$nbChildren++;
			}
			$travelers[$i] = $traveler;
		}

		$data['nbAdults'] = $nbAdults;
		$data['nbChildren'] = $nbChildren;
		$data['travelers'] = $travelers;

		$admin_mail = $this->getShelfAdminMail($data);
		$client_mail = $this->getShelfClientMail($data);

		$admin = null;
		$client = null;

		try {
			$admin = $admin_mail->send();
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$admin->ErrorInfo}";
			die;
		}

		try {
			$client = $client_mail->send();
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$client->ErrorInfo}";
			die;
		}

		if ($client && $admin) {
			echo json_encode(array('success' => true));
		} else {
			if (!$client) {
				echo "client lele";
				die;
			} else {
				echo "admin";
				die;
			}
			echo json_encode(
				array(
					'error' => 'Message could not be sent.',
					'success' => false
				)
			);
		}
	}

	function contactServiceMail()
	{
		$this->load->helper('url');
		$name = $_POST['name'];
		$phone = $_POST['number'];
		$email = $_POST['email'];
		$message = $_POST['message'];
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

		$mail->setFrom($this->mailSender, Mail::MAILER);
		$mail->addReplyTo($email, $name);

		// Add a recipient
		//a changer
		$mail->addAddress($this->adminMail);

		// Email subject
		$mail->Subject = Mail::CUSTOMER_SUPPORT_CONTACT . " - " . $name;

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<h3>hello Admin, " . $name . " has sent a comment for you from the dadamanga.mg website</h3>
            <p>" . $message . ".</p>";
		$mail->Body = $mailContent;

		// Send email
		if (!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {

			redirect(base_url('contact'));
		}
	}

	function adventureServiceMail()
	{
		header('Content-Type: application/json');
		// if (!$this->checkCaptcha($_POST['action'])) {
		// 	echo json_encode(
		// 		array(
		// 			'error' => 'Sorry spamming is not allowed.',
		// 			'success' => false
		// 		)
		// 	);
		// 	exit;
		// }

		$data = array(); //izay anaovan'la anaran'ty variable ty
		$data['current'] = date("Y/m/d");
		foreach ($_POST as $key => $value) {
			$data[$key] = $this->input->post($key);
		}
		$admin_mail = $this->getAdventureAdminMail($data);
		$client_mail = $this->getAdventureClientMail($data);

		$admin = null;
		$client = null;

		try {
			$admin = $admin_mail->send();
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$admin->ErrorInfo}";
			die;
		}
		try {
			$client = $client_mail->send();
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$client->ErrorInfo}";
			die;
		}
		if ($client && $admin) {
			echo json_encode(array('success' => true));
		} else {
			if (!$client) {
				echo "client lele";
				die;
			} else {
				echo "admin";
				die;
			}
			echo json_encode(
				array(
					'error' => 'Message could not be sent.',
					'success' => false
				)
			);
		}
	}

	public function luxuryServiceMail()
	{
		header('Content-Type: application/json');

		if (!$this->checkCaptcha($_POST['action'])) {
			echo json_encode(
				array(
					'error' => 'Sorry spamming is not allowed.',
					'success' => false
				)
			);
			exit;
		}

		$mail_admin = $this->getLuxuryAdminMail();
		$mail_client = $this->getLuxuryClientMail();
		$admin = $mail_admin->send();
		$client = $mail_client->send();
		if ($client && $admin) {
			echo json_encode(array('success' => true));
		} else {
			echo json_encode(
				array(
					'error' => 'Message could not be sent.',
					'success' => false
				)
			);
		}
	}

	private function getLuxuryAdminMail()
	{
		// DATAS
		$this->load->helper('url');
		$nationality = $_POST['nationality'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$begin  = $_POST['begin'];
		$end  = $_POST['end'];
		$type  = $_POST['type'];
		$disability = "none";
		$food = "none";
		$else = "none";
		if (strcmp($_POST['disability'], "") != 0) {
			$disability = $_POST['disability'];
		}
		if (strcmp($_POST['food'], "") != 0) {
			$food = $_POST['food'];
		}
		if (strcmp($_POST['else'], "") != 0) {
			$else = $_POST['else'];
		}

		// PDF
		$data['nationality'] = $nationality;
		$data['name'] = $name;
		$data['phone'] = $phone;
		$data['email'] = $email;
		$data['begin']  = $begin;;
		$data['end']  = $end;
		$data['disability'] = $disability;
		$data['food'] = $food;
		$data['else'] = $else;
		$data['type'] = $type;
		$data['current'] = date("Y/m/d");
		$mpdf = new Mpdf();
		$html = $this->load->view('pdf/luxuryPdf', $data, TRUE);
		$mpdf->WriteHTML($html);
		$pdf = $mpdf->Output($data['email'] . '.pdf', 'S'); // it downloads the file into the user system.


		// /mail
		$this->load->helper('url');
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

		$mail->setFrom($this->mailSender, Mail::MAILER);
		$mail->addReplyTo($email, $name);

		// Add a recipient
		//a changer
		$mail->addAddress($this->adminMail);
		$mail->addStringAttachment($pdf, $data['email'] . '.pdf');

		// Email subject
		$mail->Subject = Mail::CUSTOMER_LUXURY_TRIP . " - " . $name;

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<h3> new booking of luxury from " . $name . "</h3>
		<p>" . "place: " . $type . "</p>
		<p>" . "name: " . $name . "</p>
		<p> phone:" . $phone . "</p>
		<p> nationality : " . $nationality . "</p>
		<p> arrive : " . $begin . " </p>
		<p> depart : " . $end . "</p>
		";
		$mail->Body = $mailContent;
		return $mail;
	}

	private function getLuxuryClientMail()
	{
		$this->load->helper('url');
		$name = $_POST['name'];
		$type  = $_POST['type'];
		$email = $_POST['email'];
		$begin  = $_POST['begin'];
		$end  = $_POST['end'];
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

		$mail->setFrom($this->mailSender, Mail::MAILER);
		$mail->addReplyTo($this->adminMail, Mail::CONTACT_SUPPORT);

		// Add a recipient
		//a changer
		//CLIENT MAIL
		$mail->addAddress($email);

		// Email subject
		$mail->Subject = Mail::SUBJECT_YOUR_LUXURY_TRIP_RECAP;

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mail->Body = $this->getMailLuxuryClientView($name, $type, $begin, $end);
		return $mail;
	}

	public function getAdventureAdminMail($data)
	{
		$this->load->helper('url');
		$this->load->library('phpmailer_lib');
		//must get infos
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('pdf/adventurePdf', $data, TRUE);
		// $mpdf->Output(); // opens in browser
		$mpdf->WriteHTML($html);

		//must write infos on the pdf
		$pdf = $mpdf->Output($data['email'] . '.pdf', 'S');

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		// SMTP configuration
		$this->setMailConfig($mail);

		$mail->setFrom($this->mailSender, Mail::MAILER);
		$mail->addReplyTo($data['email'], $data['name']);

		// Add a recipient
		//a changer
		$mail->addAddress($this->adminMail);
		$mail->addStringAttachment($pdf, $data['email'] . '.pdf');


		// Email subject
		$mail->Subject = Mail::CUSTOMER_ADVENTURE_TRIP . " - " . $data['name'];

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = $this->getMailAdventureAdminView($data);
		$mail->Body = $mailContent;
		return $mail;
		// 	// echo 'Mailer Error: ' . $mail->ErrorInfo;		
	}

	public function getAdventureClientMail($data)
	{
		$this->load->helper('url');

		// Load PHPMailer library
		$this->load->library('phpmailer_lib');

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		// SMTP configuration
		$this->setMailConfig($mail);

		$mail->setFrom($this->mailSender, Mail::MAILER);
		$mail->addReplyTo($this->adminMail, Mail::CONTACT_SUPPORT);

		// Add a recipient
		//a changer
		//CLIENT MAIL
		$mail->addAddress($data['email']);

		// Add cc or bcc 
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		// Email subject
		$mail->Subject = Mail::SUBJECT_YOUR_ADVENTURE_RECAP;

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mail->Body = $this->getMailAdventureClientView($data);
		return $mail;
	}

	function getMailLuxuryClientView($name, $type, $begin, $end)
	{
		$data['name'] = $name;
		$data['type'] = $type;
		$data['begin'] = $begin;
		$data['end'] = $end;
		return $this->load->view('mails/mailLuxuryClient', $data, TRUE);
	}

	// TODO Adjust this function
	private function getMailShelfClientView($data)
	{
		return $this->load->view('mails/mailShelfClient', $data, TRUE);
	}


	private function getMailAdventureClientView($data)
	{
		return $this->load->view('mails/mailAdventureClient', $data, TRUE);
	}

	private function getMailAdventureAdminView($data)
	{
		return $this->load->view('mails/mailAdventureAdmin', $data, TRUE);
	}

	private function checkCaptcha($action)
	{
		$token = $_POST['token'];
		$action = $_POST['action'];

		$data = array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token);
		$url = "https://www.google.com/recaptcha/api/siteverify";

		// call curl to POST request
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		$arrResponse = json_decode($response, true);

		// verify the response
		if ($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
			return true;
		}
		return false;
	}
}
