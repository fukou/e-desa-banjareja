<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_perubahan_penduduk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata("loggedin") != 'true'){
            redirect('login');
        }
	}

	public function index()
	{
        $data['title'] = "Data Perubahan Penduduk";
		$data['content'] = "app/dpp_v";
		$this->load->view('layout', $data);
	}

	public function print()
	{
        $data['title'] = "Data Perubahan Penduduk";
		$this->load->view('app/printdpp_v', $data);
	}
}
