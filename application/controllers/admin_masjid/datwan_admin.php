<?php
defined('BASEPATH') or exit('No direct script access allowed');

class datwan_admin extends CI_Controller
{
    public function index($id)
    {
        $this->load->view('template_admin_masjid/header');
        $this->load->view('template_admin_masjid/sidebar');
        $data["hewan"] = $this->m_hewan_model->getAll();
        $data["id_masjid"] = $id;
        $data["coba"] = $this->m_hewan_model->filter_hewan_masjid($id);
        $this->load->view("admin_masjid/datwan_admin", $data);
        // $this->load->view('template_admin_masjid/footer');

        // $data["jumalah"] = $this->hewan_masjid->getAll();
        // $this->load->view("admin/data-hewan", $data1);

        // $this->load->view('admin/data-hewan');
        // $data['title'] = "Cetak laporan berdasarkan filter data di PHP Codeigniter";
        // $data['masjid'] = $this->db->get('hewan_masjid')->result();
        // $this->load->view('admin/data-hewan', $data);  
    }
	
	public function tambahhewan($id_masjid)
        {
            
            $jenis_hewan = $this->input->post('jenis_hewan');
            $jumlah_hewan = $this->input->post('jumlah_hewan');
            $tahun = date("Y");
            $data = [
                'id_masjid'     => $id_masjid,
                'id_hewan'      => $jenis_hewan,
                'jumlah_hewan'  => $jumlah_hewan,
                'tahun'         => $tahun,

                // 'foto'        => $foto,
            ];
    
            $this->m_hewan_model->tambah_hewan($data, 'hewan_masjid');
            redirect('admin_masjid/datwan_admin/index/'.$id_masjid);
        }

   //mothod buat CRUD 
   


    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_hewan_model");
        $this->load->library('form_validation');
       
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login_admin"));
		}
	}
   
    // public function index()
    //    {
    //        $data["hewan"] = $this->m_hewan_model->getAll();
    //        $this->load->view("admin/data-hewan", $data);
    //    }
   
    public function tampilan_edit_hewan_masjid($id)
    {
        $where = array('id_hewan_masjid' => $id);
        $data['hewan_masjid'] = $this->m_hewan_model->get_hewan_by_id($where, 'hewan_masjid')->result();
        $this->load->view('template_admin_masjid/header');
        $this->load->view('template_admin_masjid/sidebar');
        $this->load->view('template_admin_masjid/footer');
        $this->load->view('admin_masjid/edit-datwan_admin', $data);
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
        redirect('admin_masjid/datwan_admin/index/'.$id_masjid);
    }
   
    public function delete($id=null)
    {
        echo $id;
        if (!isset($id)) show_404();
           
        if ($this->m_hewan_model->delete_filter($id, "hewan_masjid")) {
            redirect(site_url('admin_masjid/datwan_admin/index/' .$id));
        }
    }


    // public function filter_masjid($id)
    // {
    //     $this->load->view('template_admin_masjid/header');
    //     $this->load->view('template_admin_masjid/sidebar');
    //     $data["hewan"] = "";
    //     $data["masjid"] = $this->lokasi_model->tampil_data()->result();
    //     $data["coba"] = $this->m_hewan_model->filter_hewan_masjid($id);
    //     $this->load->view("admin_masjid/datwan_admin", $data);
    //     $this->load->view('template_admin_masjid/footer');
    // }
}
