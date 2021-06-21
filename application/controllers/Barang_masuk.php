<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_masuk extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('inv_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index(){
        $data['b_masuk'] = $this->inv_model->tampil_data();
        $data['title'] = 'Daftar barang masuk';
        $this->load->view('templates/header', $data);
        $this->load->view('barang_masuk/barang_masuk', $data);
        $this->load->view('templates/footer');
    }

    public function editMasuk($idmasuk){
        $data['title'] = 'Edit Barang Masuk';
        // $data['b_masuk'] = $this->inv_model->tampil_data();
        $data['b_masuk'] = $this->inv_model->getIdMasuk($idmasuk);
        $this->load->view('templates/header', $data);
        $this->load->view('edit/editmasuk', $data);
        $this->load->view('templates/footer');
    }

    public function hapusMasuk($idmasuk){
        $where = array('id' =>$idmasuk );
        $this->inv_model->hapus($where, 'b_masuk');
        $this->session->set_flashdata('input', 'dihapus');
        redirect('barang_masuk');
    }
}