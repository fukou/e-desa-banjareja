<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata("loggedin") != 'true'){
            redirect('login');
        }
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['content'] = "app/dashboard_v";
		$this->load->view('layout', $data);
	}
}
