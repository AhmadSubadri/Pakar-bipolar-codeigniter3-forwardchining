<?php

class Gejala_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->db->select('*')->from('tb_gejala');
        $query = $this->db->get();
        return $query;
    }
}
