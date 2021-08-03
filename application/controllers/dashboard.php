<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    //leaflate
    public function index()
    {
        $this->load->view('template_peta/v_header');
        $this->load->view('template_peta/v_head');
        $this->load->view('template_peta/v_geo');
        $this->load->view('template_peta/v_footer');
    }

    /*
    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');

    }
    public function index()
    {
        //konfigurasi google maps
        $config['center'] ='-6.300641, 106.814095';
        $config['zoom'] ='10';
        $this->googlemaps->initialize($config);
        // peta
        $peta=$this->model_data->tampil_data3()->result();
        foreach($peta as $value)
        {
            $marker =array();
            $marker ['position']="$value->latitude,$value->longitude";
            $marker ['animation']="DROP";
            $marker ['infowindow_content'] = '<div class="media" style="maxWidth:100px;">';
            $marker ['infowindow_content'] = '<div class="media-body">';
            
            // $marker ['infowindow_content'] = '<div class="media-body" alt="Responsive image" width="100" height="25">';
            // $marker ['infowindow_content'] .= '<a class="img-fluid img-thumbnail">';
            $marker ['infowindow_content'] .= "<img class='ui top aligned small image' src='foto_masjid/{{ $value->foto }}' >";
            // $marker ['infowindow_content'] .= '</a>';
            // $marker ['infowindow_content'] .= " >";
            // $marker ['infowindow_content'] .= '</div>';
            $marker ['infowindow_content'] .= '<h6>' .$value->nama_masjid.'</h6>';
            $marker ['infowindow_content'] .= '<br>';
            $marker ['infowindow_content'] .= '<h7>' .$value->alamat.'</h7>';
            $marker ['infowindow_content'] .= '<p></p>';
            $marker ['infowindow_content'] .= '<h7>' .$value->no_telp.'</h7>';
            // $marker ['infowindow_content'] .= '';
            $marker ['infowindow_content'] .= '<br>';
            $marker ['infowindow_content'] .= '<h6> Hewan Qurban </h6>';
            $marker ['infowindow_content'] .= '<br>';
            $marker ['infowindow_content'] .= '<h7> 1. Sapi   : 9 </h7>';
            $marker ['infowindow_content'] .= '<br>';
            $marker ['infowindow_content'] .= '<h7> 2. Kambing: 16 </h7>';
            $marker ['infowindow_content'] .= '<br>';
            $marker ['infowindow_content'] .= '<h7> 3. Domba  : 5 </h7>';
            $marker ['infowindow_content'] .= '<br>';
            // $marker ['infowindow_content'] .= '<p></p>';
            // $marker ['infowindow_content'] .= '<h7>' . $value->jenis_hewan. '</h7>';
            $marker ['infowindow_content'] .= '<p>';
            $marker ['infowindow_content'] .= "<a href='<?= base_url('masjid/details/' . $value->id_masjid) ?>Detail</a>";
            $marker ['infowindow_content'] .= '</p>';
            $marker ['infowindow_content'] .= '</div>';
            $marker ['infowindow_content'] .= '</div>';
            $this->googlemaps->add_marker($marker);
        }

        $data['map']  = $this->googlemaps->create_map();
        $data['user'] = $this->model_data->tampil_data3()->result();

        //$this->load->view('template_user/header',$data);
        //$this->load->view('template_user/topbar',$data);
        //$this->load->view('template_user/sidebar',$data);
        $this->load->view('template_user/home1',$data);

        // load view yang baru
        // $this->load->view('template_peta/v_head');
        // $this->load->view('template_peta/v_header');
        // $this->load->view('template_peta/v_footer');
        // $this->load->view('template_peta/v_geo');
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
