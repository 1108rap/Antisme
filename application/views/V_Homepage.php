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
	<!-- Navbar -->
	<nav class="navbar fixed-top navbar-transparent">
		<a href="" class="navbar-brand">
			<img src="<?= base_url('assets/img/favicon.png') ?>" alt="Company logo">
		</a>
		<ul class="nav">
			<li class="nav-item">
				<a href="#header" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="#service" class="nav-link">Service</a>
			</li>
			<li class="nav-item">
				<a href="#price" class="nav-link">Pricing</a>
			</li>
		</ul>
		<form action="" class="form-inline">
			<button class="btn btn-sm btn-outline-primary btn-round">Login</button>
		</form>
	</nav>
	<!-- End of Navbar -->

	<!-- Header -->
	<div class="header" id="header">
		<div class="header-content">
			<div class="content-text">
				<h1 class="title">Antisme Outsourcing</h1>
				<h3 class="text-category">perusahaan outsourcing</h3>
			</div>
		</div>
	</div>
	<!-- End of Header -->

	<!-- Content -->
	<div class="content">
		<div class="services" id="service">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h6 class="card-category">Online network</h6>
								<div class="card-icon">
									<i class="material-icons-round">rss_feed</i>
								</div>
								<p class="card-description">
									asdkasdklaskdmaskdm,cklmasoiklwmkcaklmcsakmasdklklasmdklmasdkdfkms,adkjikhfjasdkmkasmdklam
								</p>
								<div class="card-footer">
									<a href="" class="btn btn-danger btn-round">
										Learn more...
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="price" id="price">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-3">
						<div class="card">
							<div class="card-body">
								<h6 class="card-category"></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Content -->

	<!-- Script -->
	<?php $this->load->view('_parts/Script.php'); ?>
	<!-- End of Script -->
</body>

</html>