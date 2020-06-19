<?php
defined('BASEPATH') or exit('No direct script access allowed');

Class Home_m extends CI_Model{
    public function getSlide(){
        return $query =  $this->db->get("slide")->result_array();
    }
}