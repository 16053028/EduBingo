<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_models extends CI_Model {

	function insert_data($table,$data){
		$this->db->insert($table,$data);
		return true;
	}

	public function update($coltbl, $id, $table, $data)
	{
		$this->db->where($coltbl, $id);
		$this->db->update($table, $data);
	}

	public function delete($coltbl, $id, $table)
	{
		$this->db->where($coltbl, $id);
		$this->db->delete($table);
	}

	function findData($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function getData($table, $coltbl, $id)
	{
		return $this->db->get_where($table, [$coltbl => $id])->row_array();
	}


	function getDetailUser($id_login){
		$this->db->select('*');
	    $this->db->from('tbl_user user'); 
	    $this->db->join('tbl_user_details user_details','user_details.id_user_details=user.id_user_details', 'left');
	    $this->db->join('tbl_status_user status_user','status_user.id_status_user=user_details.id_status_user', 'left');
	    $this->db->join('tbl_login login','login.id_tbl_login=user.id_tbl_login', 'left');
	    $this->db->join('tbl_instansi_pendidikan instansi_pendidikan','instansi_pendidikan.id_instansi_pendidikan=user.id_instansi_pendidikan', 'left');
	    $this->db->where('user.id_tbl_login', $id_login);         
	    $query = $this->db->get(); 
	    if($query->num_rows() != 0)
	    {
	        return $query->result_array();
	    }
	    else
	    {
	        return false;
	    }
	}

}

/* End of file Common_models.php */
/* Location: ./application/models/Common_models.php */