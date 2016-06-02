<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setuju_mhs extends CI_Controller {

	public function tambah()
	{
		$this->load->model('model_p');
		$this->model_security->getsecurity();
		$isi['content']				= 'setuju_mhs/form_tambah';
		$isi['no_peminjaman'] 		= '';
		$isi['status'] 				= '';
				
		$this->load->view('tampilan_adm',$isi);
	}
	
	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('no_peminjaman');
		$data['no_peminjaman'] 		= $this->input->post('no_peminjaman');
		$data['status'] 			= $this->input->post('status');
		
		$this->load->model('model_p');
		$query = $this->model_p->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_p->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Ubah');
		}
		// else
		// {
		// 	$this->model_p->getinsert($data);
		// 	$this->session->set_flashdata('info','Data sukses Di Simpan');
		// }
		redirect('setuju_mhs/tambah');
	}
	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'setuju_mhs/form_tambah';
		$key = $this->uri->segment(3);
		$this->db->where('no_peminjaman',$key);
		$query = $this->db->get('peminjaman_mahasiswa');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$isi['no_peminjaman'] 		= $row->no_peminjaman;
				$isi['status']				= $row->status;
				
			}	
		}
		else
		{
				$isi['no_peminjaman'] 		= '';
				$isi['status']				= '';
				
		}
		
		$this->load->view('tampilan_adm',$isi);
	}
	
}

