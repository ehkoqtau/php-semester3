<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url("assets/akademik/"); ?>js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?= base_url("assets/akademik/"); ?>js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?= base_url("assets/akademik/"); ?>js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
	
	<link rel="stylesheet" href="<?= base_url("assets/akademik/"); ?>css/jquery-ui.css">
	<script src="<?= base_url("assets/akademik/"); ?>js/jquery-1.12.4.js"></script>
	<script src="<?= base_url("assets/akademik/"); ?>js/jquery-ui.js"></script>

	<script>
	$( function() {
	$( "#tanggal_lahir" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd',
		minDate: '-40y',
		maxDate: '0'
	});
	} );
	</script>
</body>
</html>