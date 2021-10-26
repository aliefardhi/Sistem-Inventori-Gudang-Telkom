<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #DB1C1C;">
			<!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
			</a> -->
			<li class="nav-item logosidebar my-4">
				<div class="sidebar-brand-icon">
                	<img src="<?= base_url('sb-admin/img/circle_logo.png') ?>" alt="logo" width="125" height="125">
				</div>
            </li> 
			<hr class="sidebar-divider my-0">

			<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('dashboard') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<hr class="sidebar-divider">

			<div class="sidebar-heading">
				Data Barang
			</div>

			<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('barang') ?>">
					<i class="fas fa-fw fa-box"></i>
					<span>Barang Masuk</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'pengeluaran' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('pengeluaran') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Barang Keluar</span></a>
			</li>

			<li class="nav-item <?= $aktif == 'customer' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('customer') ?>">
					<i class="fas fa-fw fa-warehouse"></i>
					<span>Data Warehouse Tujuan</span></a>
			</li>

			<!-- <li class="nav-item <?= $aktif == 'supplier' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('supplier') ?>">
					<i class="fas fa-fw fa-user"></i>
					<span>Master Supplier</span></a>
			</li> -->

			<!-- <li class="nav-item <?= $aktif == 'petugas' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('petugas') ?>">
					<i class="fas fa-fw fa-users"></i>
					<span>Master Petugas</span></a>
			</li> -->

			<!-- Divider -->
			<hr class="sidebar-divider">
	
			<!-- <div class="sidebar-heading">
				Transaksi
			</div> -->

			<!-- <li class="nav-item <?= $aktif == 'penerimaan' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('penerimaan') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Transaksi Penerimaan</span></a>
			</li> -->


			<!-- <hr class="sidebar-divider"> -->
			<?php if ($this->session->login['role'] == 'admin'): ?>
				<!-- Heading -->
				<div class="sidebar-heading">
					Pengguna
				</div>

				<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('pengguna') ?>">
						<i class="fas fa-fw fa-user"></i>
						<span>Pengaturan Profil</span></a>
				</li>

				<!-- <li class="nav-item <?= $aktif == 'toko' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('toko') ?>">
						<i class="fas fa-fw fa-building"></i>
						<span>Profil Toko</span></a>
				</li> -->
				<!-- Divider -->
			<?php endif; ?>
			<li class="nav-item">
                <a class="nav-link" href="#modal-Logout" data-toggle="modal" onclick="$('#modal-Logout #form-Logout ').attr('action', '<?= base_url('logout')?>')">
                    <i style="" class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                </a>
            </li>
			<!-- <hr class="sidebar-divider d-none d-md-block"> -->
			<hr class="sidebar-divider ">

			<!-- Logout -->
			

			<!-- Sidebar Toggler (Sidebar) -->
			<!-- <div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div> -->
		</ul>

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