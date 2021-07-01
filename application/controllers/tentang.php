<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tentang extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar');
        $this->load->view('template_user/home');
        $this->load->view('tentang/tentang_web');
    }

    
}
