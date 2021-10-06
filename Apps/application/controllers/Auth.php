<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_models');
	}


	public function index()
	{
		if (isset($_SESSION['isLoggedin'])) {
			redirect(base_url('dashboard'));
		} else{
		$data['pageTitle'] = "BingoApp | Login Pages";

		$this->load->view('pages/auth/login/_wrapper', $data);
		}
		
	}

	function actLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username_login' => $username,
			'password_login' => md5($password)
			);

		$query = $this->Common_models->findData("tbl_login",$where);

		foreach ($query->result_array() as $datauser) {
			$id_login = $datauser['ID_TBL_LOGIN'];
		}
		
		$isTrue = $query->num_rows();
		
		if($isTrue > 0){
 
			$data_session = array(
				'id_login' => $id_login,
				'username' => $username,
				'isLoggedin' => true
				);

			$data = array(
				'is_active' => 1
			);

			$this->Common_models->update('ID_TBL_LOGIN', $id_login, 'tbl_login', $data);
 
			$this->session->set_userdata($data_session);
 			
			echo "data ditemukan";
 			redirect(base_url('dashboard'));
		}else{
			$this->session->set_flashdata('msg', 'Username dan password salah !');
			redirect(base_url('auth'));
		}
	}
 
	function logout(){
		$data = array(
				'is_active' => 0
			);

		$this->Common_models->update('ID_TBL_LOGIN', $_SESSION['id_login'], 'tbl_login', $data);
		$this->session->sess_destroy();
		redirect(base_url('auth'));
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */