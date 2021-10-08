<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_models');
		$this->load->library('pagination');
	}

	public function index()
	{
		$jumlah_data = $this->Common_models->dataCount('tbl_user');
		$config['base_url'] = base_url().'pengguna/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 1;
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
		        $data['detail_pengguna'] = $this->Common_models->getDetailUser($config['per_page'],$from);
		         
		        // use the settings to initialize the library
		        $this->pagination->initialize($config);
		         
		        // build paging links
		        $data["pagination"] = $this->pagination->create_links();
		    }

		// Page Data
		$data['pageTitle'] = "BingoApp | Daftar Instansi";
		$data['contentPages'] = 'component/tables/_pengguna';
		
		// var_dump($data);

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

	public function hapus_pengguna($idUser){
		if (isset($_SESSION['isLoggedin'])) {
			$this->Common_models->deleteUser($idUser);
			$this->session->set_flashdata('msg', 'Data berhasil dihapus.');
			
			redirect(base_url('debug/pengguna'));
			
		} else{
			$this->session->set_flashdata('msg', 'Anda belum login. Silahkan login terlebih dahulu.');
			redirect(base_url('auth'));
		}		
		
	}

	public function add_status(){   
	    $status_pengguna = $this->input->post('status_pengguna');
		$keterangan_status = $this->input->post('keterangan_status');

		$data = array(
			'TEKS_STATUS_USER' => $status_pengguna,
			'KETERANGAN_STATUS_USER' => $keterangan_status
		);

		$this->Common_models->insert_data('tbl_status_user', $data);

		$this->session->set_flashdata('success','Berhasil menambahkan data Status Instansi');
		redirect('pengguna/status_pengguna');
	}

	public function form_add_status(){
		// Page Data
		$data['pageTitle'] = "BingoApp | Tambah Status Pengguna";
		$data['contentPages'] = 'component/forms/pengguna/f_status_pengguna';
		
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
			'ID_STATUS_USER' => $idStatus
		);

		$data['status_user'] = $this->Common_models->findData('tbl_status_user',$where)->row();
		// Page Data
		$data['pageTitle'] = "BingoApp | Tambah Status Pengguna";
		$data['contentPages'] = 'component/forms/pengguna/f_edit_status_pengguna';
		
		// User Data
		
		if (isset($_SESSION['isLoggedin'])) {
			$this->load->view('pages/dashboard/_wrapper', $data);
		} else{
			$this->session->set_flashdata('msg', 'Anda belum login. Silahkan login terlebih dahulu.');
			redirect(base_url('auth'));
		}
	}

	public function edit_status($idStatusEdit){

		$status_pengguna = $this->input->post('status_pengguna');
		$keterangan_status = $this->input->post('keterangan_status');

		$data = array(
			'TEKS_STATUS_USER' => $status_pengguna,
			'KETERANGAN_STATUS_USER' => $keterangan_status
		);

		$this->Common_models->update('ID_STATUS_USER', $idStatusEdit, 'tbl_status_user', $data);

		$this->session->set_flashdata('success','Berhasil menambahkan data Status Instansi');
		redirect('pengguna/status_pengguna');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */