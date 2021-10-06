<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column py-4">
			<div id="content" data-url="<?= base_url('barang') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="text-center">
						<h1 class="h3 m-0 text-gray-800 font-weight-bold"><?= $title ?></h1>
					</div>
					<hr>
					<div class="">
						<?php if ($this->session->login['role'] == 'admin'): ?>
							<!-- <a href="<?= base_url('barang/export') ?>" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a> -->
							<a href="<?= base_url('barang/export_excel') ?>" style="" class="btn btn_export float-left"><i style="background-color: green;" class="fa fa-file-excel"></i>&nbsp;&nbsp;Export Excel</a>

							<!-- <a href="<?= base_url('barang/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a> -->
							<a href="<?= base_url('barang/tambah') ?>" class="btn btn_tambah float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
						<?php endif ?>
					</div>
				</div>

				<!-- Sweetalert -->
				<?php if($this->session->flashdata('success')) : ?>
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
				<?php elseif($this->session->flashdata('error')) : ?>
					<div class="flash-data-duplicate" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>
				<?php endif ?>
				<!-- end of sweetalert -->

				<!-- <?php if ($this->session->flashdata('success')) : ?>
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
				<?php endif ?> -->

				<div class="table-responsive mt-3">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead class="thead-dark">
							<tr>
								<th style="max-width: 5%;">No</th>
								<th>Nama Barang</th>
								<th>SN</th>
								<th>Jenis</th>
								<th>Tanggal Masuk</th>
								<th>Jumlah</th>
								<?php if ($this->session->login['role'] == 'admin'): ?>
									<th>Aksi</th>
								<?php endif ?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($all_barang as $barang): ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $barang->nama_barang ?></td>
									<td><?= $barang->kode_barang ?></td>
									<td><?= strtoupper($barang->satuan) ?></td>
									<td><?= $barang->tgl_masuk ?></td>
									<td><?= $barang->stok ?></td>
									<?php if ($this->session->login['role'] == 'admin'): ?>
										<td>
											<a href="<?= base_url('barang/ubah/' . $barang->kode_barang) ?>" class="btn btn-success btn-sm"><i class="fa fa-pen"></i></a>
											<a href="<?= base_url('barang/hapus/' . $barang->kode_barang) ?>" class="btn btn-danger btn-sm tombol-delete"><i class="fa fa-trash"></i></a>
										</td>
									<?php endif ?>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<!-- <div class="card shadow">
					<div class="card-header"><strong>Daftar Barang</strong></div>
					<div class="card-body">
						<div class="table-responsive mt-3">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td style="max-width: 5%;">No</td>
										<td>SN</td>
										<td>Nama Barang</td>
										<td>Jenis</td>
										<td>Stok</td>
										<?php if ($this->session->login['role'] == 'admin'): ?>
											<td>Aksi</td>
										<?php endif ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($all_barang as $barang): ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $barang->kode_barang ?></td>
											<td><?= $barang->nama_barang ?></td>
											<td><?= strtoupper($barang->satuan) ?></td>
											<td><?= $barang->stok ?></td>
											<?php if ($this->session->login['role'] == 'admin'): ?>
												<td>
													<a href="<?= base_url('barang/ubah/' . $barang->kode_barang) ?>" class="btn btn-success btn-sm"><i class="fa fa-pen"></i></a>
													<a onclick="return confirm('apakah anda yakin?')" href="<?= base_url('barang/hapus/' . $barang->kode_barang) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
												</td>
											<?php endif ?>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>				
				</div> -->
				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
	<script src="<?= base_url('sb-admin/js/demo/datatables-demo.js') ?>"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>
</html>