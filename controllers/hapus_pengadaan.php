<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hapus_pengadaan extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'hapus_pengadaan/tampil_data_hapus';
		$isi['judul'] ='master';
		$isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('aset');
		$this->load->view('tampilan_adm',$isi);
	}

	public function tambah()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'pengadaan_aset/form_input_aset';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Tambah Pengadaan';
		$isi['kode_aset'] 		= '';
		$isi['no_pengadaan'] 	= '';
		$isi['nama'] 			= '';
		$isi['spesifikasi'] 	= '';
		$isi['jumlah'] 			= '';		

		$this->load->view('tampilan_adm',$isi);
	}

	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'hapus_pengadaan/detil';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='edit';

		$key = $this->uri->segment(3);
		$this->db->where('kode_aset',$key);
		$query = $this->db->get('aset');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$isi['kode_aset'] = $row->kode_aset;
				$isi['no_pengadaan'] = $row->no_pengadaan;
				$isi['nama'] = $row->nama;
				$isi['spesifikasi'] = $row->spesifikasi;
				$isi['jumlah'] = $row->jumlah;
			}	
		}
		else
		{
				$isi['kode_aset'] 		= '';
				$isi['no_pengadaan'] 	= '';
				$isi['nama'] 			= '';
				$isi['spesifikasi'] 	= '';
				$isi['jumlah'] 			= '';
				
		}
		
		$this->load->view('tampilan_print',$isi);
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
		$this->db->where('kode_aset', $key);
		$query = $this->db->get('aset');
		if ($query->num_rows()>0) 
		{
			$this->model_pengadaan->getdeletes($key);
		}
		redirect('hapus_pengadaan');
	}
}

