<?php

class Rule_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->db->select('*')->from('riwayat_jawaban')->join('tb_user', 'tb_user.id = riwayat_jawaban.id_user');
        $query = $this->db->get();
        return $query;
    }
}