<?php

class model_lokasi extends CI_Model
{
    public function tampil_lokasi($id_masjid)
    {
        $this->db->select('data_masjid.*, data_hewan.*, hewan_masjid.jumlah_hewan');
        $this->db->from('data_masjid');
        $this->db->join('hewan_masjid', 'data_masjid.id_masjid = hewan_masjid.id_masjid');
        $this->db->join('data_hewan', 'hewan_masjid.id_hewan = data_hewan.id_hewan');
        $where = "data_masjid.id_masjid='1'";
        $result = $this->db->where($where)->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else 
        {
            return array();
        }
    }
}