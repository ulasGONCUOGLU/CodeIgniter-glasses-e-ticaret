<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fileupdate extends CI_Controller {
    
    public function index(){
        $this->load->view("update_form");
    }
    
    public function degistir() {

        $id = $this->input->post('id');
        $adet = $this->input->post('adet');
        $fiyat = $this->input->post('fiyat');

        if($adet != null){
            $this->db->set('adet', $adet);
        }
        if($fiyat != null){
            $this->db->set('fiyat', $fiyat);
        }
        
        
        
        $this->db->where('id', $id);
        $this->db->update('urun');
      
        $msg="satın alma işlemi başarılı";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        redirect('admin/urekle');
        
    }


    public function delete() {
        
        try{
            $db = new PDO("mysql:host=localhost;dbname=webpro;charset=utf8","root","");
            
          } catch (PDOException $e){
            echo $e->getMessage();
            
          }
          $id = isset($_GET['silid']) ? intval($_GET['silid']) : 0;

        $sil = $db->prepare("delete from urun where id=:id");
        $kontrol = $sil->execute(array(
            "id" => $id
        ));

        if($kontrol){
            
            redirect('admin/urekle');
        }
    }


} ?>