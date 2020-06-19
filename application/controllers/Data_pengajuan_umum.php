<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengajuan_umum extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata("loggedin") != 'true'){
            redirect('login');
        }
	}

	public function index()
	{
        $data['title'] = "Data Pengajuan Umum";
		$data['content'] = "app/dpuu_v";
		$this->load->view('layout', $data);
	}
	

	public function print()
	{
        $data['title'] = "Data Pengajuan Umum";
		$this->load->view('app/printdpuu_v', $data);
	}
}
