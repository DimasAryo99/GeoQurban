<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

    function __construct()
    {
		parent::__construct();
	
		if($this->session->userdata('email')=='')
        {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Belum Login</div>');
			redirect(base_url("login_admin"));
		}
	}
    
    public function index()
    {
        $this->load->view('template_admin_masjid/header');
        $this->load->view('template_admin_masjid/sidebar');
        $this->load->view('template_admin_masjid/dashboard');
        $this->load->view('template_admin_masjid/footer');
    }
}