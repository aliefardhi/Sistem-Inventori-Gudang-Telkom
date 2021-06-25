<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

    public function export(){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Vendor');
        $sheet->setCellValue('C1', 'SN');
        $sheet->setCellValue('D1', 'MAC');
        $sheet->setCellValue('E1', 'Tanggal Masuk');
        $sheet->setCellValue('F1', 'WH Penerima');
        $sheet->setCellValue('G1', 'Jenis');
        $sheet->setCellValue('H1', 'Tipe');

        $bMasuk = $this->inv_model->tampil_data();

        $no = 1;
        $x = 2;
        foreach($bMasuk as $row){
            $sheet->setCellValue('A'.$x, $no++);
            $sheet->setCellValue('B'.$x, $row->vendor);
            $sheet->setCellValue('C'.$x, $row->sn);
            $sheet->setCellValue('D'.$x, $row->mac);
            $sheet->setCellValue('E'.$x, $row->tgl_masuk);
            $sheet->setCellValue('F'.$x, $row->wh_penerima);
            $sheet->setCellValue('G'.$x, $row->jenis);
            $sheet->setCellValue('H'.$x, $row->tipe);
            $x++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'Daftar Barang Masuk';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');

    }
}