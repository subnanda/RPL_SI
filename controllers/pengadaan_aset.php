<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengadaan_aset extends CI_Controller {


	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'pengadaan_aset/tampil_input';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('pengadaan');
		$this->load->view('tampilan_adm',$isi);
	}

	public function data()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'pengadaan_aset/pengadaan';
		$isi['data'] = $this->db->get('pengadaan');
		$this->load->view('tampilan_print',$isi);
	}

	public function tambah()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'pengadaan_aset/form_input_aset';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Tambah Pengadaan';
		$isi['kode_aset'] 		= '';
		$isi['id_pengadaan'] 	= '';
		$isi['nama_aset'] 			= '';
		$isi['spesifikasi'] 	= '';
		$isi['jumlah'] 			= '';		

		$this->load->view('tampilan_adm',$isi);
	}

	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'pengadaan_aset/form_input_aset';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='edit';

		$key = $this->uri->segment(3);
		$this->db->where('id_pengadaan',$key);
		$query = $this->db->get('pengadaan');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$isi['kode_aset'] = $row->kode_aset;
				$isi['id_pengadaan'] = $row->id_pengadaan;
				$isi['nama_aset'] = $row->nama_aset;
				$isi['spesifikasi'] = $row->spesifikasi;
				$isi['jumlah'] = $row->jumlah;
			}	
		}
		else
		{
				$isi['kode_aset'] 		= '';
				$isi['id_pengadaan'] 	= '';
				$isi['nama_aset'] 			= '';
				$isi['spesifikasi'] 	= '';
				$isi['jumlah'] 			= '';
				
		}
		
		$this->load->view('tampilan_adm',$isi);
	}

	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('kode_aset');
		$data['kode_aset'] = $this->input->post('kode_aset');
		$data['no_pengadaan'] = $this->input->post('no_pengadaan');
		$data['nama'] = $this->input->post('nama');
		$data['spesifikasi'] = $this->input->post('spesifikasi');
		$data['jumlah'] = $this->input->post('jumlah');
		
		$this->load->model('model_pengadaan');
		$query = $this->model_pengadaan->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_pengadaan->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Update');
		}
		else
		{
			$this->model_pengadaan->getinsert($data);
			$this->session->set_flashdata('info','Data sukses Di Simpan');
		}
		redirect('pengadaan_aset/tambah');

	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_pengadaan');

		$key = $this->uri->segment(3);
		$this->db->where('id_pengadaan', $key);
		$query = $this->db->get('pengadaan');
		if ($query->num_rows()>0) 
		{
			$this->model_pengadaan->getdelete($key);
		}
		redirect('pengadaan_aset');
	}

	public function beranda()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'pengadaan_aset/tampil_beranda';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('adm_jurusan');
		$this->load->view('tampilan_adm',$isi);
		
	}
}

