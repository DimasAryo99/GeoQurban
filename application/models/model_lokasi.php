<?php

class model_lokasi extends CI_Model
{
    public function tampil_lokasi($id_masjid)
    {
        $this->db->select('data_masjid.nama_masjid,hewan_masjid.*,data_hewan.nama_hewan');
        $this->db->from('data_masjid');
        $this->db->join('hewan_masjid', 'data_masjid.id_masjid = hewan_masjid.id_masjid');
        $this->db->join('data_hewan', 'hewan_masjid.id_hewan = data_hewan.id_hewan');
        $result = $this->db->where('data_masjid.id_masjid', $id_masjid)->get();
        //$result = $this->db->where('id_invoice', $id_invoice)->get('pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else 
        {
            return array();
        }
    }
}