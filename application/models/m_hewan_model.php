<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_hewan_model extends CI_Model
{
    public $_table = "data_hewan";

    public $id_hewan;
    public $jenis_hewan;
    // public $price;
    // public $image = "default.jpg";
    // public $description;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'price',
                'label' => 'Price',
                'rules' => 'numeric'
            ],

            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ]
        ];
    }
    
    public function tampil_datahewan()
    {
        $this->db->select('*');
        $this->db->from('data_hewan');
        return $this->db->get();
    }

    public function tampil_datadmin()
    {
        $this->db->select('*');
        $this->db->from('admin_masjid');
        $this->db->join('data_masjid', 'admin_masjid.id_masjid = data_masjid.id_masjid');
        $this->db->join('hewan_masjid', 'hewan_masjid.id_masjid = data_masjid.id_masjid');
        $this->db->join('data_hewan', 'data_hewan.id_hewan = hewan_masjid.id_hewan');
        $this->db->where('admin_masjid.email', $this->session->userdata('email'));

        return $this->db->get();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_hewan" => $id])->row();
    }

    public function tambah_hewan($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_hewan_by_id($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_hewan($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function filter_hewan_masjid($id)
    {
        $this->db->select('id_masjid, jenis_hewan, hewan_masjid.id_hewan, jumlah_hewan, id_hewan_masjid');
        $this->db->from('data_hewan');
        $this->db->join('hewan_masjid', 'data_hewan.id_hewan = hewan_masjid.id_hewan', 'inner');
        $this->db->where('id_masjid', $id);
        $query = $this->db->get();
        // $sql = "SELECT id_masjid, jenis_hewan, jumlah_hewan 
        // FROM data_hewan
        // INNER JOIN hewan_masjid
        // ON data_hewan.id_hewan = hewan_masjid.id_hewan";
        // $query = $this->db->query($sql);
        

        return $query->result_array();
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}
