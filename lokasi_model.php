<?php

class lokasi_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('data_masjid');
    }
    public function tambah_lokasi($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_lokasi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_lokasi($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_lokasi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
