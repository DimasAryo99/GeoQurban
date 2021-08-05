<?php 
 
class m_admin extends CI_Model
{	
	public function tampil_data()
    {
        return $this->db->get('admin_masjid');
    }

	public function update_profil($data, $where, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}
?>