<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data_lokasi extends CI_Controller
{
    public function index()
    {
        $data['masjid'] = $this->lokasi_model->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data-masjid',$data);
        $this->load->view('template_admin/footer');
    }

    public function tambahlokasi()
    {
        $nama_masjid = $this->input->post('nama_masjid');
        $alamat = $this->input->post('alamat');
        $deskripsi = $this->input->post('deskripsi');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $no_telp = $this->input->post('no_telp');
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
            'nama_masjid'      => $nama_masjid,
            'alamat'           => $alamat,
            'deskripsi_masjid' => $deskripsi,
            'latitude'         => $latitude,
            'longitude'        => $longitude,
            'no_telp'          => $no_telp,
            'foto'             => $foto,
        ];

        $this->lokasi_model->tambah_lokasi($data, 'data_masjid');
        redirect('admin/data_lokasi/index');
    }

    public function editlokasi($lokasid)
    {
        $where = array('id_masjid' => $lokasid);
        $data['masjid'] = $this->lokasi_model->edit_lokasi($where, 'data_masjid')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit-data-lokasi', $data);
        $this->load->view('template_admin/footer');
    }

    public function updatelokasi()
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
        redirect('admin/data_lokasi/index');
    }

    public function hapuslokasi($id)
    {
        $where = array('id_masjid' => $id);
        $this->lokasi_model->hapus_lokasi($where, 'data_masjid');
        redirect('admin/data_lokasi/index');
    }
}