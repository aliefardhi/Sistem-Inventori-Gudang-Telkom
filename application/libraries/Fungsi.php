<?php 

Class Fungsi{
    protected $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

    public function count_itemMasuk(){
        $this->ci->load->model('inv_model');
        return $this->ci->inv_model->count_bMasuk()->num_rows();
    }

    public function count_itemKeluar(){
        $this->ci->load->model('inv_model');
        return $this->ci->inv_model->count_bKeluar()->num_rows();
    }

    public function total_bKeluar(){
        $this->ci->load->model('inv_model');
        return $this->ci->inv_model->sum_bKeluar()->result_array();
    }
}