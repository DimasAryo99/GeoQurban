<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required|trim');
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email has already registered!']);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]', [
            'matches' =>  'Password dont match!',
            'min_length' => 'Password too shot!'
        ]);

        if ($this->form_validation->run() == false)  
        {
            $this->load->view('auth/register');
        } 
        else {
         $data = ['nama_lengkap' => $this->input->post('nama_lengkap'),
                  'no_telp' => $this->input->post('no_telp'),
                  'email' => $this->input->post('email'),
                  'username' => $this->input->post('username'),
                  'password' => $this->input->post('password1'),
                ];
            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your account has been created</div>');
            redirect('login');
        }
    }
}