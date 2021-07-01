<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_masuk extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('inv_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title'] = 'Tambah barang masuk';
        $this->load->view('templates/header', $data);
        $this->load->view('barang_masuk/tambah_masuk');
        $this->load->view('templates/footer');
    }

    public function tambah_aksi(){
        $asal = $this->input->post('whmasuk');
        $vendor = $this->input->post('vendor');
        $sn = $this->input->post('sn');
        $mac = $this->input->post('mac');
        $tglmasuk = $this->input->post('tglmasuk');
        $whpenerima = $this->input->post('whpenerima');
        $jenis = $this->input->post('jenis');
        $tipe = $this->input->post('tipe');

        $countBmasuk = 1;
        $query = $this->db->query("select id from b_masuk");
        foreach($query->result() as $row){
            $countBmasuk++;
            if($countBmasuk == $row->id){
                $countBmasuk+=1;
            }
        }

        $dataMasuk = array(
            'id' => $countBmasuk,
            'wh_asal_masuk' => $asal,
            'vendor' => $vendor,
            'sn' => $sn,
            'mac' => $mac,
            'tgl_masuk' => $tglmasuk,
            'wh_penerima' => $whpenerima,
            'jenis' => $jenis,
            'tipe' => $tipe
        );

        $data['b_masuk'] = $this->inv_model->tampil_data();
        $this->form_validation->set_rules('whmasuk', 'WH Asal', 'required');
        $this->form_validation->set_rules('vendor', 'Vendor', 'required');
        $this->form_validation->set_rules('sn', 'SN', 'required');
        $this->form_validation->set_rules('mac', 'MAC', 'required');
        $this->form_validation->set_rules('tglmasuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('whpenerima', 'WH Penerima', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        $this->form_validation->set_rules('tipe', 'tipe', 'required');

        if( $this->form_validation->run() == false ){
            $data['title'] = 'Tambah barang masuk';
            $this->load->view('templates/header', $data);
            $this->load->view('barang_masuk/tambah_masuk');
            $this->load->view('templates/footer');
        }
        else{
            $this->inv_model->input_data($dataMasuk,'b_masuk');
            $this->session->set_flashdata('input','ditambahkan');
            redirect('barang_masuk');
        }
    }

}