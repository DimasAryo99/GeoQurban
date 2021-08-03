<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_admin extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login_admin');
        } else {
            //validasi succes
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin_masjid', ['email' => $email])->row_array();

        //jika usernya ada
        if ($admin) {
            //jika usernya aktif
            if ($admin['is_active'] == 1) {
                //cek password
                if ($password == $admin['password']) {
                    $data = [
                        'email' => $admin['email'],
                        'id_masjid' => $admin['id_masjid'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin_masjid/dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Password</div>');
                    redirect('login_admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email has not been activated</div>');
                redirect('login_admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered</div>');
            redirect('login_admin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Your have been logout</div>');
        redirect('login_admin');
    }
}
