<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

		$this->load->view('component/head', $data);
		$this->load->view('component/_com_head');
		$this->load->view('component/forms/f_login');		
		$this->load->view('component/_com_foot');
		$this->load->view('component/foot');
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
 
			$this->session->set_userdata($data_session);
 			
			echo "data ditemukan";
 			redirect(base_url('dashboard'));
		}else{
			$this->session->set_flashdata('msg', 'Username dan password salah !');
			redirect(base_url('login'));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */