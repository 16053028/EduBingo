<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function index()
	{
		if (isset($_SESSION['isLoggedin'])) {
			$this->load->view('component/head', $data);
			$this->load->view('component/_com_head');
			$this->load->view('pages/dashboard/_wrapper');		
			$this->load->view('component/_com_foot');
			$this->load->view('component/foot');
		} else{
			$this->session->set_flashdata('msg', 'Anda belum login. Silahkan login terlebih dahulu.');
			redirect(base_url('login'));
		}
	}

}

/* End of file Operator.php */
/* Location: ./application/controllers/Operator.php */