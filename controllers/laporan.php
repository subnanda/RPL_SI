<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'laporan/tampil_laporan';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('pengadaan');
		$this->load->view('tampilan_adm',$isi);
	}

	
}

