<?php 

include "baglanti.php"; 

$sorguurun = $db->prepare("select * from urun"); 
$sorguurun->execute();

$sorguid = $db->prepare("select * from urun"); 
$sorguid->execute();

?>

<?php $this->load->view('admin/include/header'); ?>
<?php $this->load->view('admin/include/leftmenu'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Paneller</a></li>
              <li class="breadcrumb-item active">Ürün bilgisi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">






          
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ürün Ekle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?php echo base_url("fileupload/upload");?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Ürün ismi</label>
                    <input type="text" class="form-control" name="isim" placeholder="ismi">
                  </div>

                  <div class="form-group">
                    <label>Markası</label>
                    <input type="text" class="form-control" name="marka" placeholder="marka ismi">
                  </div>
                  
                  <div class="form-group">
                    <label>Tür</label>
                    <select class="custom-select form-control-border" name="tur" id="exampleSelectBorder">
                      <option>güneş</option>
                      <option>numara</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label>Fiyat</label>
                    <div class="input-group-prepend">
                      <input type="int" class="form-control" name="fiyat" placeholder="Fiyat bilgisi">
                      <span class="input-group-text">TL</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Miktar</label>
                    <div class="input-group-prepend">
                      <input type="int" class="form-control" name="adet" placeholder="adet sayısı">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">resim</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="dosya">
                        <label class="custom-file-label" for="exampleInputFile">Dosya</label>
                      </div> 
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="urunekle" type="submit" class="btn btn-primary">Ekle</button>
                </div>
              </form>
            </div>




















            

            <form method="POST" action="<?php echo base_url('fileupdate/degistir');?>" enctype="multipart/form-data"><?php echo"
            
              <div class='card card-info'>
                <div class='card-header'>
                  <h3 class='card-title'>Ürün güncelleme silme</h3>
                </div>

                <div class='card-body'>
                  <div class='form-group'>
                    <label for='exampleSelectBorder'>Ürün İD'si</label>
                    <div class='input-group-prepend'>
                      <span class='input-group-text'>@</span>
                      <input type='int' class='form-control' name='id' placeholder='ürün id'si'>
                    </div>
                  </div>
                </div>
                
                <div class='card-body'>
                  <h4>Değerleri</h4>

                  <div class='form-group'>
                    <label>Fiyat</label>
                    <div class='input-group-prepend'>
                      <input type='int' class='form-control' name='fiyat' placeholder='Fiyat bilgisi'>
                      <span class='input-group-text'>TL</span>
                    </div>
                  </div>

                  <div class='form-group'>
                    <label>Miktar</label>
                    <div class='input-group-prepend'>
                      <input type='int' class='form-control' name='adet' placeholder='adet sayısı'>
                    </div>
                  </div>
                    
                  <div class='card-footer'>
                    <button type='submit' class='btn btn-primary'>güncelle</button>
                  </div>
                </div>";
              ?>

            </form>
              

          <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>































          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Ürün Listesi</h3>
              </div>
              <div class="card-body">
              
              <table border='2' width='100%' style='text-align: center;'>
                <tr>
                    <th>Resim</th>
                    <th>Ürün ID</th>
                    <th>Ürün ismi</th>
                    <th>Markası</th>
                    <th>Türü</th>
                    <th>Fiyatı</th>
                    <th>Miktar</th>
                    <th>Sil</th>
                </tr>
                
                <?php 
                
                while($satir = $sorguurun->fetch(PDO::FETCH_ASSOC)) {
                  $uzanti = base_url('assets/upload/').$satir["tur"]."/".$satir["isim"]."_".$satir["marka"].".png";
                  echo "<tr>";
                  echo "<td><img src='$uzanti' width='100' height='100'<td>";
                  echo "<td>$satir[id]</td>";
                  echo "<td>$satir[isim]</td>";
                  echo "<td>$satir[marka]</td>";
                  echo "<td>$satir[tur]</td>";
                  echo "<td>$satir[fiyat]</td>";
                  echo "<td>$satir[adet]</td>";
                  echo "<td><a href='" . base_url('fileupdate/delete') . "?silid=$satir[id]'>Sil</a></td>";
                  echo "</tr>";
                }
                    
                ?>
                
                </table>





              </div>
              <!-- /.card-body -->
            </div>
          </div>
            <!-- /.card -->

            <style>
  .gizli {
    display: none;
  }
</style>




<?php $this->load->view('admin/include/footer'); ?>


