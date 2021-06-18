<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_keluar extends CI_Controller 
{
    public function index(){
        $data['title'] = 'Tambah barang keluar';
        $this->load->view('templates/header', $data);
        $this->load->view('barang_keluar/tambah_keluar');
        $this->load->view('templates/footer');
    }

}