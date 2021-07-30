<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <!-- Sidebar -->
         <ul class="sidebar navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Nav Item Logo--->
            <li class="logosidebar">
                <img src="./assets/circle_logo.png" alt="logo" width="125" height="125">
            </li> 

            <!-- Divider -->
            <hr style="color: white;" class="sidebar-divider mt-5">

            <!-- Nav Item - Dashboard -->
            <li class=" dashboard nav-item fs-5 fw-bold bg-light">
                <a class="nav-link" href="#">
                <i style="color:black" class="fas fa-tachometer-alt"></i>
                    <span style="color:black">Dashboard</span></a>
            </li>

            <li class="barangmasuk nav-item fs-5 fw-bold">
                <a class="nav-link" href="<?= base_url('barang_masuk')?>">
                <i style="color:white" class="fas fa-boxes"></i>
                    <span>Barang Masuk</span></a>
            </li>

            <li class="barangkeluar nav-item fs-5 fw-bold">
                <a class="nav-link" href="<?= base_url('barang_keluar')?>">
                <i style="color:white" class="fas fa-shipping-fast"></i>
                    <span>Barang Keluar</span></a>
            </li>

            <!-- Divider -->
            <hr style="color: white;" class="sidebar-divider mt-4">

            <li class="logout nav-item fs-5 fw-bold ">
                <a class="nav-link" href="#modal-Logout" data-toggle="modal" onclick="$('#modal-Logout #form-Logout ').attr('action', '<?= base_url();?>auth/logout')">
                    <i style="color:white" class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

             <!-- Page Heading -->
             <h1 class="judul h3 mb-5 text-center mt-4">DASHBOARD</h1>

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 mt-5 mx-md-auto">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Barang Masuk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->fungsi->count_itemMasuk(); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-boxes fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 mt-5 mx-md-auto">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Barang Keluar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_keluar ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-shipping-fast fa-3x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <!-- Content Row -->

                    <div class="row">
                        <!-- Line Chart Barang Masuk -->
                        <div class="mx-auto" style="height:500px; width: 730px;">
                            <div class="card shadow mb-4 mt-5">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Total Barang Masuk Per Bulan</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="lineBM"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Doughnut Chart Barang Masuk -->
                        <div class="col-xl-4 col-lg-5 mx-auto">
                            <div class="card shadow mb-4 mt-5">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Sebaran Data Vendor Barang Masuk</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-1 pb-2">
                                        <canvas id="doughnutBM"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Line Chart Barang Keluar -->
                    <div class="row">
                        <div class="mx-auto" style="height:500px; width: 730px;">
                            <div class="card shadow mb-4 mt-5">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Total Barang Keluar Per Bulan</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="barKL"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Doughnut Chart Barang Keluar -->
                        <div class="col-xl-4 col-lg-5 mx-auto">
                            <div class="card shadow mb-4 mt-5">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Sebaran Data Jenis Barang Keluar</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-1 pb-2">
                                        <canvas id="doughnutKL"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

        <!-- Modal Logout -->
        <div class="modal fade" id="modal-Logout" tabindex="-1" aria-labelledby="modal-Logout" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-Logout">Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ? 
                </div>
                <div class="modal-footer">
                    <form id="form-Logout" action="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </form>
                    
                </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Doughnut chart b_masuk data -->
    <?php
        $label_vendor = ""; 
        $jumlah = null;
        foreach($hasil as $item){
            $sum = $item->total_vendor;
            $jumlah .= "$sum".", ";
            $nama_vendor = $item->vendor;
            $label_vendor .= "'$nama_vendor'".", ";
        }
    ?>

    <!-- Doughnut chart b_keluar data -->
    <?php
        $label_jenis = ""; 
        $jml_jenis = null;
        foreach($jenis as $itemKL){
            $total_jenis = $itemKL->count_jenis;
            $jml_jenis .= "$total_jenis".", ";
            $nama_jenis = $itemKL->jenis_keluar;
            $label_jenis .= "'$nama_jenis'".", ";
        }
    ?>

    <!-- Line chart b_masuk data -->
    <?php 
        $jml = null;
        $time = "";
        foreach($dataBM as $itemBM){
            $label_time = $itemBM->month;
            $time .= "'$label_time'".", ";
            $jml_vendor = $itemBM->count_vendor;
            $jml .= "$jml_vendor".", ";
        }

    ?>

    <!-- Bar Chart b_keluar data -->
    <?php 
        $jml_keluar = null;
        $time_keluar = "";
        foreach($dataKL as $kl){
            $label_keluar = $kl->tgl_kirim;
            $time_keluar .= "'$label_keluar'".", ";
            $total_kl = $kl->jumlah_keluar;
            $jml_keluar .= "$total_kl".", ";
        }
    ?>
    
    <!-- Chart.js library -->
    <script src="<?= base_url('assets/vendor/chart.js/Chart.js'); ?>"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

    <!-- <script>
        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            ];
            const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        };

        const config = {
            type: 'line',
            data,
            options: {}
        };

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script> -->

    <!-- Doughnut Chart Barang Masuk -->
    <script>
        // setup chart
        const data = {
            labels: [<?= $label_vendor; ?>],
            datasets:[{
                label: '',
                data: [<?= $jumlah; ?>],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4,
            }]
        };

        // config chart
        const config = {
            type: 'doughnut',
            data: data
        }
        
        // render chart
        var mychart = new Chart(
            document.getElementById('doughnutBM'),
            config
        );
    </script>

    <!-- Doughnut Chart Barang Keluar -->
    <script>
        // setup chart
        const dataJenis = {
            labels: [<?= $label_jenis; ?>],
            datasets:[{
                label: '',
                data: [<?= $jml_jenis; ?>],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4,
            }]
        };

        // config chart
        const configJenis = {
            type: 'doughnut',
            data: dataJenis,
        }
        
        // render chart
        var doughnutKL = new Chart(
            document.getElementById('doughnutKL'),
            configJenis
        );
    </script>

    <!-- Line Chart Barang Masuk -->
    <script>
        // setup
        const dataLine = {
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
            data: dataLine,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        // render
        var lineChart = new Chart(
            document.getElementById('lineBM'),
            configLineMasuk
        );
    </script>

    <!-- Bar Chart Barang Keluar -->
    <script>
        // setup
        const dataBarKL = {
            labels: [<?= $time_keluar; ?>],
            datasets: [{
                label: 'Total',
                data: [<?= $jml_keluar; ?>],
                fill: false,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        // config line chart Barang Masuk
        const configBarKL = {
            type: 'bar',
            data: dataBarKL,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        // render
        var barKL = new Chart(
            document.getElementById('barKL'),
            configBarKL
        );
    </script>
