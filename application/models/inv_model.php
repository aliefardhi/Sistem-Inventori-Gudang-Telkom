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
}