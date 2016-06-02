<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'input/tampil_data_input';
		$isi['judul'] ='master';
		$isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('pengadaan');
		$this->load->view('tampilan_kajur',$isi);
	}

	public function tambah()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'input/form_input';
		$isi['judul'] ='master';
		$isi['sub_judul']='Tambah Pengadaan';
		$isi['id_pengadaan'] = '';
		$isi['nama_barang'] = '';
		$isi['kode_barang'] = '';
		$isi['jumlah'] = '';
		$isi['tgl_pengadaan'] = '';
		$isi['fungsi'] = '';
		$isi['keterangan'] = '';
				

		$this->load->view('tampilan_kajur',$isi);
	}

	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'input/form_input';
		$isi['judul'] ='master';
		$isi['sub_judul']='edit';

		$key = $this->uri->segment(3);
		$this->db->where('id_pengadaan',$key);
		$query = $this->db->get('pengadaan');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$isi['id_pengadaan'] 	= $row->id_pengadaan;
				$isi['nama_barang'] 	= $row->nama_barang;
				$isi['kode_barang'] 	= $row->kode_barang;
				$isi['jumlah'] 			= $row->jumlah;
				$isi['tgl_pengadaan'] 	= $row->tgl_pengadaan;
				$isi['fungsi'] 			= $row->fungsi;
				$isi['keterangan'] 		= $row->keterangan;
			}	
		}
		else
		{
				$isi['id_pengadaan'] 	= '';
				$isi['nama_barang'] 	= '';
				$isi['kode_barang'] 	= '';
				$isi['jumlah'] 			= '';
				$isi['tgl_pengadaan'] 	= '';
				$isi['fungsi'] 			= '';
				$isi['keterangan'] 		= '';
				
		}
		
		$this->load->view('tampilan_kajur',$isi);
	}

	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('id_pengadaan');
		$data['id_pengadaan'] 	= $this->input->post('id_pengadaan');
		$data['nama_barang'] 	= $this->input->post('nama_barang');
		$data['kode_barang'] 	= $this->input->post('kode_barang');
		$data['jumlah'] 		= $this->input->post('jumlah');
		$data['tgl_pengadaan'] 	= $this->input->post('tgl_pengadaan');
		$data['fungsi'] 		= $this->input->post('fungsi');
		$data['keterangan'] 	= $this->input->post('keterangan');
		
		$this->load->model('model_input');
		$query = $this->model_input->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_input->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Update');
		}
		else
		{
			$this->model_input->getinsert($data);
			$this->session->set_flashdata('info','Data sukses Di Simpan');
		}
		redirect('input/tambah');

	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$key = $this->uri->segment(3);
		$this->db->where('id_pengadaan', $key);
		$query = $this->db->get('pengadaan');
	}

	
}

