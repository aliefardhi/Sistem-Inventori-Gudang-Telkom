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
			<div id="content" data-url="<?= base_url('kasir') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
					<div class="clearfix">
						<div class="float-left">
							<h1 class="h3 m-0 text-gray-800 font-weight-bold"><?= $title ?></h1>
						</div>
					</div>
					<hr>
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
					
					<div class="row">

			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-primary shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Data Barang Masuk</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_barang ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-box fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-success shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Stok Barang</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_stok_barang ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-boxes fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-info shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Data Barang Keluar</div>
			                      <div class="row no-gutters align-items-center">
			                        <div class="col-auto">
			                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlah_pengeluaran ?></div>
			                        </div>
			                      </div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-file-invoice fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <!-- Pending Requests Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-warning shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Stok Keluar</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_stok_keluar ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-shipping-fast fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>
			        </div>

			        <div class="row">
			        	<div class="col-md-6" style="height:500px; width: 730px;">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Sebaran Data Barang Masuk Per Tahun</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineBM"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" style="height:500px; width: 730px;">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Sebaran Data Barang Keluar Per Tahun</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineKL"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
			          	<!-- <div class="col-md-6">
							<div class="card shadow">
								<div class="card-header"><strong>Profil Toko</strong></div>
								<div class="card-body">
									<strong>Nama Toko : </strong><br>
									<input  type="text" value="<?= $toko->nama_toko ?>" readonly class="form-control mt-2 mb-2">
									<strong>Nama Pemilik : </strong><br>
									<input  type="text" value="<?= $toko->nama_pemilik ?>" readonly class="form-control mt-2 mb-2">
									<strong>No Telepon : </strong><br>
									<input  type="text" value="<?= $toko->no_telepon ?>" readonly class="form-control mt-2 mb-2">
									<strong>Alamat : </strong><br>
									<input  type="text" value="<?= $toko->alamat ?>" readonly class="form-control mt-2">
								</div>				
							</div>
			          	</div> -->
			          	<!-- <div class="col-md-6">
							<div class="card shadow">
								<div class="card-header"><strong>User Sedang Login</strong></div>
								<div class="card-body">
									<strong>Nama : </strong><br>
									<input type="text" value="<?= $this->session->login['nama'] ?>" readonly class="form-control mt-2 mb-2">
									<strong>Username : </strong><br>
									<input type="text" value="<?= $this->session->login['username'] ?>" readonly class="form-control mt-2 mb-2">
									<strong>Role : </strong><br>
									<input type="text" value="<?= $this->session->login['role'] ?>" readonly class="form-control mt-2 mb-2">
									<strong>Jam Login : </strong><br>
									<input type="text" value="<?= $this->session->login['jam_masuk'] ?>" readonly class="form-control mt-2">
								</div>				
							</div>
			          	</div> -->
			        </div>

				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>

	<!-- Chart.js library -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<!-- Line chart b_masuk data -->
    <?php 
        $jml = null;
        $time = "";
        foreach($bMasuk_tahunan as $itemBM){
            $label_time = $itemBM->tgl_masuk;
            $time .= "'$label_time'".", ";
            $jml_masuk = $itemBM->jumlah_masuk;
            $jml .= "$jml_masuk".", ";
        }
    ?>

    <?php 
        $jml_kl = null;
        $time_keluar = "";
        foreach($bKeluar_tahunan as $itemBK){
            $label_time_keluar = $itemBK->tgl_keluar;
            $time_keluar .= "'$label_time_keluar'".", ";
            $jml_keluar = $itemBK->jumlah_keluar;
            $jml_kl .= "$jml_keluar".", ";
        }
    ?>

    <!-- Line Chart Barang Keluar -->
    <script>
        // setup
        const dataLineKeluar = {
            labels: [<?= $time_keluar; ?>],
            datasets: [{
                label: 'Total',
                data: [<?= $jml_kl; ?>],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        // config line chart Barang Keluar
        const configLineKeluar = {
            type: 'line',
            data: dataLineKeluar,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        // render
        var lineChartKeluar = new Chart(
            document.getElementById('lineKL'),
            configLineKeluar
        );
    </script>

    <!-- Line Chart Barang Masuk -->
    <script>
        // setup
        const dataLineMasuk = {
            labels: [<?= $time; ?>],
            datasets: [{
                label: 'Total',
                data: [<?= $jml; ?>],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };

        // config line chart Barang Masuk
        const configLineMasuk = {
            type: 'line',
            data: dataLineMasuk,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        // render
        var lineChartMasuk = new Chart(
            document.getElementById('lineBM'),
            configLineMasuk
        );
    </script>


	<?php $this->load->view('partials/js.php') ?>
	<script src="<?= base_url('sb-admin/js/demo/datatables-demo.js') ?>"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>
</html>