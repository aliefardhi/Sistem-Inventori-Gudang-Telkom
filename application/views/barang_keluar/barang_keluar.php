<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class=" sidebar navbar-nav  sidebar sidebar-dark accordion mb-3" id="accordionSidebar">

            <!-- Nav Item Logo--->
            <li class="logosidebar">
            <img src="./assets/logo.png" alt="logo" width="125" height="125">
            </li> 
        
            <!-- Divider -->
            <hr style="color: white;" class="sidebar-divider mt-5">

            <!-- Nav Item - Dashboard -->
            <li class="barangmasuk nav-item fs-5 fw-bold">
                <a class="nav-link" href="<?= base_url('barang_masuk') ?>">
                <i class="fas fa-boxes"></i>
                    <span>Barang Masuk</span></a>
            </li>

            <li class="barangkeluar nav-item fs-5 fw-bold">
                <a class="nav-link" href="#">
                <i class="fas fa-shipping-fast"></i>
                    <span>Barang Keluar</span></a>
            </li>

             <!-- Divider -->
             <hr style="color: white;" class="sidebar-divider mt-4">

            <li class="logout nav-item fs-5 fw-bold ">
                <a class="nav-link" href="index.html">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex mt-3 flex-column">

            <!-- Page Heading -->
            <h1 class="judul h3 mb-5 text-center">DAFTAR BARANG KELUAR</h1>

            <!-- button tambah dan explore-->
            <div>
                <button type="button" class="btn btn_tambah mb-3 float-right ">
                Tambah Data
                </button>

                <button type="button" class="btn btn_export mb-3 float-left">
                Export Excel
                </button>
            </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
