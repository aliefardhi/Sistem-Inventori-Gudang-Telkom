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
			<div id="content" data-url="<?= base_url('pengeluaran') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
					<div class="clearfix">
						<div class="text-center">
							<h1 class="h3 m-0 text-gray-800 font-weight-bold"><?= $title ?></h1>
						</div>
						<hr>
						<div class="">
							<a href="<?= base_url('pengeluaran/export_excel') ?>" style="" class="btn btn_export float-left"><i style="background-color: green;" class="fa fa-file-excel"></i>&nbsp;&nbsp;Export Excel</a>
							
							<a href="<?= base_url('pengeluaran/tambah') ?>" class="btn btn_tambah float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
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
								<!-- <td>No Keluar</td> -->
								<th>WH Asal</th>
								<th>WH Tujuan</th>
								<th>Nama Barang</th>
								<th>SN</th>
								<th>Jumlah</th>
								<th>Tanggal Keluar</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($all_pengeluaran as $pengeluaran): ?>
								<tr>
									<td><?= $no++ ?></td>
									<!-- <td><?= $pengeluaran->no_keluar ?></td> -->
									<td><?= $pengeluaran->nama_petugas ?></td>
									<td><?= $pengeluaran->nama_customer ?></td>
									<td><?= $pengeluaran->nama_barang ?></td>
									<td><?= $pengeluaran->kode_barang ?></td>
									<td><?= $pengeluaran->jumlah_keluar ?></td>
									<td><?= $pengeluaran->tgl_keluar ?> <?= $pengeluaran->jam_keluar ?></td>
									<td>
										<!-- <a href="<?= base_url('pengeluaran/detail/' . $pengeluaran->no_keluar) ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a> -->
										<a href="<?= base_url('pengeluaran/hapus/' . $pengeluaran->no_keluar) ?>" class="btn btn-danger btn-sm tombol-delete"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<!-- <div class="card shadow">
					<div class="card-header"><strong>Daftar Pengeluaran</strong></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead class="thead-dark">
									<tr>
										<th style="max-width: 5%;">No</th>
										<td>No Keluar</td>
										<th>WH Asal</th>
										<th>WH Tujuan</th>
										<th>Nama Barang</th>
										<th>SN</th>
										<th>Jumlah</th>
										<th>Tanggal Keluar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($all_pengeluaran as $pengeluaran): ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $pengeluaran->no_keluar ?></td>
											<td><?= $pengeluaran->nama_petugas ?></td>
											<td><?= $pengeluaran->nama_customer ?></td>
											<td><?= $pengeluaran->nama_barang ?></td>
											<td><?= $pengeluaran->kode_barang ?></td>
											<td><?= $pengeluaran->jumlah ?></td>
											<td><?= $pengeluaran->tgl_keluar ?> <?= $pengeluaran->jam_keluar ?></td>
											<td>
												<a href="<?= base_url('pengeluaran/detail/' . $pengeluaran->no_keluar) ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
												<a onclick="return confirm('apakah anda yakin?')" href="<?= base_url('pengeluaran/hapus/' . $pengeluaran->no_keluar) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td>
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