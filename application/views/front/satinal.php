<?php 

include "baglanti.php"; 

$sorguurun = $db->prepare("select * from urun"); 
$sorguurun->execute();
$sorguurun2 = $db->prepare("select * from urun"); 
$sorguurun2->execute();
?>

<?php $this->load->view('front/include/header');

$urun_id = $_POST["idsi"];

?>

<style>
  .gizli {
    display: none;
  }
</style>

<?php 
while($satir = $sorguurun->fetch(PDO::FETCH_ASSOC)) {
    $uzanti = base_url('assets/upload/').$satir["tur"]."/".$satir["isim"]."_".$satir["marka"].".png";
    $urun_adet = $satir["adet"];
    if($satir["id"] == $urun_id){ echo"
        
    <!-- about section -->
    <div class='about'>
        <div class='container'>
            <div class='row d_flex'>
                <div class='col-md-5'>
                    <div class='about_img'>
                        <figure><img src='$uzanti' alt='#'/></figure>
                    </div>
                </div>
                <div class='col-md-7'>
                    <div class='titlepage'>"?>
                        <form method="POST" action="<?php echo base_url('urun/degistir');?>" enctype="multipart/form-data"><?php echo"
                            <table width='95%' style='width:95%' class='eoDetailPropertyListTable'>

                                    <input name='id' value='$urun_id' class='gizli'>
                                    <input name='adet' value='$urun_adet' class='gizli'>
                                <tr class='eoDetailItem eoFontSizeS'><td class='eoDetailFeatureName'>ismi:</td><td class='eoDetailFeature'>$satir[isim]</td></tr>
                                <tr class='eoDetailItem eoFontSizeS'><td class='eoDetailFeatureName'>marka:</td><td class='eoDetailFeature'>$satir[marka]</td></tr>
                                <tr class='eoDetailItem eoFontSizeS'><td class='eoDetailFeatureName'>tür:</td><td class='eoDetailFeature'>$satir[tur] gözlüğü</td></tr>
                                <tr class='eoDetailItem eoFontSizeS'><td class='eoDetailFeatureName'>stokta kalan:</td><td class='eoDetailFeature'>$satir[adet]</td></tr>
                                <tr class='eoDetailItem eoFontSizeS'><td class='eoDetailFeatureName'>ücreti:</td><td class='eoDetailFeature'>$satir[fiyat]</td></tr>
                                <tr class='eoDetailItem eoFontSizeS'><td class='eoDetailFeatureName'>Ebatlar ve Ayrıntılar:</td><td class='eoDetailFeature'>M</td></tr>
                                <tr class='eoDetailItem eoFontSizeS'><td class='eoDetailFeatureName'>Cinsiyet:</td><td class='eoDetailFeature'>Bay</td></tr>
                                <tr class='eoDetailItem eoFontSizeS'><td class='eoDetailFeatureName'>çerçeve tipi:</td><td class='eoDetailFeature'>	Tam çerçeve</td></tr>
                            </table>
                            <button type='submit' class='btn btn-primary'> Satın al</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    ";}
}

$this->load->view('front/include/footer');?>