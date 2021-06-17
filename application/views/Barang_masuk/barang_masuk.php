<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class=" sidebar navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Nav Item Logo--->
            <li class="logosidebar">
                <img src="./assets/logo.png" alt="logo" width="125" height="125">
            </li> 
        
            <!-- Divider -->
            <hr class="sidebar-divider mt-5">

            <!-- Nav Item - Dashboard -->
            <li class="barangmasuk nav-item fs-5 fw-bold">
                <a class="nav-link" href="index.html">
                <i class="fas fa-boxes"></i>
                    <span>Barang Masuk</span></a>
            </li>

            <li class="barangkeluar nav-item fs-5 fw-bold">
                <a class="nav-link" href="index.html">
                <i class="fas fa-shipping-fast"></i>
                    <span>Barang Keluar</span></a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

            <li class="logout nav-item fs-5 fw-bold ">
                <a class="nav-link" href="index.html">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Page Heading -->
            <h1 class="judul h3 mb-5 text-center mt-4">DAFTAR BARANG MASUK</h1>

            <!-- button tambah-->
            <div>
                <button type="button" class="btn btn_tambah mb-3 float-right ">
                Tambah Data
                </button>

                <button type="button" class="btn btn_export mb-3 float-left">
                Export Excel
                </button>
            </div>

            <div class="col">
                <!-- Datatables -->
                <table id="mytable" class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Vendor</th>
                            <th>SN</th>
                            <th>MAC</th>
                            <th>tgl_masuk</th>
                            <th>WH_Penerima</th>
                            <th>Jenis</th>
                            <th>Tipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($b_masuk as $bm){ ?>
                        <tr>
                            <td><?= $bm->id; ?></td>
                            <td><?= $bm->vendor; ?></td>
                            <td><?= $bm->sn; ?></td>
                            <td><?= $bm->mac; ?></td>
                            <td><?= $bm->tgl_masuk; ?></td>
                            <td><?= $bm->wh_penerima; ?></td>
                            <td><?= $bm->jenis; ?></td>
                            <td><?= $bm->tipe; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- End of Datatables -->
            </div>
        </div>
        <!-- End of Content Wrapper -->



    </div>
    <!-- End of Page Wrapper -->
