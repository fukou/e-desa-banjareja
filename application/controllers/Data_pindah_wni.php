<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pindah_wni extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata("loggedin") != 'true'){
            redirect('login');
        }
	}

	public function index()
	{
        $data['title'] = "Data Pindah WNI";
		$data['content'] = "app/dpu_v";
		$this->load->view('layout', $data);
	}

	public function print()
	{
        $data['title'] = "Data Pindah WNI";
		$this->load->view('app/printdpu_v', $data);
	}
}
