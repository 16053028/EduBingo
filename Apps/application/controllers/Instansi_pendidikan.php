<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi_pendidikan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_models');
		$this->load->library('pagination');
	}

	public function index()
	{
		$jumlah_data = $this->Common_models->dataCount('tbl_user');
		$config['base_url'] = base_url().'debug/instansi_pendidikan';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		if ($jumlah_data > 0)
		    {
		        // get current page records
		        $data['detail_instansi_pendidikan'] = $this->Common_models->getDetailInstansi($config['per_page'],$from);
		         
		        // use the settings to initialize the library
		        $this->pagination->initialize($config);
		         
		        // build paging links
		        $data["pagination"] = $this->pagination->create_links();
		    }


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

	public function hapus_instansi_pendidikan($colPars, $idPars, $tablePars){
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

	public function add_status(){   
	    $teks_instansi = $this->input->post('status_instansi');
		$keterangan_status = $this->input->post('keterangan_status');

		$data = array(
			'TEKS_STATUS_INSTANSI' => $teks_instansi,
			'KETERANGAN_STATUS_INSTANSI' => $keterangan_status
		);

		$this->Common_models->insert_data('tbl_status_instansi', $data);

		$this->session->set_flashdata('success','Berhasil menambahkan data Status Instansi');
		redirect('instansi_pendidikan/status_instansi');
	}

	public function form_add_status(){
		// Page Data
		$data['pageTitle'] = "BingoApp | Tambah Status Instansi";
		$data['contentPages'] = 'component/forms/instansi/f_status_instansi';
		
		// var_dump($data);

		// User Data
		
		if (isset($_SESSION['isLoggedin'])) {
			$this->load->view('pages/dashboard/_wrapper', $data);
		} else{
			$this->session->set_flashdata('msg', 'Anda belum login. Silahkan login terlebih dahulu.');
			redirect(base_url('auth'));
		}
	}

	public function form_edit_status($idStatus){
		$where = array(
			'ID_STATUS_INSTANSI' => $idStatus
		);

		$data['status_user'] = $this->Common_models->findData('tbl_status_instansi',$where)->row();
		// Page Data
		$data['pageTitle'] = "BingoApp | Tambah Status Pengguna";
		$data['contentPages'] = 'component/forms/pengguna/f_edit_status_intansi';

		// User Data
		
		if (isset($_SESSION['isLoggedin'])) {
			$this->load->view('pages/dashboard/_wrapper', $data);
		} else{
			$this->session->set_flashdata('msg', 'Anda belum login. Silahkan login terlebih dahulu.');
			redirect(base_url('auth'));
		}
	}

	public function edit_status($idStatusEdit){

		$status_instansi = $this->input->post('status_instansi');
		$keterangan_status = $this->input->post('keterangan_status');

		$data = array(
			'TEKS_STATUS_INSTANSI' => $status_instansi,
			'KETERANGAN_STATUS_INSTANSI' => $keterangan_status
		);

		$this->Common_models->update('ID_STATUS_INSTANSI', $idStatusEdit, 'tbl_status_instansi', $data);

		$this->session->set_flashdata('success','Berhasil menambahkan data Status Instansi');
		redirect('pengguna/status_pengguna');
	}

}

/* End of file Instansi_pendidikan.php */
/* Location: ./application/controllers/Instansi_pendidikan.php */