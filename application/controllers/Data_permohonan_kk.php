<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_permohonan_kk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata("loggedin") != 'true'){
            redirect('login');
        }
	}

	public function index()
	{
        $data['title'] = "Data Permohonan KK";
		$data['content'] = "app/dpkk_v";
		$this->load->view('layout', $data);
	}

	public function print()
	{
        $data['title'] = "Data Permohonan KK";
		$this->load->view('app/printdpkk_v', $data);
	}
}
