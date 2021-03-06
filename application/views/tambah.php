<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!-- Muat data header -->
	<?php $this->load->view('head'); ?>
	<title>Tambah</title>
	
	<!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Tambah</h1>
		<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
		  <div class="form-row">
			<div class="form-group col-md-2">
			  <label for="nim">NIM</label>
			  <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" required="">
			</div>
			<div class="form-group col-md-4">
			  <label for="nama">Nama Lengkap</label>
			  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required="">
			</div>
			<div class="form-group col-md-3">
			  <label for="tempat_lahir">Tempat Lahir</label>
			  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required="">
			</div>
			<div class="form-group col-md-3">
			  <label for="tanggal_lahir">Tanggal Lahir</label>
			  <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off" required="">
			</div>
		  </div>
		  <div class="form-group">
			<label for="alamat">Alamat Lengkap</label>
			<textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" required="" rows="3"></textarea>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-2">
			  <label for="hp">No Handphone</label>
			  <input type="text" class="form-control" id="hp" name="hp" placeholder="No Handphone" required="">
			</div>
			<div class="form-group col-md-4">
			  <label for="inputState">Jurusan</label>
			  <select id="inputState" class="form-control" name="jurusan" required="">
				<?= $this->mdata->get_jurusan(); ?>
			  </select>
			</div>
			<div class="form-group col-md-2">
			  <label for="kelamin">Jenis Kelamin</label>
			  <select id="kelamin" class="form-control" name="jenis_kelamin" required="">
				<option selected value="">Pilih Kelamin...</option>
				<option value="L">LAKI-LAKI</option>
				<option value="P">PEREMPUAN</option>
			  </select>
			</div>
		  </div>
		  <button type="submit" name="submit" value="kirim" class="btn btn-primary">Kirim</button>
		</form>
	  
    </main>

    




 



	<!-- Muat data footer -->
	<?php $this->load->view('footer'); ?>