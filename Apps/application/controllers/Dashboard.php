<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_models');
	}

	public function index()
	{

		// join table
		$detail_user = $this->Common_models->getDetailUser($_SESSION['id_login']);

		foreach ($detail_user as $base_data) {
			$id_user = $base_data['ID_USER'];
			$id_user_details = $base_data['ID_USER_DETAILS'];
			$nama_user = $base_data['NAMA_USER'];
			$id_tbl_login = $base_data['ID_TBL_LOGIN'];
			$id_instansi_pendidikan = $base_data['ID_INSTANSI_PENDIDIKAN'];
			$id_status_user = $base_data['ID_STATUS_USER'];
			$status_user = $base_data['TEKS_STATUS_USER'];
		}
		
		// Page Data
		$data['pageTitle'] = "BingoApp | Administrator Panel";
		$data['contentPages'] = 'component/dashboard/_content';
		
		// var_dump($base_data);

		// User Data
		$data['id_user'] = $id_user;
		$data['nama_user'] = $nama_user;
		$data['id_status_user'] = $id_status_user;
		
		if (isset($_SESSION['isLoggedin'])) {
			$this->load->view('pages/dashboard/_wrapper', $data);
		} else{
			$this->session->set_flashdata('msg', 'Anda belum login. Silahkan login terlebih dahulu.');
			redirect(base_url('auth'));
		}
			
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */