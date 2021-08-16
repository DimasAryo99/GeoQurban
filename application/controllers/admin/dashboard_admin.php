<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard_admin extends CI_Controller
{

    function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
    
    public function index()
    {
        $data['admin'] = $this->m_admin->tampil_data_admin()->row_array();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/dashboard');
        $this->load->view('template_admin/footer');
    }
}