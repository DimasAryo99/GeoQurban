<?php 
 
class m_admin extends CI_Model
{	
	public function tampil_data()
    {
        return $this->db->get('admin_masjid');
    }

    public function edit_profil2()
    {
        //return $this->db->get_where($table, $where);
        $this->db->select('*');
        $this->db->from('admin_masjid');
        $this->db->where('admin_masjid.email', $this->session->userdata('email'));
        return $this->db->get();
    }

	public function update_profil($data, $where, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}
?>