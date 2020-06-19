<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keterangan_lahiran extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata("loggedin") != 'true'){
            redirect('login');
        }
	}

	public function index()
	{
        $data['title'] = "Surat Keterangan Kelahiran";
		$data['content'] = "app/skl_v";
		$this->load->view('layout', $data);
	}

	public function print()
	{
        $data['title'] = "Surat Keterangan Kelahiran";
		$this->load->view('app/printskl_v', $data);
	}
}
