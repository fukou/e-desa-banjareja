<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_permohonan_ktp extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata("loggedin") != 'true'){
            redirect('login');
        }
	}

	public function index()
	{
        $data['title'] = "Data Permohonan KTP";
		$data['content'] = "app/dpk_v";
		$this->load->view('layout', $data);
	}

	public function print()
	{
        $data['title'] = "Data Pindah WNI";
		$this->load->view('app/printdpk_v', $data);
	}
}
