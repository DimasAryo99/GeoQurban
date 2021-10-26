<?php

class lokasi_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('data_masjid');
    }

    public function getById($table, $id)
    {
        return $this->db->get_where($table, ["id_masjid" => $id]);
    }

    public function tambah_lokasi($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_lokasi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_lokasi($where, $data)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('data_masjid');
    }

    public function hapus_lokasi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function tampil_datadmin()
    {
        $this->db->select('*');
        $this->db->from('admin_masjid');
        $this->db->join('data_masjid', 'admin_masjid.id_masjid = data_masjid.id_masjid');
        $this->db->where('admin_masjid.email', $this->session->userdata('email'));
        return $this->db->get();
    }
}
