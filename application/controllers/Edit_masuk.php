<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_masuk extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('inv_model');
    }

    public function index(){
        $data['b_masuk'] = $this->inv_model->tampil_data();
        $data['title'] = 'Edit barang masuk';
        $this->load->view('templates/header', $data);
        $this->load->view('barang_masuk/edit_masuk', $data);
        $this->load->view('templates/footer');
    }

}