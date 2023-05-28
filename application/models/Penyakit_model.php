<?php

class Penyakit_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->db->select('*')->from('tb_penyakit');
        $query = $this->db->get();
        return $query;
    }
}
