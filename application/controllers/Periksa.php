<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periksa extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('content/periksa');
        $this->load->view('template/footer');
    }
}
