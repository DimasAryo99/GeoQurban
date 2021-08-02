<?php
defined('BASEPATH') or exit('No direct script access allowed');

class masjid extends CI_Controller
{
    public function index()
    {
        $data['masjid'] = $this->lokasi_model->tampil_data()->result();
        $this->load->view('template_user/header1');
        $this->load->view('template_user/topbar1');
        $this->load->view('template_user/footer1');
        //$this->load->view('template_user/home');
        $this->load->view('masjid/masjid', $data);
    }

    /*public function detail($id_masjid)
    {
        $data['masjid1'] = $this->model_lokasi->tampil_lokasi($id_masjid);
        $data['masjid1'] = $this->model_lokasi->tampil_tabel()-> result();
        
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar');
        $this->load->view('template_user/home');
        $this->load->view('masjid/detail_masjid',$data);
    }*/

    public function details($id_masjid)
    {
        $data['data_masjid'] = $this->model_lokasi->tampil_data1($id_masjid);
        $data['data_masjid1'] = $this->model_lokasi->tampil_data2($id_masjid);
        $this->load->view('template_user/header1');
        $this->load->view('template_user/topbar1');
        $this->load->view('template_user/footer1');
        //$this->load->view('template_user/home');
        $this->load->view('masjid/detail_masjid', $data);
        //$data['barang'] = $this->model_barang->detail_brg($id_barang);
    }


    public function galeri()
    {
        $this->load->view('template_user/header');
        $this->load->view('template_user/topbar');
        $this->load->view('template_user/home');
        $this->load->view('masjid/galeri_masjid');
    }
}
