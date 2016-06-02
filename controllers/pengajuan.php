<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'pengajuan/tampil_data_input';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('pengadaan');
		$this->load->view('tampilan_dosen',$isi);
	}

	public function tambah()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'pengajuan/form_input';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Tambah Pengadaan';
		$isi['id_pengadaan'] 	= '';
		$isi['nama_aset'] 		= '';
		$isi['kode_aset'] 		= '';
		$isi['jumlah'] 			= '';
		$isi['tgl_pengadaan'] 	= '';
		$isi['fungsi'] 			= '';
		$isi['keterangan'] 		= '';
		$isi['id_dosen'] 		= '';
		$isi['spesifikasi'] 	= '';
		$isi['status'] 			= '';
				

		$this->load->view('tampilan_dosen',$isi);
	}


	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('id_pengadaan');
		$data['id_pengadaan'] 	= $this->input->post('id_pengadaan');
		$data['nama_aset'] 		= $this->input->post('nama_aset');
		$data['kode_aset'] 		= $this->input->post('kode_aset');
		$data['jumlah'] 		= $this->input->post('jumlah');
		$data['tgl_pengadaan'] 	= $this->input->post('tgl_pengadaan');
		$data['fungsi'] 		= $this->input->post('fungsi');
		$data['keterangan'] 	= $this->input->post('keterangan');
		$data['id_dosen'] 		= $this->input->post('id_dosen');
		$data['spesifikasi'] 	= $this->input->post('spesifikasi');
		$data['status'] 		= $this->input->post('status');
		
		$this->load->model('model_pengajuan');
		$query = $this->model_pengajuan->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_pengajuan->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Update');
		}
		else
		{
			$this->model_pengajuan->getinsert($data);
			$this->session->set_flashdata('info','Data sukses Di Simpan');
		}
		redirect('pengajuan/tambah');

	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$key = $this->uri->segment(3);
		$this->db->where('id_pengadaan', $key);
		$query = $this->db->get('pengadaan');
	}

	
}

