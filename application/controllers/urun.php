<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class urun extends CI_Controller {
    
    public function index(){
        $this->load->view("upload_form");
    }

    public function degistir() {
        $id = $this->input->post('id');
        $adet = $this->input->post('adet');

        $adet=$adet-1;
      
        $this->db->set('adet', $adet);
        $this->db->where('id', $id);
        $this->db->update('urun');
      
        redirect('Home/market/');
        
        $msg="satın alma işlemi başarılı";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }


} ?>