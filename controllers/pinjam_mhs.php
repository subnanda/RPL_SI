<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pinjam_mhs extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjaman_mahasiswa/tampil_data_peminjaman';
	
		$isi['data'] = $this->db->get('peminjaman_mahasiswa');

		$this->load->view('tampilan_mahasiswa',$isi);
	}

	public function kelas()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjamans/tampil_data';
		
		
		$isi['data'] = $this->db->get('peminjaman_mahasiswa');
		$this->load->view('tampilan_mahasiswa',$isi);
	}

	

	
	
	public function tambah()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_pinjam_mhs');
		$isi['content']= 'peminjaman_mahasiswa/form_tambah';
		$isi['data'] = $this->db->get('peminjaman_mahasiswa');
		
		$isi['no_peminjaman'] 	= '';
		$isi['no_bp'] 			= '';
		$isi['id_adm'] 			= '';
		$isi['tgl_peminjaman'] 	= '';
		$isi['tgl_pengembalian']= '';
		$isi['sanksi'] 			= '';
		$isi['kode_aset'] 		= '';
		$isi['jumlah'] 			= '';
		$isi['tgl_adm'] 		= '';
		$isi['status']			= '';		

		$this->load->view('tampilan_mahasiswa',$isi);
	}

	
	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('no_peminjaman');
		$data['no_peminjaman'] 		= $this->input->post('no_peminjaman');
		$data['no_bp'] 				= $this->input->post('no_bp');
		$data['id_adm'] 			= $this->input->post('id_adm');
		$data['tgl_peminjaman'] 	= $this->input->post('tgl_peminjaman');
		$data['tgl_pengembalian'] 	= $this->input->post('tgl_pengembalian');
		$data['sanksi'] 			= $this->input->post('sanksi');
		$data['kode_aset'] 			= $this->input->post('kode_aset');	
		$data['jumlah'] 			= $this->input->post('jumlah');
		$data['tgl_adm'] 			= $this->input->post('tgl_adm');
		$data['status']				= $this->input->post('status');
		
		$this->load->model('model_pinjam_mhs');
		$query = $this->model_pinjam_mhs->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_pinjam_mhs->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Update');
			
		}
		else
		{
			$this->model_pinjam_mhs->getinsert($data);
			$this->session->set_flashdata('info','Data Berhasil Disimpan');
			//echo "<script>alert('Data Berhasil Disimpan');history.go(-1);</script>";
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
		
		
		redirect('pinjam_mhs/tambah');

	}
	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjamans/tampil';
		// $isi['judul'] ='master';
		// $isi['sub_judul']='edit';

		$key = $this->uri->segment(3);
		$this->db->where('no_peminjaman',$key);
		$query = $this->db->get('peminjaman_mahasiswa');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$isi['no_peminjaman'] 		= $row->no_peminjaman;
				$isi['no_bp'] 				= $row->no_bp;
				$isi['tgl_peminjaman'] 		= $row->tgl_peminjaman;
				$isi['tgl_pengembalian']	= $row->tgl_pengembalian;
				$isi['kode_aset']			= $row->kode_aset;
				$isi['jumlah']		 		= $row->jumlah;
				$isi['id_adm'] 				= $row->id_adm;
				$isi['status']				= $row->status;
				// $isi['tgl_adm']				= $row->tgl_adm;
				// $isi['sanksi'] 				= $row->sanksi;
				
			}	
		}
		else
		{
				$isi['no_peminjaman'] 		= '';
				$isi['no_bp'] 				= '';
				$isi['tgl_peminjaman'] 		= '';
				$isi['tgl_pengembalian']	= '';
				$isi['kode_aset'] 			= '';
				$isi['jumlah']		 		= '';
				$isi['id_adm'] 				= '';
				$isi['status']				= '';
				// $isi['tgl_adm']				= '';
				// $isi['sanksi'] 				= '';
		}
		
		$this->load->view('tampilan_printmhs',$isi);
	}

	
}

