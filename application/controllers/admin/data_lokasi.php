<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_lokasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data-masjid');
        $this->load->view('template_admin/footer');
    }

    public function edit()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit-data-lokasi');
        $this->load->view('template_admin/footer');
    }
}