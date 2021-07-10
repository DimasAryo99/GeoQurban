<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function index()
    {
		$data['user'] = $this->model_data->tampil_data()->result();
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('template_user/home');
    }
}
