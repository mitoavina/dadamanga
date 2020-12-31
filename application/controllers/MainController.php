<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('PageModel', 'PageModel');
		$pageModel = new PageModel();
		$data['image'] = $pageModel->addInformation(1)->image;
		$data['text'] = $pageModel->addInformation(1)->text;
		$data['footerImg'] = "omby.jpg";

		$this->load->model('DestinationModel', 'DestinationModel');
		$destinationModel = new DestinationModel();
		$data['destinations'] = $destinationModel->select();
		
		$this->load->helper('url');
		$this->load->helper('assets');
		$this->load->view('pages/home', $data);
	}

	public function destinations()
	{
		$this->load->model('DestinationModel', 'DestinationModel');
		$destinationModel = new DestinationModel();
		$data['destinations'] = $destinationModel->select();
		$data['footerImg'] = "omby.jpg";
		$this->load->helper('url');
		$this->load->helper('assets');
		$this->load->view('pages/destinations', $data);
	}
	public function about()
	{
		$this->load->model('PageModel', 'PageModel');
		$pageModel = new PageModel();
		$data['image'] = $pageModel->addInformation(2)->image;
		$data['text'] = $pageModel->addInformation(2)->text;
		$data['footerImg'] = "omby.jpg";
		$this->load->helper('url');
		$this->load->helper('assets');
		$this->load->view('pages/about', $data);
	}

	public function adventure()
	{
		$this->load->model('WildlifeModel', 'WildlifeModel');
		$wildlifeModel = new WildlifeModel();
		$wildlifes = $wildlifeModel->select();
		foreach ($wildlifes as $wildlife) {
			$wildlife->INFORMATION = "";
			$wildlife->DESCRIPTION = "";
		}
		$data['wildlifeModel'] = $wildlifes;
		$data['footerImg'] = "omby.jpg";


		$this->load->model('ParkModel', 'ParkModel');
		$parkModel = new ParkModel();
		$parks = $parkModel->select();
		foreach ($parks as $park) {
			$park->INFORMATION = "";
			$park->DESCRIPTION = "";
		}
		$data['parkModel'] = $parks;


		$this->load->model('ExperienceModel', 'ExperienceModel');
		$experienceModel = new ExperienceModel();
		$experiences = $experienceModel->select();
		foreach ($experiences as $experience) {
			$experience->INFORMATION = "";
			$experience->DESCRIPTION = "";
		}
		$data['experienceModel'] = $experiences;

		$this->load->model('DestinationModel', 'DestinationModel');
		$destinationModel = new DestinationModel();
		$destinations = $destinationModel->select();
		foreach ($destinations as $destination) {
			$destination->INFORMATION = "";
			$destination->DESCRIPTION = "";
		}
		$data['destinationModel'] = $destinations;

		$this->load->helper('url');
		$this->load->helper('assets');
		$this->load->view('pages/adventure', $data);
	}

	public function luxury()
	{
		$this->load->helper('url');
		$this->load->helper('assets');
		$data['footerImg'] = "cacao.jpg";

		$this->load->view('pages/luxury', $data);
	}
	public function contact()
	{
		$this->load->helper('url');
		$this->load->helper('assets');
		$data['footerImg'] = "omby.jpg";

		$this->load->view('pages/contact', $data);
	}

	public function cart()
	{
		$this->load->helper('url');
		$this->load->helper('assets');
		$data['footerImg'] = "omby.jpg";

		$this->load->view('pages/cart', $data);
	}

	public function destination($destinationName)
	{
		$this->load->helper('url');
		$this->load->helper('assets');
		$this->load->model('DestinationModel', 'DestinationModel');
		$destinationModel = new DestinationModel();
		$destination = $destinationModel->selectWhere($destinationName);
		$data['destination'] = $destination[0];
		$information = json_decode($destination[0]->INFORMATION);
		$data['information'] = $information;
		$this->load->model('RegionModel', 'RegionModel');
		$regionModel = new RegionModel();
		$data['regions'] = $regionModel->selectWhere($destination[0]->IDDESTINATION);
		$data['destinationName'] = $destinationName;
		$data['others'] = $destinationModel->selectOther($destinationName);
		$data['footerImg'] = "omby.jpg";

		$this->load->view('pages/destination', $data);
	}
	public function knowledges()
	{
		$this->load->model('DestinationModel', 'DestinationModel');
		$destinationModel = new DestinationModel();
		$destinations = $destinationModel->select();
		$data['destinationModel'] = $destinations;
		$this->load->helper('url');
		$this->load->helper('assets');
		$this->load->view('pages/knowledges', $data);
	}
	public function knowledge($knwldge)
	{
		$this->load->model('DestinationModel', 'DestinationModel');
		$destinationModel = new DestinationModel();
		$destinations = $destinationModel->select();
		$data['destinationModel'] = $destinations;

		$this->load->helper('url');
		$this->load->helper('assets');
		$data['knowledge'] = $knwldge;
		$this->load->view('pages/knowledge', $data);
	}
	public function shelf()
	{
		$this->load->helper('url');
		$this->load->helper('assets');
		$data['footerImg'] = "cacao.jpg";

		$this->load->view('pages/off-the-shelf', $data);
	}
	// public function mailing()
	// {
	// 	$this->load->library('email');
	// 	$from_email = $this->config->item('smtp_user');
	// 	echo 'from: ' . $from_email;
	// 	//Load email library
	// 	$this->email->from('test1', 'test2');
	// 	$to_address = 'larvepeche@gmail.com';
	// 	$this->email->to($to_address);
	// 	$this->email->subject('Essai mail');
	// 	$this->email->message('Contenu du mail envoyé par libraiirie mail CodeIgniter');
	// 	//Send mail
	// 	if ($this->email->send(FALSE)) {
	// 		//$this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
	// 		echo $this->email->print_debugger();
	// 	} else {
	// 		//$this->session->set_flashdata("email_sent","You have encountered an error");
	// 		show_error($this->email->print_debugger());
	// 	}
	// }


	public function dashboard()
	{
		$this->load->helper('url');
		session_start();
		if (!isset($_SESSION['authentication'])) {
			redirect('/login', 'refresh');
		}
		$this->load->model('PageModel', 'PageModel');
		$pageModel = new PageModel();
		$data['image'] = $pageModel->addInformation(1)->image;
		$data['text'] = $pageModel->addInformation(1)->text;

		$this->load->view('dashboard', $data);
	}

	public function dash_about()
	{
		$this->load->helper('url');
		session_start();
		if (!isset($_SESSION['authentication'])) {
			redirect('/login', 'refresh');
		}
		$this->load->model('PageModel', 'PageModel');
		$pageModel = new PageModel();
		$data['image'] = $pageModel->addInformation(2)->image;
		$data['text'] = $pageModel->addInformation(2)->text;
		$this->load->view('dash_about', $data);
	}

	public function dash_destination()
	{
		$this->load->helper('url');
		session_start();
		if (!isset($_SESSION['authentication'])) {
			redirect('/login', 'refresh');
		}
		$this->load->view('dash_destination');
	}
	public function dash_park()
	{
		$this->load->helper('url');
		session_start();
		if (!isset($_SESSION['authentication'])) {
			redirect('/login', 'refresh');
		}
		$this->load->model('ParkModel', 'ParkModel');
		$parkModel = new ParkModel();
		if (isset($_GET['delete'])) {
			$parkModel->delete($_GET['delete']);
			redirect('/dash_park', 'refresh');
		}
		if (isset($_GET['insert'])) {
			$this->load->model('UtilsModel', 'UtilsModel');
			$utilsModel = new UtilsModel();
			$path = $utilsModel->upload('adventure/park');
			$parkModel->insert($path, $_POST['text']);
			redirect('/dash_park', 'refresh');
		}
		$data['data'] = $parkModel->select();
		$this->load->view('dash_park', $data);
	}
	public function dash_experience()
	{
		$this->load->helper('url');
		session_start();
		if (!isset($_SESSION['authentication'])) {
			redirect('/login', 'refresh');
		}
		$this->load->model('ExperienceModel', 'ExperienceModel');
		$experienceModel = new ExperienceModel();
		if (isset($_GET['delete'])) {
			$experienceModel->delete($_GET['delete']);
			redirect('/dash_experience', 'refresh');
		}
		if (isset($_GET['insert'])) {
			$this->load->model('UtilsModel', 'UtilsModel');
			$utilsModel = new UtilsModel();
			$path = $utilsModel->upload('adventure/experiences');
			$experienceModel->insert($path, $_POST['text']);
			redirect('/dash_experience', 'refresh');
		}
		$data['data'] = $experienceModel->select();
		$this->load->view('dash_experience', $data);
	}
	public function dash_wildlife()
	{
		$this->load->helper('url');
		session_start();
		if (!isset($_SESSION['authentication'])) {
			redirect('/login', 'refresh');
		}
		$this->load->model('WildlifeModel', 'WildlifeModel');
		$wildlifeModel = new WildlifeModel();
		if (isset($_GET['delete'])) {
			$wildlifeModel->delete($_GET['delete']);
			redirect('/dash_wildlife', 'refresh');
		}
		if (isset($_GET['insert'])) {
			$this->load->model('UtilsModel', 'UtilsModel');
			$utilsModel = new UtilsModel();
			$path = $utilsModel->upload('adventure/wildlife');
			$wildlifeModel->insert($path, $_POST['text']);
			redirect('/dash_wildlife', 'refresh');
		}
		$data['data'] = $wildlifeModel->select();
		$this->load->view('dash_wildlife', $data);
	}
	public function login()
	{
		$this->load->helper('url');
		$this->load->view('login');
	}
	public function homeUpdate()
	{
		$this->load->helper('url');
		$this->load->helper('assets');

		$this->load->model('UtilsModel', 'UtilsModel');
		$utilsModel = new UtilsModel();
		$this->load->model('PageModel', 'PageModel');
		$pageModel = new PageModel();
		$data['image'] = $pageModel->addInformation(1)->image;
		$data['text'] = $pageModel->addInformation(1)->text;
		try {
			$path = $utilsModel->upload('home');
			$data['image'][0]->path = $path;
		} catch (Exception $e) {
		}
		$data['text'][0] = array("value" => $_POST['text'], "type" => "title");
		$info = json_encode($data);
		$pageModel->update(1, 'home', $info);

		redirect('/dashboard', 'refresh');
	}
	public function dash_aboutUpdate()
	{
		$this->load->helper('url');
		$this->load->helper('assets');

		$this->load->model('UtilsModel', 'UtilsModel');
		$utilsModel = new UtilsModel();
		$this->load->model('PageModel', 'PageModel');
		$pageModel = new PageModel();
		$data['image'] = $pageModel->addInformation(2)->image;
		$data['text'] = $pageModel->addInformation(2)->text;
		try {

			$path = $utilsModel->upload('about');
			$data['image'][0]->path = $path;
		} catch (Exception $e) {
		}
		$data['text'][0] = array("value" => $_POST['text'], "type" => "title");

		$info = json_encode($data);
		$pageModel->update(2, 'about', $info);

		redirect('/dash_about', 'refresh');
	}
	public function authentication()
	{
		$this->load->helper('url');
		$this->load->model('UserModel', 'UserModel');
		$userModel = new UserModel();
		try {
			$userModel->select($_POST['login'], $_POST['pass']);
			session_start();
			$_SESSION['authentication'] = true;
			redirect('/dashboard', 'refresh');
		} catch (Exception $e) {
			$data['error'] = $e->getMessage();
			$this->load->view('login', $data);
		}
	}
}
