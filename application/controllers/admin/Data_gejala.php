<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_gejala extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'm_login');
        $this->load->model('Gejala_model', 'm_gejala');
        if (!$this->m_login->CurrentUser()) {
            $this->session->set_flashdata('msg', "Pastikan anda sudah login akun!.");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('administrator/login');
        }
    }

    public function index()
    {
        $data = [
            'data' => $this->m_gejala->index()
        ];
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/content/data_gejala', $data);
        $this->load->view('admin/partials/footer', $data);
    }
}
