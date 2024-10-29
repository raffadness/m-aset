<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TEMAN ASET</title>
	<meta charset="UTF-8">
	<!--===============================================================================================-->	
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>img/logow.svg" type="image/x-icon">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/fontawesome-free/css/all.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/sb-admin-2.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/') ?>css/main.css">
	<!--===============================================================================================-->
</head>
<body class="bg-gradient-primary">
	
<div class="container vh-100 d-flex justify-content-center align-items-center">

<!-- Outer Row -->
<div class="col-sm-12 col-md-8 col-lg-6 justify-content-center">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
						<div class="p-5">
							<div class="text-center">
								<div class="sidebar-brand-icon rotate-n-15">
            						<img src="<?= base_url('assets/') ?>img/logog.svg" alt="Logo" class="w-50 mb-5">
          						</div>
								<h1 class="h4 text-gray-900 mb-0">Selamat Datang di TEMAN ASET</h1>
								<h1 class="h4 text-gray-900 mb-4 font-weight-bold text-sm">TEKNOLOGI MANAJEMEN ASET</h1>
							</div>
							<form method="post" action="<?= base_url('login/act_login') ?>" class="user">
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user" name="pass" placeholder="Password">
								</div>
								<div class="form-group">
									<div class="custom-control custom-checkbox small">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck">Remember
											Me</label>
									</div>
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block">
									Login
								</button>
							</form>
							<hr>
						</div>
			</div>
		</div>
</div>

</div>

	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/jquery/jquery.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets/login/') ?>js/sb-admin-2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets/alert.js"></script>
	<?php echo "<script>".$this->session->flashdata('message')."</script>"?> 
	

</body>
</html>
