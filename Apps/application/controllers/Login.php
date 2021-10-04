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
		$data['pageTitle'] = "BingoApp | Login Pages";

		$this->load->view('component/head', $data);
		$this->load->view('component/_com_head');
		$this->load->view('component/forms/f_login');		
		$this->load->view('component/_com_foot');
		$this->load->view('component/foot');
	}

	function actLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username_login' => $username,
			'password_login' => md5($password)
			);
		$findUsr = $this->Common_models->findUsr("tbl_login",$where)->num_rows();
		
		if($findUsr > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			echo "data ditemukan";
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */