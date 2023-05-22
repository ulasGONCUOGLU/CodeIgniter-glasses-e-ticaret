<?php 

class Fileupload extends CI_Controller {

    //Admin ürün ekleme

    public function index(){
        $this->load->view("upload_form");
    }

    public function upload(){
        try{
            $db = new PDO("mysql:host=localhost;dbname=webpro;charset=utf8","root","");
            
          } catch (PDOException $e){
            echo $e->getMessage();
            
          }
  
        $config['upload_path']          = 'assets/upload/'.$_POST["tur"]."/";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $_POST["isim"]." ".$_POST["marka"];
        $config['overwrite']            = TRUE;

        $this->load->library("upload", $config);

        if ( ! $this->upload->do_upload('dosya')){
            $msg=$this->upload->display_errors();
            echo "<script type='text/javascript'>alert('$msg');</script>";
            $this->load->view('admin/urekle');
        }
        else{
            
            $ekle = $db->prepare("insert into urun set
            isim=:isim,
            marka=:marka,
            tur=:tur,
            fiyat=:fiyat,
            adet=:adet,
            resim=:resim
            ");

            $kontrol = $ekle->execute(array(
            "isim"=>$_POST["isim"],
            "marka"=>$_POST["marka"],
            "tur"=>$_POST["tur"],
            "fiyat"=>$_POST["fiyat"],
            "adet"=>$_POST["adet"],
            "resim"=>$_POST["isim"]." ".$_POST["marka"]
            ));
            if($kontrol){
                $msg="başarı ile eklendi";
                echo "<script type='text/javascript'>alert('$msg');</script>";
                redirect('admin/urekle');
                //$this->load->view('admin/urekle');
            }
        }
    }



}
?>