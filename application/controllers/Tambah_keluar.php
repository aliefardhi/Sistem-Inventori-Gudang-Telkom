<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_keluar extends CI_Controller 
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('inv_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title'] = 'Tambah barang keluar';
        $this->load->view('templates/header', $data);
        $this->load->view('barang_keluar/tambah_keluar');
        $this->load->view('templates/footer');
    }

    public function tambahKeluar_aksi(){
        $whasal = $this->input->post('whasal');
        $snkeluar = $this->input->post('snkeluar');
        $mackeluar = $this->input->post('mackeluar');
        $tglkirim = $this->input->post('tglkirim');
        $whtujuan = $this->input->post('whtujuan');
        $jumlahkeluar = $this->input->post('jumlahkeluar');
        $jeniskeluar = $this->input->post('jeniskeluar');
        $tipekeluar = $this->input->post('tipekeluar');

        $countBkeluar = 1;
        $query = $this->db->query("select id_keluar from b_keluar");
        foreach($query->result() as $row){
            $countBkeluar++;
            if($countBkeluar == $row->id_keluar){
                $countBkeluar+=1;
            }
        }

        $dataKeluar = array(
            'id_keluar' => $countBkeluar,
            'wh_asal' => $whasal,
            'sn_keluar' => $snkeluar,
            'mac_keluar' => $mackeluar,
            'tgl_kirim' => $tglkirim,
            'wh_tujuan' => $whtujuan,
            'jumlah_keluar' => $jumlahkeluar,
            'jenis_keluar' => $jeniskeluar,
            'tipe_keluar' => $tipekeluar
        );

        $data['b_keluar'] = $this->inv_model->tampil_data_keluar();
        $this->form_validation->set_rules('whasal', 'WH Asal', 'required');
        $this->form_validation->set_rules('snkeluar', 'SN', 'required');
        $this->form_validation->set_rules('mackeluar', 'MAC', 'required');
        $this->form_validation->set_rules('tglkirim', 'Tanggal Kirim', 'required');
        $this->form_validation->set_rules('whtujuan', 'WH Tujuan', 'required');
        $this->form_validation->set_rules('jumlahkeluar', 'Jumlah Keluar', 'required');
        $this->form_validation->set_rules('jeniskeluar', 'Jenis', 'required');
        $this->form_validation->set_rules('tipekeluar', 'Tipe', 'required');

        if( $this->form_validation->run() == false ){
            $data['title'] = 'Tambah barang keluar';
            $this->load->view('templates/header', $data);
            $this->load->view('barang_keluar/tambah_keluar');
            $this->load->view('templates/footer');
        }
        else{
            $this->inv_model->input_data($dataKeluar,'b_keluar');
            $this->session->set_flashdata('input','ditambahkan');
            redirect('barang_keluar');
        }
    }

}