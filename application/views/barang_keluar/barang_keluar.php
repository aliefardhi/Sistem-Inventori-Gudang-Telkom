<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class=" sidebar navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Nav Item Logo--->
            <li class="logosidebar">
            <div class="oval"></div>
            <img src="./assets/circle_logo.png" alt="logo" width="125" height="125">
            </li> 
        
            <!-- Divider -->
            <hr style="color: white;" class="sidebar-divider mt-5">

            <!-- Nav Item - Dashboard -->
            <li class="barangmasuk nav-item fs-5 fw-bold">
                <a class="nav-link" href="<?= base_url('barang_masuk') ?>">
                <i style="color:white" class="fas fa-boxes"></i>
                    <span>Barang Masuk</span></a>
            </li>

            <li class="barangkeluar nav-item fs-5 fw-bold bg-light">
                <a class="nav-link" href="#">
                <i style="color:black" class="fas fa-shipping-fast"></i>
                    <span style="color:black">Barang Keluar</span></a>
            </li>

             <!-- Divider -->
             <hr style="color: white;" class="sidebar-divider mt-3">

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
            <h1 class="judul h3 mb-5 text-center mt-4">DAFTAR BARANG KELUAR</h1>

            <!-- Success Alert -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('input'); ?>"></div>
            <?php if($this->session->flashdata('input')): ?>
            <?php endif; ?>
            <!-- End of success alert -->

            <!-- button tambah dan explore-->
            <div>
                <a href="<?= base_url('tambah_keluar') ?>"class="btn btn_tambah mb-3 float-right ">
                    <i class="fas fa-plus"></i>
                        Tambah Data
                </a>

                <a href="<?= base_url('barang_keluar/export') ?>" class="btn btn_export mb-3 float-left">
                    <i style="background-color:green"class="far fa-file-excel"></i>
                        Export Excel
                </a>
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $index = 1; ?>
                        <?php foreach($b_keluar as $bk){ ?>
                        <tr>
                            <td><?= $index; ?></td>
                            <td><?= $bk->wh_asal; ?></td>
                            <td><?= $bk->sn_keluar; ?></td>
                            <td><?= $bk->mac_keluar; ?></td>
                            <td><?= $bk->tgl_kirim; ?></td>
                            <td style="table-layout: auto; width: 15%;"><?= $bk->wh_tujuan; ?></td>
                            <td><?= $bk->jumlah_keluar; ?></td>
                            <td><?= $bk->jenis_keluar; ?></td>
                            <td><?= $bk->tipe_keluar; ?></td>
                            <td style="width: 12%;">
                                <a class="btn btn-primary btn-sm" href="<?= base_url(); ?>barang_keluar/editKeluar/<?= $bk->id_keluar; ?>">
                                    Edit
                                </a>

                                <a class="btn btn-danger btn-sm tombol-delete" href="<?= base_url(); ?>barang_keluar/hapusKeluar/<?= $bk->id_keluar; ?>">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php $index++; ?>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- End of Datatables -->
            </div>
        </div>
        <!-- End of Content Wrapper -->

        <!-- Modal -->
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
