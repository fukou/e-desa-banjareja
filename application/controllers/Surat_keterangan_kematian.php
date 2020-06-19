<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keterangan_kematian extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata("loggedin") != 'true'){
            redirect('login');
        }
	}

	public function index()
	{
        $data['title'] = "Surat Keterangan Kematian";
		$data['content'] = "app/skk_v";
		$this->load->view('layout', $data);
	}

	public function print()
	{
        $data['title'] = "Surat Keterangan Kematian";
		$this->load->view('app/printskk_v', $data);
	}
}
