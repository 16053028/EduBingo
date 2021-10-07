<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debug extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_models');
	}

	public function userbio()
	{
		$this->load->view('component/forms/_userbio');
	}

	public function instansi_pendidikan(){

		$data['detail_instansi_pendidikan'] = $this->Common_models->getDetailInstansi();

		// Page Data
		$data['pageTitle'] = "BingoApp | Daftar Instansi";
		$data['contentPages'] = 'component/tables/_instansi';
		
		// var_dump($data);

		// User Data
		
		if (isset($_SESSION['isLoggedin'])) {
			$this->load->view('pages/dashboard/_wrapper', $data);
		} else{
			$this->session->set_flashdata('msg', 'Anda belum login. Silahkan login terlebih dahulu.');
			redirect(base_url('auth'));
		}
	}

	public function status_instansi(){

		$data['_status'] = $this->Common_models->getAllData('tbl_status_instansi');

		// Page Data
		$data['pageTitle'] = "BingoApp | Status Instansi";
		$data['contentPages'] = 'component/tables/_status_instansi';
		
		// var_dump($data_status_instansi);

		// User Data
		
		if (isset($_SESSION['isLoggedin'])) {
			$this->load->view('pages/dashboard/_wrapper', $data);
		} else{
			$this->session->set_flashdata('msg', 'Anda belum login. Silahkan login terlebih dahulu.');
			redirect(base_url('auth'));
		}
	}

	public function status_pengguna(){
		$data['_status'] = $this->Common_models->getAllData('tbl_status_user');

		// Page Data
		$data['pageTitle'] = "BingoApp | Status Pengguna";
		$data['contentPages'] = 'component/tables/_status_pengguna';
		
		// var_dump($data_status_instansi);

		// User Data
		
		if (isset($_SESSION['isLoggedin'])) {
			$this->load->view('pages/dashboard/_wrapper', $data);
		} else{
			$this->session->set_flashdata('msg', 'Anda belum login. Silahkan login terlebih dahulu.');
			redirect(base_url('auth'));
		}
	}

	public function hapus_data($colPars, $idPars, $tablePars){
		if (isset($_SESSION['isLoggedin'])) {
			$this->Common_models->deleteData($colPars, $idPars, $tablePars);
			$this->session->set_flashdata('msg', 'Data berhasil dihapus.');
			if ($tablePars == "tbl_status_user") {
				redirect(base_url('debug/status_pengguna'));
			}elseif ($tablePars == "tbl_status_instansi") {
				redirect(base_url('debug/status_instansi'));
			}
			
		} else{
			$this->session->set_flashdata('msg', 'Anda belum login. Silahkan login terlebih dahulu.');
			redirect(base_url('auth'));
		}		
		
	}

}

/* End of file Debug.php */
/* Location: ./application/controllers/Debug.php */