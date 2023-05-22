<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller{
    

    public function index(){
        redirect('Home/Anasayfa');
    }
    public function AnaSayfa(){
        $this->load->view('front/home');
    }
    public function hakinda(){
        $this->load->view('front/hakinda');
    }
    public function market(){
        $this->load->view('front/market');
    }
    public function iletisim(){
        $this->load->view('front/iletisim');
    }
    public function satinal(){
        $this->load->view('front/satinal');
    }
    
}
?>