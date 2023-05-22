<?php 

include "baglanti.php"; 

$sorguurun1 = $db->prepare("select * from urun"); 
$sorguurun1->execute();
$sorguurun2 = $db->prepare("select * from urun"); 
$sorguurun2->execute();
?>

<?php $this->load->view('front/include/header'); ?>


<!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Güneş Gözlükleri</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid" style='width:80%'>
            <div class="row">
               <?php while($satir1 = $sorguurun1->fetch(PDO::FETCH_ASSOC)) {
               $uzanti1 = base_url('assets/upload/').$satir1["tur"]."/".$satir1["isim"]."_".$satir1["marka"].".png";
                  if($satir1["tur"]=="güneş"){
                     if($satir1["adet"] >= 1){
                        echo"
                        <div class='col-xl-3 col-lg-3 col-md-6 col-sm-6'>
                           <form method='POST' action='satinal'>
                              <input name='idsi' id='idsi' value='$satir1[id]' class='gizli' />
                              <figure><img src='$uzanti1' alt='#' width='350px' height='350px'/></figure>
                              <h3>$satir1[fiyat] <span class='blu'> TL</span></h3>
                              <p>$satir1[isim]</p>
                              <button type='submit' class='btn btn-primary'> Satın al</button>
                           </form>
                        </div>
                        ";
                     }
                  }
               }


               ?>
            </div>
         </div>
      </div>
      <!-- end Our  Glasses section -->
<style>
  .gizli {
    display: none;
  }
</style>
      
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Numaralı gözlüklerimiz</h2>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid" style='width:80%'>
            <div class="row">
               <?php 
               while($satir2 = $sorguurun2->fetch(PDO::FETCH_ASSOC)) {
                  $uzanti2 = base_url('assets/upload/').$satir2["tur"]."/".$satir2["isim"]."_".$satir2["marka"].".png";
                  if($satir2["tur"]=="numara"){
                     if($satir2["adet"] >= 1){
                        echo"
                        <div class='col-xl-3 col-lg-3 col-md-6 col-sm-6'>
                           <form method='POST' action='satinal'>
                              <input name='idsi' id='idsi' value='$satir2[id]' class='gizli' />
                              <figure><img src='$uzanti2' alt='#' width='300'/></figure>
                              <h3>$satir2[fiyat] <span class='blu'> TL</span></h3>
                              <p>$satir2[isim]</p>
                              <button type='submit' class='btn btn-primary'> Satın al</button>
                           </form>
                        </div>
                     
                        ";
                     }
                  }
               }


               ?>
            </div>
         </div>
      </div>
      

<?php $this->load->view('front/include/footer'); ?>