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
        else{
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        
        if($user){
            if(md5($password) == $user['password']){
                $data = [
                    'username' => $user['username'],
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            }
            else{
                $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">Password salah!</div>');
                redirect('auth');
            }

        }
        else{
            $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau password salah!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('auth');
    }
}