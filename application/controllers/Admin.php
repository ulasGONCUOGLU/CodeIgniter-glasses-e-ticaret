<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('adminlogin')){
			if($this->uri->segment(2)){
				if($this->uri->segment(2)!='login'){
					redirect('admin');
				}
			}
		}else{
			if(!$this->uri->segment(2)){
				redirect('admin/panel');
			}
		}
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function satis()
	{
		$this->load->view('admin/satis');
	}
	public function urekle()
	{
		$this->load->view('admin/urekle');
	}

	public function server()
	{
		$this->load->view('admin/server');
	}

	public function dosya()
	{
		$this->load->view('admin/dosya');
	}

	public function login()
	{
		$exist=$this->db->from('admin')->where(['mail'=>$this->input->post('email'),'sifre'=>$this->input->post('sifre')])->get()->row();
		
		if($exist){
			$this->session->set_userdata('adminlogin',true);
			$this->session->set_userdata('admininfo',$exist);
			redirect('admin/panel');
		}
		else{
			$hata="Email adresi veya Şifre Hatalı";
			$this->session->set_flashdata('error',$hata);
			redirect('admin');
		}
	}

	public function panel(){
		$this->load->view('admin/panel');
	}

	public function cikis(){
		$this->session->sess_destroy();
		redirect('admin');
	}
}