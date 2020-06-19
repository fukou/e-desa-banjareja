<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
        if($this->session->userdata("loggedin") == 'true'){
			redirect("dashboard");
		}else{
			$this->load->view('app/login_v');
		}
    }
    
    
	public function jd19ja1Dasue92jdDsha10i41210310dja29ej($id)
	{
        $this->session->set_userdata('loggedin','true');
        $this->session->set_userdata('id_user',$id);
        redirect("dashboard");
    }
    
	public function logout()
	{
        $this->session->unset_userdata('loggedin');
        $this->session->unset_userdata('id_user');
        redirect("login");
	}
}
