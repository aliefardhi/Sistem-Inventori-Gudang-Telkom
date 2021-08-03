<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('inv_model');
        $this->load->library('fungsi');
    }
    
    public function index(){
        $data['title'] = 'Dashboard';
        $data['b_masuk'] = $this->inv_model->count_bMasuk();
        $data['jumlah_keluar'] = $this->inv_model->sum_bKeluar();
        $data['hasil'] = $this->inv_model->total_vendorBM();
        $data['dataBM'] = $this->inv_model->total_BM_month();
        $data['jenis'] = $this->inv_model->total_jenisKL();
        $data['dataKL'] = $this->inv_model->total_KL_month();
        $data['jumlah_masuk'] = $this->inv_model->sum_bMasuk();

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/dashboard', $data);
        $this->load->view('templates/footer');
    }

} 