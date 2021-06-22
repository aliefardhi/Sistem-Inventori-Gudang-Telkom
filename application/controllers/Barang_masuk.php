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
        $judul['title'] = 'Edit Barang Masuk';
        $data['b_masuk'] = $this->inv_model->getIdMasuk($idmasuk);
        $this->load->view('templates/header', $judul);
        $this->load->view('barang_masuk/edit_masuk', $data);
        $this->load->view('templates/footer');
    }

    public function aksi_edit($idmasuk){
        $data['b_masuk'] = $this->inv_model->getIdMasuk($idmasuk);

        $id_masuk = $this->input->post('idmasuk');
        $vendor = $this->input->post('vendor');
        $sn = $this->input->post('sn');
        $mac = $this->input->post('mac');
        $tanggalmasuk = $this->input->post('tanggalmasuk');
        $whpenerima = $this->input->post('whpenerima');
        $jenis = $this->input->post('jenis');
        $tipe = $this->input->post('tipe');

        $dataMasuk = array(
            'id' => $id_masuk,
            'vendor' => $vendor,
            'sn' => $sn,
            'mac' => $mac,
            'tgl_masuk' => $tanggalmasuk,
            'wh_penerima' => $whpenerima,
            'jenis' => $jenis,
            'tipe' => $tipe,
        );

        $where = array(
            'id' => $id_masuk,
        );

        $this->form_validation->set_rules('vendor', 'Vendor', 'required');
        $this->form_validation->set_rules('sn', 'SN', 'required');
        $this->form_validation->set_rules('mac', 'MAC', 'required');
        $this->form_validation->set_rules('tanggalmasuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('whpenerima', 'WH Penerima', 'required');
        $this->form_validation->set_rules('jenis', 'jenis', 'required');
        $this->form_validation->set_rules('tipe', 'tipe', 'required');

        if( $this->form_validation->run() == FALSE ){
            $this->load->view('templates/header');
            $this->load->view('barang_masuk/edit_masuk', $data);
            $this->load->view('templates/footer');
        }
        else{
            $this->inv_model->edit($where,$dataMasuk,'b_masuk');
            $this->session->set_flashdata('input','diubah');
            redirect('barang_masuk');
        }
    }

    public function hapusMasuk($idmasuk){
        $where = array('id' =>$idmasuk );
        $this->inv_model->hapus($where, 'b_masuk');
        $this->session->set_flashdata('input', 'dihapus');
        redirect('barang_masuk');
    }
}