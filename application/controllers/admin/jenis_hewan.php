<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenis_hewan extends CI_Controller
{
    public function index()
    {
        $data['jenis'] = $this->m_hewan_model->tampil_datahewan()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
        $this->load->view("admin/jenis-hewan", $data);
    }

    public function tambah_hewan()
    {
        $jenis_hewan = $this->input->post('jenis_hewan');

            $data = [
                'jenis_hewan'      => $jenis_hewan,
               
            ];
    
            $this->m_hewan_model->tambah_hewan($data, 'data_hewan');
        
       

     
        redirect('admin/jenis_hewan/index');
    }

    public function delete($id)
    {
        $where = array('id_hewan' => $id);
        $this->lokasi_model->hapus_lokasi($where, 'data_hewan');
        redirect('admin/jenis-hewan');
    }

    public function tampilan_edit_hewan($id)
    {
        $where = array('id_hewan' => $id);
        $data['hewan'] = $this->m_hewan_model->get_hewan_by_id($where, 'data_hewan')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
        $this->load->view('admin/edit-data-hewan', $data);
    }

    public function update_hewan()
    {
        $id = $this->input->post('id_hewan');
        $jenis_hewan = $this->input->post('jenis_hewan');

        $data = [
            'jenis_hewan'      => $jenis_hewan,
        ];

        $where = [
            'id_hewan'     => $id
        ];

        $this->m_hewan_model->update_hewan($where, $data, "data_hewan");
        redirect('admin/jenis_hewan/index');
    }
}
