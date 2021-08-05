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

    public function edit_profil()
    {
        // $where = array('id_admin_masjid' => $admin_masjid);
        // $data['admin'] = $this->m_admin->edit_profil($where, 'admin_masjid')->result();
        $this->load->view('template_admin_masjid/header');
        $this->load->view('template_admin_masjid/sidebar');
        $this->load->view('admin_masjid/edit_profil');
        $this->load->view('template_admin_masjid/footer');
    }

    public function update_profil()
    {
        $id_admin_masjid   = $this->input->post('id_masjid');
        $nama_admin      = $this->input->post('nama_admin');
        $email            = $this->input->post('email');
        $username         = $this->input->post('username');
        $no_telp          = $this->input->post('no_telp');
        
        $data = [
            'nama_masjid'   => $nama_admin,
            'email'         => $email,
            'username'      => $username,
            'no_telp'       => $no_telp
        ];

        $where = [
            'id_admin_masjid'     => $id_admin_masjid,
        ];

        $this->m_admin->update_profil($where, $data, 'admin_masjid');
        redirect('admin_masjid/edit_profil/index');
    }
}
