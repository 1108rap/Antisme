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
	<div class="navbar-wrapper">
		<div class="navbar">
			<ul class="items-wrapper">
				<li class="navbar-items">
					<span class="material-icons-round">home</span>
				</li>
				<li class="navbar-items">
					<span class="material-icons-round">local_offer</span>
				</li>
				<li class="navbar-items">
					<span class="material-icons-round">stars</span>
				</li>
				<li class="navbar-items">
					<span class="material-icons-round">phone</span>
				</li>
				<li class="navbar-items">
					<span class="material-icons-round">settings</span>
				</li>
			</ul>
		</div>
	</div>
	<!-- End of Navbar -->

	<!-- Content Wrapper -->
	<div class="wrapper">
		<!-- Header -->
		<div class="header" id="header">
			<div class="container logo-container">
				<a href="<?= site_url() ?>" class="logo-brand">Antisme</a>
			</div>
			<div class="container header-content">
				<div class="row justify-content-center">
					<div class="col-6">
						<img class="header-img" src="<?= base_url('assets/img/Header-image.svg') ?>" alt="Header">
					</div>
					<div class="col-6">
						<div class="text-container">
							<h3>klasdklasmdksam</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Header -->
	</div>
	<!-- End of Content Wrapper -->

	<!-- Script -->
	<?php $this->load->view('_parts/Script.php'); ?>
	<!-- End of Script -->
</body>

</html>