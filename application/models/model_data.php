<?php

class model_data extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('data_masjid');
    }
    public function tampil_data3()
    {
        $this->db->select('data_masjid.*, hewan_masjid.*, data_hewan.*');
        $this->db->from('hewan_masjid');
        $this->db->join('data_masjid', 'hewan_masjid.id_masjid = data_masjid.id_masjid');
        $this->db->join('data_hewan', 'data_hewan.id_hewan = hewan_masjid.id_hewan');
        return $this->db->get();
        // if ($result->num_rows() > 0) {
        //     return $result->result();
        // } else {
        //     return array();
        // }
    }
}