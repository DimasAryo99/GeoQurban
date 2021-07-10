<?php

class model_lokasi extends CI_Model
{
    /*public function tampil_lokasi($id_masjid)
    {
        $result = $this->db->where('id_masjid', $id_masjid)->get('data_masjid');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function tampil_tabel($id_masjid)
    {
        $this->db->select('*');
        $this->db->from('data_masjid');
        $this->db->join('hewan_masjid', 'data_masjid.id_masjid = hewan_masjid.id_masjid');
        $this->db->join('data_hewan', 'hewan_masjid.id_hewan = data_hewan.id_hewan');
        $this->db->where('data_masjid.id_masjid', $this->db->where('id_masjid', $id_masjid));
        return $this->db->get();

    }*/

    public function tampil_data1($id_masjid)
    {
        $this->db->select('data_masjid.nama_masjid, data_masjid.alamat, data_masjid.deskripsi_masjid, data_masjid.no_telp, data_hewan.jenis_hewan, hewan_masjid.jumlah_hewan');
        $this->db->from('data_masjid');
        $this->db->join('hewan_masjid', 'data_masjid.id_masjid = hewan_masjid.id_masjid');
        $this->db->join('data_hewan', 'data_hewan.id_hewan = hewan_masjid.id_hewan');
        $result = $this->db->where('data_masjid.id_masjid', $id_masjid)->get();
        //$result = $this->db->where('id_invoice', $id_invoice)->get('pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
        //return $this->db->get('toko');
    }
    public function tampil_data2($id_masjid)
    {
        $result = $this->db->where('id_masjid', $id_masjid)->get('data_masjid');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
        //return $this->db->get('toko');
    }

    /*public function tampil_tabel()
    {
        $this->db->select('data_hewan.*, hewan_masjid.jumlah_hewan');
        $this->db->from('data_hewan');
        $this->db->join('hewan_masjid', 'data_hewan.id_hewan = hewan_masjid.id_hewan');
        return $this->db->get();
        
        $result = $this->db->where('id_masjid', $id_masjid)->get();
        $this->db->select('*');
        $this->db->from('data_masjid');
        $this->db->join('hewan_masjid', 'data_masjid.id_masjid = hewan_masjid.id_masjid');
        $this->db->join('data_hewan', 'hewan_masjid.id_hewan = data_hewan.id_hewan');
        $this->db->where('data_masjid.id_masjid', $result);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else 
        {
            return array();
        }
    }

    public function tampil_tabel()
    {        
        $result = $this->db->where('id_masjid', $id_masjid)->get();
        $this->db->select('*');
        $this->db->from('data_masjid');
        $this->db->join('hewan_masjid', 'data_masjid.id_masjid = hewan_masjid.id_masjid');
        $this->db->join('data_hewan', 'hewan_masjid.id_hewan = data_hewan.id_hewan');
        $this->db->where('data_masjid.id_masjid', $result);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else 
        {
            return array();
        }
    }*/
}
