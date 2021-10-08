<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debug extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_models');
		$this->load->library('pagination');
	}

	

	

}

/* End of file Debug.php */
/* Location: ./application/controllers/Debug.php */