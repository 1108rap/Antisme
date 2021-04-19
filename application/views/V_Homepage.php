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

	<!-- Script -->
	<?php $this->load->view('_parts/Script.php'); ?>
	<!-- End of Script -->
</body>

</html>