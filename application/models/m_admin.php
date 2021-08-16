<?php 
 
class m_admin extends CI_Model
{	
	public function tampil_data()
    {
        return $this->db->get('admin_masjid');
    }
	public function tampil_data_admin()
    {
        return $this->db->get('admin');
    }

	public function update_profil($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}
?>