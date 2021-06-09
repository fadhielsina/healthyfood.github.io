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
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<b>
				<font face="Courier New" color="green">HealtyFood</font>
			</b>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('menu/sayuran') ?>">Sayuran-Sayuran</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('menu/buah') ?>">Buah-Buahan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('menu/daging') ?>">Daging Segar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('menu/ikan') ?>">Ikan Segar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('menu/jajanan') ?>">Jajanan Pasar</a>
				</li>
			</ul>
			<div class="d-flex">
				<button type="button" class="btn btn-outline-success" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#registerModal">
					Register
				</button>
				<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#loginModal">
					Login
				</button>
			</div>
		</div>
	</div>
</nav>

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


	<!--Login Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Login Form</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="welcome/login" method="post">
						<div class="container">
							<div class="mb-3">
								<label class="form-label">Phone Number</label>
								<input type="text" class="form-control" id="email" name="email" required>
							</div>
							<div class="mb-3">
								<label class="form-label">Password</label>
								<input type="password" class="form-control" id="password" name="password" required>
							</div>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Sign In</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<!--Register Modal -->
	<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Create An Account</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="modal-body">
						<form action="welcome/register" method="post">
							<div class="container">
								<div class="mb-3">
									<label class="form-label">Username</label>
									<input type="text" class="form-control" id="username" name="username" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Email address</label>
									<input type="email" class="form-control" id="email" name="email" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Address</label>
									<input type="text" class="form-control" id="address" name="address" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Phone Number</label>
									<input type="number" class="form-control" id="phone" name="phone" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Password</label>
									<input type="password" class="form-control" id="password" name="password" required>
								</div>
								<div class="mb-3">
									<label class="form-label">Re-enter Password</label>
									<input type="password" class="form-control" id="password1" name="password1" required>
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

<script src="<?= base_url('') ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>