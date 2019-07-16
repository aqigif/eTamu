
<!-- Modal Popup
     ========================================================= -->
<div id="buku-tamu" class="popup-modal mfp-hide">

	<div class="row"><br>
	<h1 class="text-center">Silahkan mengisi buku tamu</h1>
    <form action="tamu/aksi_tambah" method="post">
      <div class="form-group col-six">
        <label for="nama">Nama</label>
        <input class="form-control" type="text" style="width: 100% !important" name="nama" id="nama" placeholder="Aqil Gifari" required />
      </div>      
      <div class="form-group col-six">
        <label for="jabatan">Jabatan</label>
        <input class="form-control" type="text" style="width: 100% !important" name="jabatan" id="jabatan" placeholder="Pelajar" required />
      </div>
      <div class="form-group col-six">
        <label for="instansi">Asal Instansi</label>
        <input class="form-control" type="text" style="width: 100% !important" name="instansi" id="instansi" placeholder="SMK N 1 Kawali" required />
      </div>
      <div class="form-group col-six">
        <label for="kabkota">Kabupaten/Kota</label>
         <select class="form-control ss-custom-select" style="width: 100% !important" name="kabkota" id="kabkota" placeholder="Ciamis" required />
          <option value=""></option>
          <?php foreach ($pilih as $k) {?>
          <option value="<?php echo $k->pilih;?>"><?php echo $k->pilih;?></option>
        <?php }?>
        </select> 
      </div>
      <div class="form-group col-six">
        <label for="kesan">Kesan</label>
        <textarea class="form-control" name="kesan" id="kesan" placeholder="..." cols="40" required /></textarea>
      </div>
      <div class="form-group col-six">
        <label for="pesan">Pesan</label>
        <textarea class="form-control" name="pesan" id="pesan" placeholder="..." cols="40" required /></textarea>
      </div>
      <div class="col-twelve text-right">
        <a class="button button-secondary close">Batal</a> 
        <input class="button button-primary" type="submit" value="Submit" style="margin-bottom: 3rem;">
      </div>
    </form>  
  </div>
<a class="close-popup close">Close</a>         
</div>