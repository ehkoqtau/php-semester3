<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!-- Muat data header -->
	<?php $this->load->view('head'); ?>
	<title>Lihat</title>


	<!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Lihat</h1>
		<div class="table-responsive">
		  <table class="table table-bordered">
		  <?= $this->mdata->lihat(); ?>
		</table>
		</div>
    </main>

    






	<!-- Muat data footer -->
	<?php $this->load->view('footer'); ?>