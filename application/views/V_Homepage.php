<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- SEO Meta Tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Rafi Antareza Putra">
	<meta name="keywords" content="Outsourcing Application">
	<meta name="description" content="Management application for outsourcing system">
	<!-- End of SEO Meta Tags -->

	<!-- Icon n' Title -->
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
	<title>Antime Outsourcing</title>
	<!-- End of Icon n' Title -->

	<!-- Style n' CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/antisme.css') ?>">
	<!-- End of Style n' CSS -->

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- End of Bootstrap CSS -->
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

	<!-- Script -->
	<?php $this->load->view('_parts/Script.php'); ?>
	<!-- End of Script -->
</body>

</html>