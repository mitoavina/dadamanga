<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mail extends CI_Controller{
    function contact_mail(){
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

		$mail->setFrom($email, $name);
		$mail->addReplyTo($email, $name);
		// $mail->addReplyTo('info@example.com', 'CodexWorld');

		// Add a recipient
		//a changer
		$mail->addAddress('abrahamrobbi@gmail.com');

		// Add cc or bcc 
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		// Email subject
		$mail->Subject = 'commentaire';

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
	function adventure_service_mail(){
		$data = array();//izay anaovan'la anaran'ty variable ty
		foreach($_POST as $key => $value){
			$data[$key] = $this->input->post($key);
		}
		$admin_mail=$this->adventure_admin($data);
		$client_mail = $this->adventure_client($data);
		$admin = $admin_mail->send();
		$client = $client_mail->send();
		if($client && $admin){
			$message['success'] = 'sent!';
			echo json_encode($message);
		}else{
			$message['error'] = 'message could not be sent';
			echo json_encode($message);
		}
	}
	public function luxury_service_mail(){
		$mail_admin = $this->luxury_admin();
		$mail_client = $this->luxury_client();
		$admin = $mail_admin->send();
		$client = $mail_client->send();
		// $client = true;
		// $admin = true;
		if($client && $admin){
			$message['success'] = 'sent!';
			echo json_encode($message);
		}else{
			$message['error'] = 'message could not be sent';
			echo json_encode($message);
		}
	}
    private function luxury_admin(){
		// DATAS
		$this->load->helper('url');
        $nationality = $_POST['nationality'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
        $begin  = $_POST['begin'];
        $end  = $_POST['end'];
        $type  = $_POST['type'];
        $disability="none";
        $food="none";
        $else="none";
        if(strcmp($_POST['disability'],"") != 0){
			$disability = $_POST['disability'];
        }
        if(strcmp($_POST['food'],"") != 0){
			$food = $_POST['food'];
        }
        if(strcmp($_POST['else'],"") != 0){
			$else = $_POST['else'];
		}
		
		// PDF
        $data['nationality'] = $nationality;
		$data['name'] =$name ;
		$data['phone'] =$phone ;
		$data['email'] =$email ;
        $data['begin']  = $begin ;;
        $data['end']  = $end;
        $data['disability']=$disability;
        $data['food']=$food;
        $data['else']=$else;
        $data['type']=$type;
        $data['current'] = date("Y/m/d");
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('luxury_doc',$data,TRUE);
        $mpdf->WriteHTML($html);
        // $mpdf->Output(); // opens in browser
		$pdf = $mpdf->Output($data['email'].'.pdf','S'); // it downloads the file into the user system.
		
		
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
		
		$mail->setFrom($email, $name);
		$mail->addReplyTo($email, $name);
		
		// Add a recipient
		//a changer
		$mail->addAddress('abrahamrobbi@gmail.com');
        $mail->addStringAttachment($pdf, $data['email'].'.pdf');
		// Add cc or bcc 
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
		
		// Email subject
		$mail->Subject = 'reserve luxury';
		
		// Set email format to HTML
		$mail->isHTML(true);
		
		// Email body content
		$mailContent = "<h3> new booking of luxury from ".$name."</h3>
		<p>" . "place: ".$type."</p>
		<p>" . "name: ".$name."</p>
		<p> phone:". $phone ."</p>
		<p> nationality : ". $nationality ."</p>
		<p> arrive : ". $begin." </p>
		<p> depart : ". $end ."</p>
		";
		$mail->Body = $mailContent;
		return $mail;
		
	}
	private function luxury_client(){
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

		$mail->setFrom("dadamanga@me.com", "Dadamanga Travel Service");
		$mail->addReplyTo('abrahamrobbi@gmail.com', 'Dadamanga Travel Service');

		// Add a recipient
		//a changer
		//CLIENT MAIL
		$mail->addAddress($email);

		// Email subject
		$mail->Subject = 'Reserve Luxury';

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mail->Body = $this->Mail_luxury_client($name,$type,$begin,$end);
		return $mail;
		
	}
	public function adventure_admin($data){
		//must get infos
		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('adventure_doc',$data,TRUE);
        $mpdf->WriteHTML($html);
		// $mpdf->Output(); // opens in browser
		
		//must write infos on the pdf
		$pdf = $mpdf->Output($data['email'].'.pdf','S');
		// $pdf = $mpdf->Output();
		
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
		
		$mail->setFrom($data['email'], $data['name']);
		$mail->addReplyTo($data['email'], $data['name']);
		
		// Add a recipient
		//a changer
		$mail->addAddress('abrahamrobbi@gmail.com');
        $mail->addStringAttachment($pdf, $data['email'].'.pdf');
		
		
		// Email subject
		$mail->Subject = 'create an adventure';
		
		// Set email format to HTML
		$mail->isHTML(true);
		
		// Email body content
		$mailContent = $this->Mail_adventure_admin($data);
		$mail->Body = $mailContent;
		return $mail;
		// 	// echo 'Mailer Error: ' . $mail->ErrorInfo;		
	}
	public function adventure_client($data){
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

		$mail->setFrom("dadamanga@me.com", "Dadamanga Travel Service");
		$mail->addReplyTo('abrahamrobbi@gmail.com', 'Dadamanga Travel Service');

		// Add a recipient
		//a changer
		//CLIENT MAIL
		$mail->addAddress($data['email']);

		// Add cc or bcc 
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		// Email subject
		$mail->Subject = 'Create my adventure';

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mail->Body = $this->Mail_Adventure_client($data);
		return $mail;
	}
	//MAILS FORMS FOR CLIENTS
	function Mail_luxury_client($name,$type,$begin,$end){
		$data['name']= $name;
		$data['type']= $type;
		$data['begin']= $begin;
		$data['end']= $end;
        return $this->load->view('Mail_luxury_client',$data,TRUE);	
	}
	function Mail_adventure_client($data){
		return $this->load->view('Mail_adventure_client',$data,TRUE);
	}
	//MAILS FORMS FOR adv admin
	function Mail_adventure_admin($data){
        return $this->load->view('Mail_adventure_admin',$data,TRUE);
	}
	

	
}



