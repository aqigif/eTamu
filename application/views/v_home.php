
  <!-- intro section
   ================================================== -->
   <section id="intro" class="cb-slideshow">
        <ul class="cb-slideshow" style="list-style-type: none">
              <li><span></span><div><h3></h3></div></li>
              <li><span></span><div><h3></h3></div></li>
              <li><span></span><div><h3></h3></div></li>
              <li><span></span><div><h3></h3></div></li>
              <li><span></span><div><h3></h3></div></li>
              <li><span></span><div><h3></h3></div></li>
              <li><span></span><div><h3></h3></div></li>
              <li><span></span><div><h3></h3></div></li>
              <li><span></span><div><h3></h3></div></li>
              <li><span></span><div><h3></h3></div></li>
        </ul>
    <div class="shadow-overlay"></div>

    <div class="intro-content">
      <div class="row">

        <div class="col-twelve">

          <h5>Selamat Datang di Stand Ciamis </h5>
          <h1>Silahkan untuk mengisi Buku Tamu</h1>

          <div class='link'><a href="#buku-tamu" class="button button-primary">Isi Buku Tamu</a></div>
          <a class="button stroke smoothscroll" href="#testimonials" title="">Selengkapnya</a>

        </div>  
        
      </div>
             
    </div> 

   </section> <!-- /intro -->


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

    <div class="row">
      <div class="col-twelve">
        <h2 class="h01">Kesan dan Pesan</h2>
      </div>      
    </div>    

      <div class="row flex-container">
    
         <div id="testimonial-slider" class="flexslider">

            <ul class="slides">
                <?php
                  $no=1;
                  foreach($tamu as $t){
                    if ($no<=5) { echo $no++;
                ?>
               <li>
                <div class="testimonial-author">
                      <div class="author-info">
                        <?php echo $t->nama;?>
                        <span class="position"><?php echo $t->jabatan;?>, <?php echo $t->instansi;?></span>
                      </div>
                  </div>

                  Kesan dan Pesan
                  <p><?php echo $t->kesan;?> <br> <?php echo $t->pesan;?></p>
              </li> <!-- /slide -->

            <?php } } ?>

            </ul> <!-- /slides -->

         </div> <!-- /testimonial-slider -->         
        
      </div> <!-- /flex-container -->

   </section> <!-- /testimonials -->



  <!-- pricing
   ================================================== -->

   <section id="pricing">

    <div class="row section-intro">
      <div class="col-twelve with-bottom-bar with-bottom-line">
        <h5><?=$this->session->flashdata('notif')?></h5>
        <h1>Data Buku Tamu</h1>
      </div>      
    </div>

    <div class="row pricing-content">

         <div class="pricing-tables block-1-4 group">

            <table class="table-responsive">
          <tr>
            <th>No.</th>
            <th>Tanggal Tulis</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Asal Instansi</th>
            <th>Kabupaten/Kota</th>
          </tr>
          <?php
            $no=1;
            foreach($tamu as $t){
              if ($no<=5) {
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo tgl_indo(date($t->tgl));?></td>
            <td><?php echo $t->nama;?></td>
            <td><?php echo $t->jabatan;?></td>
            <td><?php echo $t->instansi;?></td>
            <td><?php echo $t->kabkota;?></td>
          </tr>
        <?php }}?>
        </table>
          <h4 style="text-align: center;"><a href="<?php echo base_url('buku_tamu');?>">Selengkapnya ></a></h4>  

         </div> <!-- /pricing-tables --> 

      </div> <!-- /pricing-content --> 

   </section> <!-- /pricing --> 


   <!-- Grafik Section
   ================================================== -->
   <section id="process">  

    <div class="row section-intro">
      <div class="col-twelve with-bottom-bar with-bottom-line">

        <h5></h5>
        <h1>Grafik Responden</h1>

      </div>      
    </div>

    <div class="row process-content">
      <?php
        foreach($grafik as $g){
            $kabkota[] = $g->kabkota;
            $jml[] = (float)$g->jml;
          }
      ?>
      <canvas id="canvas" width="1000" height="500"></canvas>
      <script>

        var lineChartData = {
          labels : <?php echo json_encode($kabkota);?>,
          datasets : [
            {
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(152,235,239,1)",
              data : <?php echo json_encode($jml);?>
            },
          ]
          
        }
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
      
      </script>

    </div> <!-- /process-content --> 

   </section> <!-- /process-->    



  
