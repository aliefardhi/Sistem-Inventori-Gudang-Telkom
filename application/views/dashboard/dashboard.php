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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1000</div>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">500</div>
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

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4 mt-5">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Barang Masuk</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4 mt-5">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Barang Keluar</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>

</body>

</html>