<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_hewan extends CI_Controller
{
    public function index()
    {
        $data["coba"] = "";
        $data["masjid"] = $this->lokasi_model->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
        $this->load->view("admin/data-hewan", $data);

        // $data["jumalah"] = $this->hewan_masjid->getAll();
        // $this->load->view("admin/data-hewan", $data1);

        // $this->load->view('admin/data-hewan');
        // $data['title'] = "Cetak laporan berdasarkan filter data di PHP Codeigniter";
        // $data['masjid'] = $this->db->get('hewan_masjid')->result();
        // $this->load->view('admin/data-hewan', $data);  
    }

    
  

    //mothod buat CRUD 



    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_hewan_model");
        $this->load->library('form_validation');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    // public function index()
    //    {
    //        $data["hewan"] = $this->m_hewan_model->getAll();
    //        $this->load->view("admin/data-hewan", $data);
    //    }

    // public function add()
    //    {
    //        $hewan = $this->hewan_model;
    //        $validation = $this->form_validation;
    //        $validation->set_rules($hewan->rules());

    //        if ($validation->run()) {
    //            $hewan->save();
    //            $this->session->set_flashdata('success', 'Berhasil disimpan');
    //        }

    //        $this->load->view("admin/data-hewan/new_form");
    //    }



    public function tampilan_edit_hewan_masjid($id)
    {
        $where = array('id_hewan_masjid' => $id);
        $data['hewan_masjid'] = $this->m_hewan_model->get_hewan_by_id($where, 'hewan_masjid')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/footer');
        $this->load->view('admin/edit-data-hewan-masjid', $data);
    }


    public function filter_masjid($id)
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $data["hewan"] = "";
        $data["masjid"] = $this->lokasi_model->tampil_data()->result();
        $data["coba"] = $this->m_hewan_model->filter_hewan_masjid($id);
        $data["hewan_filt"] = $this->m_hewan_model->getAll();
        $data['nama_masjid'] = $this->lokasi_model->getById('data_masjid', $id)->row_array();
        $this->load->view("admin/data-hewan", $data);
        $this->load->view('template_admin/footer');
    }


    public function tambahhewan_filter($id_masjid)
    {
        $jenis_hewan = $this->input->post('jenis_hewan');
        $jumlah_hewan = $this->input->post('jumlah_hewan');
        $data = [
            'id_masjid'      => $id_masjid,
            'id_hewan'      => $jenis_hewan,
            'jumlah_hewan'    => $jumlah_hewan,
            // 'foto'        => $foto,
        ];

        $this->m_hewan_model->tambah_hewan($data, 'hewan_masjid');
        redirect('admin/data_hewan/index');
    }

    public function update_hewan_filter($id_masjid)
    {
        $id = $this->input->post('id_hewan_masjid');
        $jumlah_hewan = $this->input->post('jumlah_hewan');

        $data = [
            'jumlah_hewan'      => $jumlah_hewan,
        ];

        $where = [
            'id_hewan_masjid'     => $id
        ];

        $this->m_hewan_model->update_hewan($where, $data, "hewan_masjid");
        redirect('admin/data_hewan/filter_masjid/'.$id_masjid);
    }


    public function delete_filter($id = null)
    {
        echo $id;
        if (!isset($id)) show_404();

        if ($this->m_hewan_model->delete_filter($id, "hewan_masjid")) {
            redirect(site_url('admin/data_hewan/index'));
        }
    }
    
}
