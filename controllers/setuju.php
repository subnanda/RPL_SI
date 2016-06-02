<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setuju extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'setuju/tampil_data';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('pengadaan');
		$this->load->view('tampilan_kajur',$isi);
	}

	public function tambah()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'setuju/form_tambah';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Tambah Pengadaan';
		$isi['id_pengadaan'] 	= '';
		// $isi['nama_aset'] 		= '';
		// $isi['kode_aset'] 		= '';
		// $isi['jumlah'] 			= '';
		// $isi['tgl_pengadaan'] 	= '';
		// $isi['fungsi'] 			= '';
		// $isi['keterangan'] 		= '';
		// $isi['id_dosen'] 		= '';
		// $isi['spesifikasi'] 	= '';
		$isi['status'] 			= '';
				

		$this->load->view('tampilan_dosen',$isi);
	}


	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('id_pengadaan');
		$data['id_pengadaan'] 	= $this->input->post('id_pengadaan');
		// $data['nama_aset'] 		= $this->input->post('nama_aset');
		// $data['kode_aset'] 		= $this->input->post('kode_aset');
		// $data['jumlah'] 		= $this->input->post('jumlah');
		// $data['tgl_pengadaan'] 	= $this->input->post('tgl_pengadaan');
		// $data['fungsi'] 		= $this->input->post('fungsi');
		// $data['keterangan'] 	= $this->input->post('keterangan');
		// $data['id_dosen'] 		= $this->input->post('id_dosen');
		// $data['spesifikasi'] 	= $this->input->post('spesifikasi');
		$data['status'] 		= $this->input->post('status');
		
		$this->load->model('model_setuju');
		$query = $this->model_setuju->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_setuju->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Update');
		}
		else
		{
			$this->model_setuju->getinsert($data);
			$this->session->set_flashdata('info','Data sukses Di Simpan');
		}
		redirect('setuju/tambah');

	}


	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'setuju/form_tambah';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='edit';

		$key = $this->uri->segment(3);
		$this->db->where('id_pengadaan',$key);
		$query = $this->db->get('pengadaan');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$isi['id_pengadaan'] 	= $row->id_pengadaan;
				// $isi['nama_aset'] 		= $row->nama_aset;
				// $isi['kode_aset'] 		= $row->kode_aset;
				// $isi['jumlah'] 			= $row->jumlah;
				// $isi['tgl_pengadaan'] 	= $row->tgl_pengadaan;
				// $isi['fungsi'] 			= $row->fungsi;
				// $isi['keterangan'] 		= $row->keterangan;
				// $isi['id_dosen'] 		= $row->id_dosen;
				// $isi['spesifikasi'] 	= $row->spesifikasi;
				$isi['status'] 			= $row->status;
			}	
		}
		else
		{
				$isi['id_pengadaan'] 	= '';
				// $isi['nama_aset'] 		= '';
				// $isi['kode_aset'] 		= '';
				// $isi['jumlah'] 			= '';
				// $isi['tgl_pengadaan'] 	= '';
				// $isi['fungsi'] 			= '';
				// $isi['keterangan'] 		= '';
				// $isi['id_dosen'] 		= '';
				// $isi['spesifikasi'] 	= '';
				$isi['status'] 			= '';
				
		}
		
		$this->load->view('tampilan_kajur',$isi);
	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_setuju');
		$key = $this->uri->segment(3);
		$this->db->where('id_pengadaan', $key);
		$query = $this->db->get('pengadaan');
		if ($query->num_rows()>0) 
		{
			$this->model_setuju->getdelete($key);
		}
		redirect('setuju');
	}

}