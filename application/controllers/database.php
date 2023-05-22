<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class database extends CI_Controller {
	public function index(){
	$satirlar=array();
        $satirlar["urun"]=$this->db->get("urun")->result();
		$this->load->view('urun',$satirlar);
	}
}?>