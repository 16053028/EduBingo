<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['pageTitle'] = "BingoApp | Administrator Panel";

		$this->load->view('component/head', $data);
		$this->load->view('component/_com_head');
		$this->load->view('pages/dashboard/_wrapper');		
		$this->load->view('component/_com_foot');
		$this->load->view('component/foot');	
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */