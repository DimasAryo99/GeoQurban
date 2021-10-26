<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function get_data_login($table){		
		return $this->db->get($table)->result();
	}

}
?>