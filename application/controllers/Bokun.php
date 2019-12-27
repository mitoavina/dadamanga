<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bokun extends CI_Controller
{
    public function index()
    {
        $this->load->model('BokunAuth', 'BokunAuth');
        $bokun = new BokunAuth('GET', '/product-list.json/276996');

        $data['donnees'] = $bokun->get_bokun_data();
		$this->load->view('apiBokun', $data);
    }
}
