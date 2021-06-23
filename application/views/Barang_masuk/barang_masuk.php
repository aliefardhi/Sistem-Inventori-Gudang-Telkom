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
            <li class="barangmasuk nav-item fs-5 fw-bold bg-light ">
                <a class="nav-link" href="#">
                <i style="color:black" class="fas fa-boxes"></i>
                    <span style="color:black">Barang Masuk</span></a>
            </li>

            <li class="barangkeluar nav-item fs-5 fw-bold">
                <a class="nav-link" href="<?= base_url('barang_keluar') ?>">
                <i style="color:white" class="fas fa-shipping-fast"></i>
                    <span>Barang Keluar</span></a>
            </li>

             <!-- Divider -->
             <hr style="color: white;" class="sidebar-divider mt-4">

            <li class="logout nav-item fs-5 fw-bold ">
                <a class="nav-link" href="index.html">
                <i style="color:white" class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Page Heading -->
            <h1 class="judul h3 mb-5 text-center mt-4">DAFTAR BARANG MASUK</h1>
            
            <!-- Success Alert -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('input'); ?>"></div>
            <?php if($this->session->flashdata('input')): ?>
            <!-- <div class="mx-auto alert alert-success alert-dismissible fade show" role="alert">
                Data <strong>berhasil</strong> <?= $this->session->flashdata('input'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
            <?php endif; ?>
            <!-- End of success alert -->

            <!-- button tambah dan export-->
            <div>
                <a href="<?= base_url('tambah_masuk') ?>"class="btn btn_tambah mb-3 float-right ">
                    <i class="fas fa-plus"></i>
                        Tambah Data
                </a>

                <button type="button" class="btn btn_export mb-3 float-left">
                    <i style="background-color:green" class="far fa-file-excel"></i>
                        Export Excel
                </button>
            </div>

            <div class="col">
                <!-- Datatables -->
                <table id="mytable" class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Vendor</th>
                            <th>SN</th>
                            <th>MAC</th>
                            <th>Tanggal Masuk</th>
                            <th>WH Penerima</th>
                            <th>Jenis</th>
                            <th>Tipe</th>
                            <th>Aksi</th>
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
                            <td style="table-layout: auto; width: 15%;"><?= $bm->wh_penerima; ?></td>
                            <td><?= $bm->jenis; ?></td>
                            <td><?= $bm->tipe; ?></td>
                            <td style="width: 12%;">
                                <a class="btn btn-primary btn-sm" href="<?= base_url(); ?>barang_masuk/editmasuk/<?= $bm->id ?>">
                                    Edit
                                </a>

                                <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="<?= base_url(); ?>barang_masuk/hapusMasuk/<?= $bm->id; ?>">
                                    Delete
                                </a>
                            </td>
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
