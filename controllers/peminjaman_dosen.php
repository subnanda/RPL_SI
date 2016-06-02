<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peminjaman_dosen extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjaman_dosen/tampil_data_peminjaman';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Persetujuan';
		$isi['data'] = $this->db->get('peminjaman_lembaga_dosen');
		$this->load->view('tampilan_dosen',$isi);
	}

	public function tambah()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_pinjam_dosen');
		$isi['content']= 'peminjaman_dosen/form_tambah';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='Tambah Pengadaan';
		// $isi['no_peminjaman'] 	= '';
		//$isi['id_dosen'] 			= '';
		// $isi['id_adm'] 			= '';
		// $isi['tgl_peminjaman'] 	= '';
		// $isi['tgl_pengembalian']= '';
		// $isi['sanksi'] 			= '';
		// $isi['kode_aset'] 		= '';
		// $isi['jumlah'] 			= '';
		// $isi['tgl_adm'] 		= '';		

		$this->load->view('tampilan_dosen',$isi);
	}

	
	public function simpan()
	{
		$this->model_security->getsecurity();
		//$key = $this->input->post('no_peminjaman');
		$data['no_peminjaman'] 		= $this->input->post('no_peminjaman');
		$data['id_dosen'] 			= $this->input->post('id_dosen');
		$data['tgl_peminjaman'] 	= $this->input->post('tgl_peminjaman');
		$data['tgl_pengembalian'] 	= $this->input->post('tgl_pengembalian');
		$data['kode'] 				= $this->input->post('kode');			
		$data['jumlah'] 			= $this->input->post('jumlah');		
		$data['id_adm'] 			= $this->input->post('id_adm');
		$data['sanksi'] 			= $this->input->post('sanksi');
		$data['tgl_adm'] 			= $this->input->post('tgl_adm');
		
		$this->load->model('model_pinjam_dosen');
		$query = $this->model_pinjam_dosen->getdata($key);
		
		if ($query->num_rows()>0) 
		// {
		// 	$this->model_pinjam_mhs->getupdate($key,$data);
		// 	$this->session->set_flashdata('info','Data sukses Di Update');
		// }
		// else
		{
			$this->model_pinjam_dosen->getinsert($data);
			$this->session->set_flashdata('info','Data sukses Di Simpan');
		}
		// $query = $this->db->get_where('peminjaman_mahasiswa',$key);
		// if ($query->num_rows()>0) 
		// {
		// 	$this->db->update('peminjaman_mahasiswa',$key,$data);
			
		// 	echo "window.alert('Data Sukses Di Update');";	

		// }
		// else
		// {
		// 	$this->db->insert('peminjaman_mahasiswa',$data);
		// 	echo "window.alert('Data Sukses Di Simpan')";
			
		// }
		
		
		redirect('peminjaman_dosen/tambah');

	}

	
}
