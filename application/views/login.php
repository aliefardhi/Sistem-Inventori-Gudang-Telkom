<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title ?></title>
	<link href="<?= base_url('sb-admin') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url('sb-admin') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

	<div class="container">
		<!-- Outer Row -->
		<div class="row justify-content-center align-items-center">

			<h1 class="judul mt-5 text-center">SISTEM INVENTORI BARANG GUDANG</h1>
			<div class="col-lg-7">
				<div class="card o-hidden border-0 shadow-lg mt-5 mx-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-12">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<!-- <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1> -->
										<img src="<?= base_url('sb-admin/img/ta_logo.png') ?>" alt="logo" width="271" height="89">
										<?php if ($this->session->flashdata('success')) : ?>
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<?= $this->session->flashdata('success') ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php elseif($this->session->flashdata('error')) : ?>
											<div class="alert alert-danger alert-dismissible fade show" role="alert">
												<?= $this->session->flashdata('error') ?>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
										<?php endif ?>
									</div>
									<form class="user mt-5" method="POST" action="<?= base_url('login/proses_login') ?>">
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="username" placeholder="Masukkan Username" autocomplete="off" required name="username">
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" id="password" placeholder="Masukkan Password" required name="password">
										</div>
										<!-- <div class="form-group">
											<select name="role" id="role" class="form-control" required>
												<option value="">Masuk Sebagai</option>
												<option value="petugas">Petugas</option>
												<option value="admin">Admin</option>
											</select>
										</div> -->
										<input type="hidden" name="role" id="role" value="admin">
										<button type="submit" class="btn btn-danger btn-user btn-block" name="login">
											Login
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

	<script src="<?= base_url('sb-admin') ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/js/sb-admin-2.min.js"></script>
</body>

<footer class="float-sm-start" style="margin-top: -20%; "> 
    <img src="./sb-admin/img/bg.png" alt="bg" width="100%" height="100%">
</footer>

</html>
