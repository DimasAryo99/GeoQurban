<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenis_hewan extends CI_Controller
{
    public function index()
    {
        //form validation
        $this->form_validation->set_rules('jenis','Jenis Hewan','required|trim');

        if($this->form_validation->run()==false)
        {
        $data['jenis']=$this->m_hewan_model->tampil_datahewan()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
        $this->load->view("admin/jenis-hewan",$data);
        }
        else
        {
            //insert database
            $data= [
                'jenis_hewan'     => $this->input->post('jenis')
            ];
            $this->db->insert($data,'data_hewan');
            redirect('jenis_hewan/index');
        }
    }

    public function delete_jenis($id)
    {
        $where = array('id_hewan' => $id);
        $this->m_hewan_model->hapus_jenis($where, 'data_hewan');
        redirect('jenis_hewan/index');
    }

}
