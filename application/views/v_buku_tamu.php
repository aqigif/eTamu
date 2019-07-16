<!-- pricing
   ================================================== -->

   <section id="pricing">

    <div class="row section-intro">
      <div class="col-twelve with-bottom-line">

        <h5 style="text-align: center;"><a href="<?php echo base_url('tamu');?>">< Kembali ke beranda</a></h5> 
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
            <th>Asal Instansi</th>
            <th>Jabatan</th>
          </tr>
          <?php
            $no = $this->uri->segment('3') + 1;
            foreach($tamu as $t){
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo tgl_indo(date($t->tgl));;?></td>
            <td><?php echo $t->nama;?></td>
            <td><?php echo $t->instansi;?></td>
            <td><?php echo $t->jabatan;?></td>
          </tr>
        <?php }?>
        </table>
          <h4 style="text-align: center;"><?php echo $this->pagination->create_links(); ?></h4>   

         </div> <!-- /pricing-tables --> 

      </div> <!-- /pricing-content --> 

   </section> <!-- /pricing --> 