<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('content/berita');
        $this->load->view('template/footer');
    }
}
