<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.83.1">
	<title>Healty Food</title>
	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('') ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('') ?>assets/fontawesome/css/all.css"" rel=" stylesheet">
	<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
	<!doctype html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Hugo 0.83.1">
		<title>Healty Food</title>
		<!-- Bootstrap core CSS -->
		<link href="<?= base_url('') ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?= base_url('') ?>assets/fontawesome/css/all.css"" rel=" stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<style type="text/css">
			.input-group,
			input.test-value-input {
				max-width: 130px;
			}
		</style>
	</head>
</head>

<?php $this->load->view('navbar', $page) ?>

<body>
	<div class=" text-center">
		<div class="d-grid gap-2">
			<a href="<?= base_url('') ?>welcome/pilihan_pasar" class="btn btn-light" type="button">PILIHAN PASAR</a>
		</div>
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= base_url('') ?>assets/img/home.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
		</div>
	</div>
</body>

<script src="<?= base_url('') ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>