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
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Page Heading -->
            <h1 class="judul h3 mb-5 text-center mt-4">DAFTAR BARANG KELUAR</h1>

            <!-- button tambah dan explore-->
            <div>
                <a href="#"class="btn btn_tambah mb-3 float-right ">
                    <i class="fas fa-plus"></i>
                        Tambah Data
                </a>

                <button type="button" class="btn btn_export mb-3 float-left">
                    <i style="background-color:green"class="far fa-file-excel"></i>
                        Export Excel
                </button>
            </div>

            <div class="col">
                <!-- Datatables -->
                <table id="mytable" class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>WH Asal</th>
                            <th>SN</th>
                            <th>MAC</th>
                            <th>Tanggal Kirim</th>
                            <th>WH Tujuan</th>
                            <th>Jumlah Keluar</th>
                            <th>Jenis</th>
                            <th>Tipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($b_keluar as $bk){ ?>
                        <tr>
                            <td><?= $bk->id_keluar; ?></td>
                            <td><?= $bk->wh_asal; ?></td>
                            <td><?= $bk->sn_keluar; ?></td>
                            <td><?= $bk->mac_keluar; ?></td>
                            <td><?= $bk->tgl_kirim; ?></td>
                            <td><?= $bk->wh_tujuan; ?></td>
                            <td><?= $bk->jumlah_keluar; ?></td>
                            <td><?= $bk->jenis_keluar; ?></td>
                            <td><?= $bk->tipe_keluar; ?></td>
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
