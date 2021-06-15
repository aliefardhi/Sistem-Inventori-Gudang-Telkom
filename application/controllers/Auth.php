<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if( $this->form_validation->run() == false){
            $data['title'] = 'Selamat Datang!';
            $this->load->view('templates/header', $data);
            $this->load->view('login/login');
            $this->load->view('templates/footer');
        }
    }
}