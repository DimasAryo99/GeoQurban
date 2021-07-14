<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function index()
    {
		$data['user'] = $this->model_data->tampil_data()->result();
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar');
        $this->load->view('template_user/sidebar',$data);
        $this->load->view('template_user/home',$data);
    }

    public function read($id)
    {
        if(!$this->input->is_ajax_request())
        {
            $id = $this->input->post('id_masjid');
            if($this->lokasi_model->read($id)->null_rows()!=null)
            {
                $status='succes';
                $msg = $this->lokasi_model->read($id)->result();
            }
            else
            {
                $status='error';
                $msg = 'data masjid tidak ditemukan';
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>$status,'msg'=>$msg)));
    }   
}
