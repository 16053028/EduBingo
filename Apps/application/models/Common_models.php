<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_models extends CI_Model {

	function insert_data($table,$data){
		$this->db->insert($table,$data);
		return true;
	}

	function findUsr($table,$where){
		return $this->db->get_where($table,$where);
	}

}

/* End of file Common_models.php */
/* Location: ./application/models/Common_models.php */