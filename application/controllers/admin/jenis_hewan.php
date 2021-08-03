<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenis_hewan extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
        $this->load->view("admin/jenis-hewan");
    }
}
