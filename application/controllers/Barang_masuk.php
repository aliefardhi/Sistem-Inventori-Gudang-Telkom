<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_masuk extends CI_Controller 
{
    public function index()
    {
        $this->load->view('barang_masuk/index');
    }

}