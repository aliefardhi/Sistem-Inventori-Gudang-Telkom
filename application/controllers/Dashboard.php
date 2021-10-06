<?php

class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'petugas' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'dashboard';
		$this->load->model('M_barang', 'm_barang');
		$this->load->model('M_customer', 'm_customer');
		$this->load->model('M_supplier', 'm_supplier');
		$this->load->model('M_petugas', 'm_petugas');
		$this->load->model('M_pengeluaran', 'm_pengeluaran');
		$this->load->model('M_penerimaan', 'm_penerimaan');
		$this->load->model('M_pengguna', 'm_pengguna');
		$this->load->model('M_toko', 'm_toko');
		$this->load->model('M_detail_keluar', 'm_detail_keluar');
	}

	public function index(){
		$this->data['title'] = 'Halaman Dashboard';
		$this->data['jumlah_barang'] = $this->m_barang->jumlah();
		$this->data['jumlah_customer'] = $this->m_customer->jumlah();
		$this->data['jumlah_supplier'] = $this->m_supplier->jumlah();
		$this->data['total_stok_barang'] = $this->m_barang->total_stok_barang();
		$this->data['jumlah_pengeluaran'] = $this->m_pengeluaran->jumlah();
		$this->data['total_stok_keluar'] = $this->m_detail_keluar->total_stok_keluar();
		$this->data['jumlah_pengguna'] = $this->m_pengguna->jumlah();
		$this->data['bMasuk_bulanan'] = $this->m_barang->bMasuk_bulanan();
		$this->data['bKeluar_bulanan'] = $this->m_barang->bKeluar_bulanan();
		$this->load->view('dashboard', $this->data);
	}
}