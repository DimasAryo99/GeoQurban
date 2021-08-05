<?php
defined('BASEPATH') or exit('No direct script access allowed');

class datmas_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    
        if($this->session->userdata('email')=='')
        {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Belum Login</div>');
            redirect(base_url("login_admin"));
        }
    }
    
    public function index()
    {
        $data['masjid2'] = $this->lokasi_model->tampil_datadmin()->row_array();
        $this->load->view('template_admin_masjid/header',$data);
        $this->load->view('template_admin_masjid/sidebar');
        $data["hewan"] = $this->m_hewan_model->getAll();
        // $data["id_masjid"] = $id;
        $data["hewan_by_admin"] = $this->m_hewan_model->tampil_datadmin()->result();
        $data["masjid"] = $this->lokasi_model->tampil_datadmin()->result();
        $this->load->view("admin_masjid/datwan_admin", $data);
        $this->load->view('template_admin_masjid/footer');

        // $data["jumalah"] = $this->hewan_masjid->getAll();
        // $this->load->view("admin/data-hewan", $data1);

        // $this->load->view('admin/data-hewan');
        // $data['title'] = "Cetak laporan berdasarkan filter data di PHP Codeigniter";
        // $data['masjid'] = $this->db->get('hewan_masjid')->result();
        // $this->load->view('admin/data-hewan', $data);  
    }
    
    public function editmasjid($masjidid)
    {
        $data['masjid2'] = $this->lokasi_model->tampil_datadmin()->row_array();
        $where = array('id_masjid' => $masjidid);
        $data['masjid'] = $this->lokasi_model->edit_lokasi($where, 'data_masjid')->result();
        $this->load->view('template_admin_masjid/header',$data);
        $this->load->view('template_admin_masjid/sidebar');
        $this->load->view('admin_masjid/edit-datmas_admin', $data);
        $this->load->view('template_admin_masjid/footer');
    }

    public function updatemasjid()
    {
        $id          = $this->input->post('id_masjid');
        $nama_masjid = $this->input->post('nama_masjid');
        $alamat      = $this->input->post('alamat');
        $deskripsi   = $this->input->post('deskripsi');
        $latitude    = $this->input->post('latitude');
        $longitude   = $this->input->post('longitude');
        $no_telp     = $this->input->post('no_telp');
        
        $data = [
            'nama_masjid'      => $nama_masjid,
            'alamat'           => $alamat,
            'deskripsi_masjid' => $deskripsi,
            'latitude'         => $latitude,
            'longitude'        => $longitude,
            'no_telp'          => $no_telp
        ];

        $where = [
            'id_masjid'     => $id,
        ];

        $this->lokasi_model->update_lokasi($where, $data, 'data_masjid');
        redirect('admin_masjid/datmas_admin/index');
    }

    public function hapusmasjid($id)
    {
        $where = array('id_masjid' => $id);
        $this->lokasi_model->hapus_lokasi($where, 'data_masjid');
        redirect('admin_masjid/datmas_admin/index');
    }
    //function __construct(){
		//parent::__construct();
	
		//if($this->session->userdata('status') != "login"){
			//redirect(base_url("login_masjid"));
		//}
	//}
}