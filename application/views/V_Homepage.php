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
	<nav class="navbar">
		<a class="navbar-brand" href="#">
			<img src="<?= base_url('assets/img/favicon.png') ?>" alt="Antisme Outsourcing" width="30" height="30">
		</a>
		<ul class="nav">
			<li class="nav-item">
				<a href="" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Price</a>
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
						<h1 class="title">Antisme Outsourcing</h1>
						<p class="description">Aplikasi management alih daya untuk menemukan pegawai</p>
						<a href="" class="btn btn-info">Discovery</a>
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

	<!-- Script -->
	<?php $this->load->view('_parts/Script.php'); ?>
	<!-- End of Script -->
</body>

</html>