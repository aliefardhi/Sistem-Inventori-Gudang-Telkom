<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column py-5">
			<div id="content" data-url="<?= base_url('barang') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800 font-weight-bold"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('barang') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="card shadow">
							<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
							<div class="card-body">
								<form action="<?= base_url('barang/proses_ubah/' . $barang->kode_barang) ?>" id="form-tambah" method="POST">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="nama_barang"><strong>Nama Barang</strong></label>
											<input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" autocomplete="off"  class="form-control" required value="<?= $barang->nama_barang ?>">
										</div>

										<div class="form-group col-md-6">
											<label for="kode_barang"><strong>SN</strong></label>
											<input type="text" name="kode_barang" placeholder="Masukkan Kode Barang" autocomplete="off"  class="form-control" required value="<?= $barang->kode_barang ?>">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-4">
											<label for="stok"><strong>Jumlah</strong></label>
											<input type="number" name="stok" placeholder="Masukkan Stok" autocomplete="off"  class="form-control" required value="<?= $barang->stok ?>">
										</div>
										<div class="form-group col-md-4">
											<label for="satuan"><strong>Jenis</strong></label>
											<select name="satuan" id="satuan" class="form-control" required>
												<option value="">-- Silahkan Pilih --</option>
												<option value="ont" <?= $barang->satuan == 'ont' ? 'selected' : '' ?>>ONT</option>
												<option value="stb" <?= $barang->satuan == 'stb' ? 'selected' : '' ?>>STB</option>
												<option value="ipcam" <?= $barang->satuan == 'ipcam' ? 'selected' : '' ?>>IPCAM</option>
											</select>
										</div>
										<div class="form-group col-md-4">
											<label>Tanggal Masuk</label>
											<input type="date" name="tgl_masuk" value="<?= $barang->tgl_masuk ?>" class="form-control" required>
										</div>
									</div>
									<hr>
									<div class="form-group">
										<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
										<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
									</div>
								</form>
							</div>				
						</div>
					</div>
				</div>
				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
</body>
</html>