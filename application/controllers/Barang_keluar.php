<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('inv_model');
        $this->load->helper('url');
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
        $this->load->view('barang_keluar/edit_keluar', $data);
        $this->load->view('templates/footer');
    }
    public function aksi_edit($idkeluar){
        $data['title'] = 'Edit Barang Keluar';
        $data['b_keluar'] = $this->inv_model->getIdKeluar($idkeluar);

        $idkeluar = $this->input->post('idkeluar');
        $whasal = $this->input->post('whasal');
        $snkeluar = $this->input->post('snkeluar');
        $tglkirim = $this->input->post('tglkirim');
        $whtujuan = $this->input->post('whtujuan');
        $jumlahkeluar = $this->input->post('jumlahkeluar');
        $jeniskeluar = $this->input->post('jeniskeluar');
        $tipekeluar = $this->input->post('tipekeluar');

        $dataKeluar = array(
            'id_keluar' => $idkeluar,
            'wh_asal' => $whasal,
            'sn_keluar' => $snkeluar,
            'tgl_kirim' => $tglkirim,
            'wh_tujuan' => $whtujuan,
            'jumlah_keluar' => $jumlahkeluar,
            'jenis_keluar' => $jeniskeluar,
            'tipe_keluar' => $tipekeluar
        );

        $where = array(
            'id_keluar' => $idkeluar
        );

        $this->form_validation->set_rules('whasal', 'WH Asal', 'required');
        $this->form_validation->set_rules('snkeluar', 'SN', 'required');
        $this->form_validation->set_rules('mackeluar', 'MAC', 'required');
        $this->form_validation->set_rules('tglkirim', 'Tanggal Kirim', 'required');
        $this->form_validation->set_rules('whtujuan', 'WH Penerima', 'required');
        $this->form_validation->set_rules('jumlahkeluar', 'Jumlah Keluar', 'required');
        $this->form_validation->set_rules('jeniskeluar', 'Jenis', 'required');
        $this->form_validation->set_rules('tipekeluar', 'Tipe', 'required');

        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('barang_keluar/edit_keluar', $data);
            $this->load->view('templates/footer');
        }
        else{
            $this->inv_model->edit($where,$dataKeluar,'b_keluar');
            $this->session->set_flashdata('input','diubah');
            redirect('barang_keluar');
        }
    }
    public function hapusKeluar($idkeluar){
        $where = array('id_keluar' => $idkeluar);
        $this->inv_model->hapus($where, 'b_keluar');
        $this->session->set_flashdata('input', 'dihapus');
        redirect('barang_keluar');
    }

}