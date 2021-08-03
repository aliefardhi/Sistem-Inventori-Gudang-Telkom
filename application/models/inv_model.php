<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inv_model extends CI_Model 
{
    public function tampil_data(){
        $data = $this->db->query("SELECT * FROM b_masuk");
        return $data->result();
    }

    public function tampil_data_keluar(){
        $data = $this->db->query("SELECT * FROM b_keluar");
        return $data->result();
    }

    public function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function getIdMasuk($idmasuk){
        return $this->db->get_where('b_masuk', ['id'=>$idmasuk])->row_array();
    }
    
    public function getIdKeluar($idkeluar){
        return $this->db->get_where('b_keluar', ['id_keluar' => $idkeluar])->row_array();
    }

    public function hapus($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function count_bMasuk(){
        $result = $this->db->query("SELECT * from b_masuk");
        return $result;
    }

    public function count_bKeluar(){
        $result = $this->db->query("SELECT * from b_keluar");
        return $result;
    }

    public function sum_bKeluar(){
        $result = $this->db->select('SUM(jumlah_keluar) as jumlah_keluar')->from('b_keluar')->get();
        return $result->row()->jumlah_keluar;
    }

    public function sum_bMasuk(){
        $result = $this->db->select('SUM(jumlah_masuk) as jumlah_masuk')->from('b_masuk')->get();
        return $result->row()->jumlah_masuk;
    }

    public function total_vendorBM(){
        $result = $this->db->select('vendor, count(vendor) as total_vendor')->from('b_masuk')->group_by('vendor')->get();
        return $result->result();
    }

    public function count_vendor_monthBM(){
        $result = $this->db->select('COUNT(*) as count_vendor, monthname(tgl_masuk) as month')->from('b_masuk')->where('YEAR(tgl_masuk) > 2020')->group_by('month(tgl_masuk)')->get();
        return $result->result();
    }

    public function total_jenisKL(){
        $result = $this->db->select('jenis_keluar, count(jenis_keluar) as count_jenis')->from('b_keluar')->group_by('jenis_keluar')->get();
        return $result->result();
    }

    public function total_KL_month(){
        $result = $this->db->select('SUM(jumlah_keluar) as jumlah_keluar, monthname(tgl_kirim) as tgl_kirim')->from('b_keluar')->where('year(tgl_kirim) > 2020')->group_by('month(tgl_kirim)')->get();
        return $result->result();
    }

    public function total_BM_month(){
        $result = $this->db->select('SUM(jumlah_masuk) as jumlah_masuk, monthname(tgl_masuk) as tgl_masuk')->from('b_masuk')->where('year(tgl_masuk) > 2020')->group_by('month(tgl_masuk)')->get();
        return $result->result();
    }
}