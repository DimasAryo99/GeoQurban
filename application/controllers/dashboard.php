<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');

        
    }
    public function index()
    {
        //konfigurasi google maps
        $config['center'] ='-6.300641, 106.814095';
        $config['zoom'] ='11';
        $this->googlemaps->initialize($config);
        // peta
        $peta=$this->model_data->tampil_data()->result();
        foreach($peta as $key =>$value)
        {
            $marker =array();
            $marker ['position']="$value->latitude,$value->longitude";
            $marker ['animation']="BOUNCE";
            $this->googlemaps->add_marker($marker);
        }

        $data['map'] = $this->googlemaps->create_map();
        $data['user']=$this->model_data->tampil_data()->result();

        $this->load->view('template_user/header',$data);
        $this->load->view('template_user/topbar',$data);
        $this->load->view('template_user/sidebar',$data);
        $this->load->view('template_user/home',$data);
    }

    /*public function read($id)
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
    }*/   
}
