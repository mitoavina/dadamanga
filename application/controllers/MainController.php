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
        $data['footerImg'] = "cacao.jpg";

        $this->load->view('pages/luxury', $data);
    }
    public function contact()
    {
        $this->load->helper('url');
        $data['footerImg'] = "omby.jpg";
        $this->load->view('pages/contact', $data);
    }

    public function article($id)
    {
        $this->load->helper('url');
        $this->load->helper('assets');
        $data['footerImg'] = "omby.jpg";

        $this->load->model('ArticleModel', 'ArticleModel');
        $articleModel = new ArticleModel();
        $article = $articleModel->selectWhere($id);

        $data['article'] = $article;
        $this->load->view('pages/article', $data);
    }

    public function covid()
    {
        $this->load->helper('url');
        $this->load->helper('assets');
        $this->load->helper('time');
        $data['footerImg'] = "omby.jpg";
        $this->load->model('ArticleModel', 'ArticleModel');
        $articleModel = new ArticleModel();
        $page = 1;
        if (isset($_GET['page'])) {
            try {
                $page = intval($_GET['page']);
                if ($page <= 0) {
                    $page = 1;
                }
            } catch (Exception $e) {
                $page = 1;
            }
        }
        $articles = $articleModel->getAllArticle($page);
        $data['page'] = $page;
        $data['articles'] = $articles;
        $data['faqList'] = [
            1 => (object)[
                'titre' => 'Where can I find the latest news related to travel and COVID-19 in Madagascar?',
                'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ],
            2 => (object)[
                'titre' => 'My tour has been cancelled- what happens?',
                'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ],
            3 => (object)[
                'titre' => 'Will I get a refund for any tour that I booked?',
                'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ],
            4 => (object)[
                'titre' => 'What can Dadamanga  do to ensure I get a refund for my package holiday?',
                'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ],
            5 => (object)[
                'titre' => 'I want to ask for a refund with my travel insurance - can you help?',
                'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ],
            6 => (object)[
                'titre' => 'How can I amend or cancel a booking?',
                'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ],
            7 => (object)[
                'titre' => 'Do I need to pay the remaining balance for my upcoming holiday?',
                'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ],
            8 => (object)[
                'titre' => 'How is my money protected and why is it important?',
                'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ],
            8 => (object)[
                'titre' => 'How can I contact Dadamanga if I have any questions - or want to book or rebook a trip?',
                'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            ],
        ];
        $this->load->view('pages/covid-updates', $data);
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
        $this->load->model('TripModel', 'TripModel');
        $data['footerImg'] = "cacao.jpg";

        $this->db->from('dm_travefy_trip');
        $travefyTrips = $this->db->get()->result();
        $trips = array();
        foreach ($travefyTrips as $travefyTrip) {
            $url = 'https://trips.dadamanga.mg/itinerary-rest-api/itineraryPages/' . $travefyTrip->travefy_trip_id;
            try {
                $json = file_get_contents($url);
                $json = json_decode($json);

                preg_match_all("#(([0-9]{1,3},?)+) (MGA|USD|EUR)#U", $json->itineraryPage->trip->estimatedCost, $match, PREG_PATTERN_ORDER);

                $trip = new TripModel();
                $trip->setId($travefyTrip->travefy_trip_id);
                $trip->setName($json->itineraryPage->trip->name);
                if ($travefyTrip->dm_trip_price != null) {
                    $trip->setPrice(number_format($travefyTrip->dm_trip_price, 0, null, ","));
                } else {
                    $trip->setPrice($match[1][0]);
                }
                $trip->setLanguage($travefyTrip->dm_language);
                $trip->setCurrency($match[3][0]);
                $trip->setImg($json->itineraryPage->trip->mediaImages[0]->url);
                $trip->setDays(count($json->itineraryPage->trip->tripDayIds));
                array_push($trips, $trip);
            } catch (Exception $e) {
            }
        }
        $data['trips'] = $trips;
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

    public function dash_travefy()
    {
        $this->load->helper('url');
        session_start();
        if (!isset($_SESSION['authentication'])) {
            redirect('/login', 'refresh');
        }
        $data['active'] = 'travefy';
        $this->load->view('dashboard/dash_travefy', $data);
    }

    public function dash_blog()
    {
        $this->load->helper('url');
        session_start();
        if (!isset($_SESSION['authentication'])) {
            redirect('/login', 'refresh');
        }
        $data['active'] = 'blog';
        $this->load->view('dashboard/dash_blog', $data);
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
        $data['active'] = 'park';
        $this->load->view('dashboard/dash_park', $data);
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
        $data['active'] = 'experience';
        $this->load->view('dashboard/dash_experience', $data);
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
        $data['active'] = 'wildlife';
        $this->load->view('dashboard/dash_wildlife', $data);
    }

    public function login()
    {
        $this->load->helper('url');
        $this->load->view('dashboard/login');
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
            redirect('/dash_park', 'refresh');
        } catch (Exception $e) {
            $data['error'] = $e->getMessage();
            $this->load->view('login', $data);
        }
    }
}
