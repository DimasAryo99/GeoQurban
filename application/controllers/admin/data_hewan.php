<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_hewan extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
        $this->load->view('admin/data-hewan');
    }
	
	public function tambahhewan()
    {
        $jenis_hewan = $this->input->post('jenis_hewan');
        $jumlah_hewan = $this->input->post('jumlah_hewan');
        $foto = $_FILES['foto']['name'];
        if ($foto) 
        {
            $config['upload_path'] = './uploads';
            $config['allowed_type'] = 'jpg|jpeg|png';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) 
            {
                $foto = $this->upload->data('file_name');
            } 
            else 
            {
                echo $this->upload->display_errors();
            }
        }

        $data = [
            'jenis_hewan'      => $jenis_hewan,
            'jumlah_hewan'    => $jumlah_hewan,
            'foto'        => $foto,
        ];

        $this->m_hewan_model->tambah_hewan($data, 'data_hewan');
        redirect('admin/data_hewan/index');
    }

    public function edithewan()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit-data-hewan', $data);
        $this->load->view('template_admin/footer');
    }

   //mothod buat CRUD 
   <?php

   defined('BASEPATH') OR exit('No direct script access allowed');
   
   class Products extends CI_Controller
   {
       public function __construct()
       {
           parent::__construct();
           $this->load->model("hewan_model");
           $this->load->library('form_validation');
       }
   
       public function index()
       {
           $data["products"] = $this->hewan_model->getAll();
           $this->load->view("admin/data-hewan", $data);
       }
   
       public function add()
       {
           $hewan = $this->hewan_model;
           $validation = $this->form_validation;
           $validation->set_rules($hewan->rules());
   
           if ($validation->run()) {
               $hewan->save();
               $this->session->set_flashdata('success', 'Berhasil disimpan');
           }
   
           $this->load->view("admin/data-hewan/new_form");
       }
   
       public function edit($id = null)
       {
           if (!isset($id)) redirect('admin');
          
           $hewan = $this->hewan_model;
           $validation = $this->form_validation;
           $validation->set_rules($hewan->rules());
   
           if ($validation->run()) {
               $hewan->update();
               $this->session->set_flashdata('success', 'Berhasil disimpan');
           }
   
           $data["data_hewan"] = $hewan->getById($id);
           if (!$data["data_hewan"]) show_404();
           
           $this->load->view("admin/data-hewan/edit_form", $data);
       }
   
       public function delete($id=null)
       {
           if (!isset($id)) show_404();
           
           if ($this->product_model->delete($id)) {
               redirect(site_url('admin'));
           }
       }
   }
        

}
}
