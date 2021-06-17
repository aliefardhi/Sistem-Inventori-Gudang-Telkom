<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('inv_model');
    }
    public function index(){
        $data['b_keluar'] = $this->inv_model->tampil_data_keluar();
        $data['title'] = 'Daftar barang keluar';
        $this->load->view('templates/header', $data);
        $this->load->view('barang_keluar/barang_keluar', $data);
        $this->load->view('templates/footer');
    }

}