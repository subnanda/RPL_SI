<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persetujuan extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'persetujuan/tampil_data_persetujuan';
		$isi['judul'] ='master';
		$isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('pengadaan');
		$this->load->view('tampilan_kajur',$isi);
	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_input');

		$key = $this->uri->segment(3);
		$this->db->where('id_pengadaan', $key);
		$query = $this->db->get('pengadaan');
		if ($query->num_rows()>0) 
		{
			$this->model_input->getdelete($key);
		}
		redirect('persetujuan');
	}
}

