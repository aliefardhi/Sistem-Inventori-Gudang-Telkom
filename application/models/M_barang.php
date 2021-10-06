<?php

class M_barang extends CI_Model{
	protected $_table = 'barang';

	public function lihat(){
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function jumlah(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	public function total_stok_barang(){
		$query = $this->db->query('SELECT SUM(stok) as total_stok from barang');
		return $query->row()->total_stok;
		// $result = $this->db->select('SUM(jumlah_masuk) as jumlah_masuk')->from('b_masuk')->get();
  //       return $result->row()->jumlah_masuk;
	}

	public function lihat_stok(){
		$query = $this->db->get_where($this->_table, 'stok > 1');
		// $query = $this->db->query('SELECT DISTINCT nama_barang FROM barang where stok > 1');
		return $query->result();
	}

	public function lihat_id($kode_barang){
		$query = $this->db->get_where($this->_table, ['kode_barang' => $kode_barang]);
		return $query->row();
	}

	public function lihat_nama_barang($nama_barang){
		$query = $this->db->select('*');
		$query = $this->db->where(['nama_barang' => $nama_barang]);
		$query = $this->db->get($this->_table);
		return $query->row();
	}

	public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}

	public function plus_stok($stok, $nama_barang){
		$query = $this->db->set('stok', 'stok+' . $stok, false);
		$query = $this->db->where('nama_barang', $nama_barang);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function min_stok($stok, $kode_barang){
		$query = $this->db->set('stok', 'stok-' . $stok, false);
		$query = $this->db->where('kode_barang', $kode_barang);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function ubah($data, $kode_barang){
		$query = $this->db->set($data);
		$query = $this->db->where(['kode_barang' => $kode_barang]);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function hapus($kode_barang){
		return $this->db->delete($this->_table, ['kode_barang' => $kode_barang]);
	}

	public function bMasuk_bulanan(){
		$query = $this->db->select('SUM(stok) as jumlah_masuk, monthname(tgl_masuk) as tgl_masuk')->from('barang')->where('year(tgl_masuk) > 2020')->group_by('month(tgl_masuk)')->get();
        return $query->result();
	}

	public function bKeluar_bulanan(){
		$query = $this->db->select('SUM(jumlah_keluar) as jumlah_keluar, monthname(tgl_keluar) as tgl_keluar')->from('pengeluaran')->where('year(tgl_keluar) > 2020')->group_by('month(tgl_keluar)')->get();
		return $query->result();
	}
}