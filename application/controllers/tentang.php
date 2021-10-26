<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tentang extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_user/header1');
        $this->load->view('template_user/topbar1');
        $this->load->view('tentang/tentang_web');
        $this->load->view('template_user/footer1');
        //$this->load->view('template_user/home');
    }

    
}
