<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar extends CI_Controller 
{
    public function index(){
        // $data['user'] = $this->db->get_where('user',['username' => $this->session->userdata('username')])->row_array();
        // echo "Selamat datang " . $data['user']['username'];
        $data['title'] = 'Daftar barang keluar';
        $this->load->view('templates/header', $data);
        $this->load->view('barang_keluar/barang_keluar');
        $this->load->view('templates/footer');
    }

}