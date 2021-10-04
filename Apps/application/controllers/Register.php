<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_models');
	}

	public function index()
	{
		$data['pageTitle'] = "BingoApp | Create Login";

		$this->load->view('component/head', $data);
		$this->load->view('component/_com_head');
		$this->load->view('component/forms/f_register');		
		$this->load->view('component/_com_foot');
		$this->load->view('component/foot');	
	}

	public function proses(){
		// Form Validation Rules
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('rpass', 'Repeat Password', 'required|matches[password]');
		
	        if ($this->form_validation->run() == FALSE)
	        {
	            $this->session->set_flashdata('msg', validation_errors());
				redirect('register');
	        }
	        else
	        {
	            $username = $this->input->post('username');
				$password = $this->input->post('password');

				$data = array(
					'username_login' => $username,
					'password_login' => md5($password)
				);

				$this->Common_models->insert_data('tbl_login', $data);

				$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
				redirect('login');
	        }

		
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */