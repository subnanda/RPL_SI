<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {
public function index()
	{
		$this->model_security->getsecurity();
		$isi['username'] = $this->session->userdata('username');
		$isi['id']       = $this->session->userdata('id');
		$isi['nama']     = $this->session->userdata('nama');
		$isi['Alamat']     = $this->session->userdata('Alamat');
		$isi['ttl']     = $this->session->userdata('ttl');
		$isi['gol']     = $this->session->userdata('gol');

		$isi['content']= 'tampil_beranda';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('user');
		$this->load->view('tampilan_adm',$isi);
		// $this->load->view('tampilan_adm',$isi);
	}

	public function data()
	{
		$this->model_security->getsecurity();
		$isi['username'] = $this->session->userdata('username');
		$isi['id']       = $this->session->userdata('id');
		$isi['nama']     = $this->session->userdata('nama');
		$isi['Alamat']     = $this->session->userdata('Alamat');
		$isi['ttl']     = $this->session->userdata('ttl');
		$isi['gol']     = $this->session->userdata('gol');

		$isi['content']= 'tampil_beranda';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('user');
		$this->load->view('tampilan_mahasiswa',$isi);
		
	}

	public function dosend()
	{
		$this->model_security->getsecurity();
		$isi['username'] = $this->session->userdata('username');
		$isi['id']       = $this->session->userdata('id');
		$isi['nama']     = $this->session->userdata('nama');
		$isi['Alamat']     = $this->session->userdata('Alamat');
		$isi['ttl']     = $this->session->userdata('ttl');
		$isi['gol']     = $this->session->userdata('gol');

		$isi['content']= 'tampil_beranda';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('user');
		$this->load->view('tampilan_dosen',$isi);
		

	}

	public function kajurd()
	{
		$this->model_security->getsecurity();
		$isi['username'] = $this->session->userdata('username');
		$isi['id']       = $this->session->userdata('id');
		$isi['nama']     = $this->session->userdata('nama');
		$isi['Alamat']     = $this->session->userdata('Alamat');
		$isi['ttl']     = $this->session->userdata('ttl');
		$isi['gol']     = $this->session->userdata('gol');

		$isi['content']= 'tampil_beranda';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('user');
		$this->load->view('tampilan_kajur',$isi);
		

	}
	
	
}