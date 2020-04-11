<?php 

/**
* 
*/
class M_data extends CI_Model
{
	
	function tampil_data()
	{
		return $this->db->get('user');
	}

	function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
}

 ?>