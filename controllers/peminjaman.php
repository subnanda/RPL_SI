<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjaman/tampil_data_peminjaman';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Perpindahan';
		
		$isi['data'] = $this->db->get('peminjaman_lembaga_dosen');
		$this->load->view('tampilan_adm',$isi);
	}

	public function kelas()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjaman/tampil_data';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Perpindahan';
		
		$isi['data'] = $this->db->get('peminjaman_lembaga_dosen');
		$this->load->view('tampilan_dosen',$isi);
	}


	public function data()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjaman_dosen/pinjam_dosen';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Perpindahan';
		
		$isi['data'] = $this->db->get('peminjaman_lembaga_dosen');
		$this->load->view('tampilan_print',$isi);
	}


	public function tambah()
	{
		$this->load->model('model_peminjaman');
		$this->model_security->getsecurity();
		$isi['content']			= 'peminjaman/form_tambah';
		$isi['no_peminjaman'] 		= '';
		// $isi['id_dosen'] 			= '';
		// $isi['tgl_peminjaman'] 		= '';
		$isi['tgl_pengembalian']	= '';
		// $isi['kode'] 			= '';
		// $isi['jumlah']		 		= '';
		// $isi['id_adm'] 				= '';
		$isi['tgl_adm']				= '';
		$isi['sanksi'] 				= '';
				
		$this->load->view('tampilan_adm',$isi);
	}
	
	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('no_peminjaman');
		$data['no_peminjaman'] 		= $this->input->post('no_peminjaman');
		// $data['id_dosen'] 			= $this->input->post('id_dosen');
		// $data['tgl_peminjaman'] 	= $this->input->post('tgl_peminjaman');
		$data['tgl_pengembalian'] 	= $this->input->post('tgl_pengembalian');
		// $data['kode'] 				= $this->input->post('kode');
		// $data['jumlah'] 			= $this->input->post('jumlah');
		// $data['id_adm'] 			= $this->input->post('id_adm');
		$data['tgl_adm'] 			= $this->input->post('tgl_adm');
		$data['sanksi'] 			= $this->input->post('sanksi');
		
		$this->load->model('model_peminjaman');
		$query = $this->model_peminjaman->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_peminjaman->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Update');
		}
		else
		{
			$this->model_peminjaman->getinsert($data);
			$this->session->set_flashdata('info','Data sukses Di Simpan');
		}
		redirect('peminjaman/tambah');

	}

	public function save()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('no_peminjaman');
		//$data['no_peminjaman'] 		= $this->input->post('no_peminjaman');
		// $data['id_dosen'] 			= $this->input->post('id_dosen');
		// $data['tgl_peminjaman'] 	= $this->input->post('tgl_peminjaman');
		//$data['tgl_pengembalian'] 	= $this->input->post('tgl_pengembalian');
		// $data['kode'] 				= $this->input->post('kode');
		// $data['jumlah'] 			= $this->input->post('jumlah');
		// $data['id_adm'] 			= $this->input->post('id_adm');
		$data['tgl_adm'] 			= $this->input->post('tgl_adm');
		$data['sanksi'] 			= $this->input->post('sanksi');
		
		$this->load->model('model_peminjaman');
		$query = $this->model_peminjaman->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_peminjaman->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Update');
		}
		else
		{
			$this->model_peminjaman->getinsert($data);
			$this->session->set_flashdata('info','Data sukses Di Simpan');
		}
		redirect('peminjaman');

	}

	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjaman/tampil';
		$isi['judul'] ='master';
		$isi['sub_judul']='edit';

		$key = $this->uri->segment(3);
		$this->db->where('no_peminjaman',$key);
		$query = $this->db->get('peminjaman_lembaga_dosen');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$isi['no_peminjaman'] 		= $row->no_peminjaman;
				$isi['id_dosen'] 			= $row->id_dosen;
				$isi['tgl_peminjaman'] 		= $row->tgl_peminjaman;
				$isi['tgl_pengembalian']	= $row->tgl_pengembalian;
				$isi['kode'] 				= $row->kode;
				$isi['jumlah']		 		= $row->jumlah;
				$isi['id_adm'] 				= $row->id_adm;
				$isi['status'] 				= $row->status;
				// $isi['tgl_adm'] 				= $row->tgl_adm;
				// $isi['sanksi'] 				= $row->sanksi;
				
			}	
		}
		else
		{
				$isi['no_peminjaman'] 		= '';
				$isi['id_dosen'] 			= '';
				$isi['tgl_peminjaman'] 		= '';
				$isi['tgl_pengembalian']	= '';
				$isi['kode'] 				= '';
				$isi['jumlah']		 		= '';
				$isi['id_adm'] 				= '';
				$isi['status'] 				= '';
				// $isi['tgl_adm'] 				= '';
				// $isi['sanksi'] 				= '';
		}
		
		$this->load->view('tampilan_printdosen',$isi);
	}

	public function setuju()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjaman/tampil_form';
		
		$key = $this->uri->segment(3);
		$this->db->where('no_peminjaman',$key);
		$query = $this->db->get('peminjaman_lembaga_dosen');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$isi['no_peminjaman'] 		= $row->no_peminjaman;
				$isi['id_dosen'] 			= $row->id_dosen;
				$isi['tgl_peminjaman'] 		= $row->tgl_peminjaman;
				$isi['tgl_pengembalian']	= $row->tgl_pengembalian;
				$isi['kode'] 				= $row->kode;
				$isi['jumlah']		 		= $row->jumlah;
				$isi['id_adm'] 				= $row->id_adm;
				$isi['status'] 				= $row->status;
				// $isi['tgl_adm'] 				= $row->tgl_adm;
				// $isi['sanksi'] 				= $row->sanksi;
				
			}	
		}
		else
		{
				$isi['no_peminjaman'] 		= '';
				$isi['id_dosen'] 			= '';
				$isi['tgl_peminjaman'] 		= '';
				$isi['tgl_pengembalian']	= '';
				$isi['kode'] 				= '';
				$isi['jumlah']		 		= '';
				$isi['id_adm'] 				= '';
				$isi['status'] 				= '';
				// $isi['tgl_adm'] 				= '';
				// $isi['sanksi'] 				= '';
		}
		
		$this->load->view('tampilan_adm',$isi);
	}

	public function add()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('no_peminjaman');
		$data['no_peminjaman'] 		= $this->input->post('no_peminjaman');
		$data['status'] 	= $this->input->post('status');
		
		$this->load->model('model_peminjaman');
		$query = $this->model_peminjaman->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_peminjaman->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Update');
		}
		else
		{
			$this->model_peminjaman->getinsert($data);
			$this->session->set_flashdata('info','Data sukses Di Simpan');
		}
		redirect('peminjaman/plus');

	}

	public function plus()
	{
		$this->load->model('model_peminjaman');
		$this->model_security->getsecurity();
		$isi['content']			= 'peminjaman/tampil_form';
		$isi['no_peminjaman'] 		= '';
		
		$isi['status'] 				= '';
				
		$this->load->view('tampilan_adm',$isi);
	}

	public function denda()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjaman/form_tambah';

		$key = $this->uri->segment(3);
		$this->db->where('no_peminjaman',$key);
		$query = $this->db->get('peminjaman_lembaga_dosen');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$isi['no_peminjaman'] 		= $row->no_peminjaman;
				$isi['id_dosen'] 			= $row->id_dosen;
				$isi['tgl_peminjaman'] 		= $row->tgl_peminjaman;
				$isi['tgl_pengembalian']	= $row->tgl_pengembalian;
				$isi['kode'] 				= $row->kode;
				$isi['jumlah']		 		= $row->jumlah;
				$isi['id_adm'] 				= $row->id_adm;
				$isi['status'] 				= $row->status;
				$isi['tgl_adm'] 			= $row->tgl_adm;
				$isi['sanksi'] 				= $row->sanksi;
				
			}	
		}
		else
		{
				$isi['no_peminjaman'] 		= '';
				$isi['id_dosen'] 			= '';
				$isi['tgl_peminjaman'] 		= '';
				$isi['tgl_pengembalian']	= '';
				$isi['kode'] 				= '';
				$isi['jumlah']		 		= '';
				$isi['id_adm'] 				= '';
				$isi['status'] 				= '';
				$isi['tgl_adm'] 			= '';
				$isi['sanksi'] 				= '';
		}
		
		$this->load->view('tampilan_adm',$isi);
	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_peminjaman');

		$key = $this->uri->segment(3);
		$this->db->where('no_peminjaman', $key);
		$query = $this->db->get('peminjaman_lembaga_dosen');
		if ($query->num_rows()>0) 
		{
			$this->model_peminjaman->getdelete($key);
		}
		redirect('peminjaman');
	}

	
}

