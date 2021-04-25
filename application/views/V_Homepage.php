<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Head -->
	<?php $this->load->view('_parts/Head.php'); ?>
	<!-- End of Head -->
</head>

<body>
	<!-- Navigation Bar -->
	<nav class="navbar fixed-top navbar-custom">
		<a class="navbar-brand" href="<?= base_url() ?>">
			<img src="<?= base_url('assets/img/favicon.png') ?>" alt="Antisme Outsourcing" width="30" height="30">
		</a>
		<ul class="nav">
			<li class="nav-item">
				<a href="#header" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="#price" class="nav-link">Price</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Request</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Contact</a>
			</li>
		</ul>
		<button class="btn btn-outline-info">Login</button>
	</nav>
	<!-- End of Navigation Bar -->

	<!-- Header -->
	<header class="header" id="header">
		<div class="header-content">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="text-container">
							<h1 class="title">Antisme<br>Online Manage Resource </h1>
							<p class="description">Aplikasi management alih daya untuk menemukan pegawai</p>
							<a href="" class="btn btn-info">Discovery</a>
						</div>
					</div>
					<div class="col-6">
						<div class="img-container">
							<img class="img-fluid" src="assets/img/Header-Image.svg" alt="Header Website Information">
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End of Header -->

	<!-- Price -->
	<div id="price" class="price">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-container">
						<h2 class="title">Penawaran Harga</h2>
						<p class="description">Beberapa penawaran yang disesuaikan dengan kebutuhan anda. memungkinkan anda mendapatkan harga yang terbaik.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="row justify-content-center">
						<div class="col-4">
							<div class="card">
								<h1>sfasdfjk</h1>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<h1>sfasdfjk</h1>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<h1>sfasdfjk</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Price -->

	<!-- Request -->
	<div class="request" id="request">
		<div class="container">
			<div class="col-12"></div>
			<div class="col-12">
				<div class="row">
					<div class="col-6">
						<div class="text-container">

						</div>
					</div>
					<div class="col-6">
						<div class="form-input">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Request -->

	<!-- Script -->
	<?php $this->load->view('_parts/Script.php'); ?>
	<!-- End of Script -->
</body>

</html>