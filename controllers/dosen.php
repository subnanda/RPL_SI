<?php
session_start();
class Dosen extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
	}
	
	public function index() {
		$this->model_security->getsecurity();
		$isi['username'] = $this->session->userdata('username');
		$isi['id']       = $this->session->userdata('id');
		$isi['nama']     = $this->session->userdata('nama');
		$isi['Alamat']   = $this->session->userdata('Alamat');
		$isi['ttl']      = $this->session->userdata('ttl');
		$isi['gol']      = $this->session->userdata('gol');

		$isi['content']= 'tampil_beranda';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('user');
		
		
		$this->load->view('tampilan_dosen',$isi);
	}


	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

	
}
?>