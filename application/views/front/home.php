<?php $this->load->view('front/include/header'); ?>

      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <figure><img src="<?php echo base_url('assets/upload/'); ?>resim1.png" alt="#" width="500"/></figure>
                           <a class="read_more" href="./satinal">satın al</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <figure><img src="<?php echo base_url('assets/upload/'); ?>resim2.png" alt="#" width="500"/></figure>
                           <a class="read_more" href="./satinal">satın al</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <figure><img src="<?php echo base_url('assets/upload/'); ?>resim3.png" alt="#" width="500"/></figure>
                           <a class="read_more" href="./satinal">satın al</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div> <!-- altaki href leri özel sayfayı bulup onuda ekliyeceğiz -->
            <a class="carousel-control-prev" href="<?php echo base_url('assets/front/'); ?>#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->




      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="<?php echo base_url('assets/upload/'); ?>resim2.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Vizyonumuz</h2>
                     <p>Piyasada bulunan gözlüklerler farklı tarz ve model arayanlar için özel tasarımları bulup sizlerle kavuşturmak için varız.</p>
                  </div>
                  <a class="read_more" href="./hakinda">daha fazla</a>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->





      <!-- Our shop section -->
      <div id="about" class="shop">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="<?php echo base_url('assets/upload/güneş/'); ?>murot_higo.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>En çok tercih edilen model</h2>
                        <p>Altın görünümü ile dikkat ve ilgi çekici tasarımı birleşimi ile en çok tercih edilen gözlüğümüzdür, gözlük camında ek özellikler ile güneş ışığını mavi ışığı "bilgisayar ekranı telefon ışığı" geçişini engelleyerek göz sağlığını korur</p>
                        <a class="read_more" href="#">Satın al</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our shop section -->






      

<?php $this->load->view('front/include/footer'); ?>