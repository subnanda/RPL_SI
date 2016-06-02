<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aset extends CI_Controller {


	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'data_aset/tampil_aset';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('aset');
		$this->load->view('tampilan_kajur',$isi);
	}

	public function data()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'data_aset/aset';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('aset');
		$this->load->view('tampilan_print',$isi);
	}

	public function asett()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'data_aset/tampil';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('aset');
		$this->load->view('tampilan_adm',$isi);
	}

	public function asettt()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'data_aset/tamp';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('aset');
		$this->load->view('tampilan_adm',$isi);
	}

	public function tambah()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'pengadaan_aset/form_edit';
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
		$isi['content']= 'pengadaan_aset/form_edit';
		
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
		redirect('aset/tambah');

	}


}

