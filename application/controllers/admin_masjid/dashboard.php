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
        $data['masjid2'] = $this->lokasi_model->tampil_datadmin()->row_array();
        $this->load->view('template_admin_masjid/header',$data);
        $this->load->view('template_admin_masjid/sidebar');
        $this->load->view('template_admin_masjid/dashboard');
        $this->load->view('template_admin_masjid/footer');
    }

    public function edit_profil()
    {
        //$where = array('id_admin_masjid' => $admin_masjid);
        $data['m'] = $this->db->get_where('admin_masjid',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['masjid2'] = $this->lokasi_model->tampil_datadmin()->row_array();
        $this->load->view('template_admin_masjid/header',$data);
        $this->load->view('template_admin_masjid/sidebar');
        $this->load->view('admin_masjid/edit_profil',$data);
        $this->load->view('template_admin_masjid/footer');
    }

    public function update_profil()
    {        
        $email            = $this->input->post('email');
        $nama_admin      = $this->input->post('nama_lengkap');
        $username         = $this->input->post('username');
        $no_telp          = $this->input->post('no_telp');
        
        $where = [
            'email'         => $email,
        ];

        $data = [
            'nama_admin'   => $nama_admin,
            'username'      => $username,
            'no_telp'       => $no_telp
        ];
        $this->m_admin->update_profil($where, $data, 'admin_masjid');
        redirect('admin_masjid/dashboard/index');
    }
}
