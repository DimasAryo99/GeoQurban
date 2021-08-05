<?php 
 
class m_admin extends CI_Model
{	
	public function tampil_data()
    {
        return $this->db->get('admin_masjid');
    }

    public function edit_profil($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

	public function update_profil($data, $where)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update('admin_masjid');
    }

}
?>