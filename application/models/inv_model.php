<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inv_model extends CI_Model 
{
    public function tampil_data(){
        $data = $this->db->query("SELECT * FROM b_masuk");
        return $data->result();
    }
}