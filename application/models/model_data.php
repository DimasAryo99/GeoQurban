<?php 
 
class model_data extends CI_Model{
	public function tampil_data()
    {
        return $this->db->get('data_masjid');
    }
}