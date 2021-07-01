<?php
defined('BASEPATH') or exit('No direct script access allowed');

class masjid extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar');
        $this->load->view('template_user/home');
        $this->load->view('masjid/masjid');
    }
    
    public function detail()
    {
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar');
        $this->load->view('template_user/home');
        $this->load->view('masjid/detail_masjid');
    }

    public function galeri()
    {
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar');
        $this->load->view('template_user/home');
        $this->load->view('masjid/galeri_masjid');
    }

    
}
