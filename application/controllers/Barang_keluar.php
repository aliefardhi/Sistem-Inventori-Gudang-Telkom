<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('inv_model');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['b_keluar'] = $this->inv_model->tampil_data_keluar();
        $data['title'] = 'Daftar barang keluar';
        $this->load->view('templates/header', $data);
        $this->load->view('barang_keluar/barang_keluar', $data);
        $this->load->view('templates/footer');
    }
    public function editKeluar($idkeluar){
        $data['title'] = 'Edit Barang Keluar';
        $data['b_keluar'] = $this->inv_model->getIdKeluar($idkeluar);
        $this->load->view('templates/header', $data);
        $this->load->view('edit/editkeluar', $data);
        $this->load->view('templates/footer');
    }
    public function hapusKeluar($idkeluar){
        $where = array('id_keluar' => $idkeluar);
        $this->inv_model->hapus($where, 'b_keluar');
        $this->session->set_flashdata('input', 'dihapus');
        redirect('barang_keluar');
    }

}