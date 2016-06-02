<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peminjaman_mahasiswa extends CI_Controller {

	
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjamans/tampil_data_peminjaman';
		
		
		$isi['data'] = $this->db->get('peminjaman_mahasiswa');
		$this->load->view('tampilan_adm',$isi);
	}


	public function data()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjaman_mahasiswa/print';
		
		
		$isi['data'] = $this->db->get('peminjaman_mahasiswa');
		$this->load->view('tampilan_print',$isi);
	}


	public function tambah()
	{
		$this->load->model('model_pinjam');
		$this->model_security->getsecurity();
		$isi['content']			= 'peminjamans/form_tambah';
		$isi['no_peminjaman'] 		= '';
		// $isi['no_bp'] 			= '';
		// $isi['tgl_peminjaman'] 		= '';
		$isi['tgl_pengembalian']	= '';
		// $isi['kode_aset'] 			= '';
		// $isi['jumlah']		 		= '';
		// $isi['id_adm'] 				= '';
		$isi['tgl_adm'] 				= '';
		$isi['sanksi'] 					= '';
				
		$this->load->view('tampilan_adm',$isi);
	}
	
	public function simpan()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('no_peminjaman');
		$data['no_peminjaman'] 		= $this->input->post('no_peminjaman');
		// $data['no_bp'] 				= $this->input->post('no_bp');
		// $data['tgl_peminjaman'] 	= $this->input->post('tgl_peminjaman');
		// $data['tgl_pengembalian'] 	= $this->input->post('tgl_pengembalian');
		// $data['kode_aset'] 			= $this->input->post('kode_aset');
		// $data['jumlah'] 			= $this->input->post('jumlah');
		// $data['id_adm'] 			= $this->input->post('id_adm');
		$data['tgl_adm'] 			= $this->input->post('tgl_adm');
		$data['sanksi'] 			= $this->input->post('sanksi');
		
		$this->load->model('model_pinjam');
		$query = $this->model_pinjam->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_pinjam->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Update');
		}
		else
		{
			$this->model_pinjam->getinsert($data);
			$this->session->set_flashdata('info','Data sukses Di Simpan');
		}
		redirect('peminjaman_mahasiswa/tambah');
	}

	public function save()
	{
		$this->model_security->getsecurity();
		$key = $this->input->post('no_peminjaman');
		$data['no_peminjaman'] 		= $this->input->post('no_peminjaman');
		// $data['no_bp'] 				= $this->input->post('no_bp');
		// $data['tgl_peminjaman'] 	= $this->input->post('tgl_peminjaman');
		// $data['tgl_pengembalian'] 	= $this->input->post('tgl_pengembalian');
		// $data['kode_aset'] 			= $this->input->post('kode_aset');
		// $data['jumlah'] 			= $this->input->post('jumlah');
		// $data['id_adm'] 			= $this->input->post('id_adm');
		$data['tgl_adm'] 			= $this->input->post('tgl_adm');
		$data['sanksi'] 			= $this->input->post('sanksi');
		
		$this->load->model('model_pinjam');
		$query = $this->model_pinjam->getdata($key);
		
		if ($query->num_rows()>0) 
		{
			$this->model_pinjam->getupdate($key,$data);
			$this->session->set_flashdata('info','Data sukses Di Update');
		}
		else
		{
			$this->model_pinjam->getinsert($data);
			$this->session->set_flashdata('info','Data sukses Di Simpan');
		}
		redirect('peminjaman_mahasiswa');
	}

	public function edit()
	{
		$this->model_security->getsecurity();
		$isi['content']= 'peminjamans/form_tambah';
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
				// $isi['no_bp'] 				= $row->no_bp;
				// $isi['tgl_peminjaman'] 		= $row->tgl_peminjaman;
				$isi['tgl_pengembalian']	= $row->tgl_pengembalian;
				// $isi['kode_aset']			= $row->kode_aset;
				// $isi['jumlah']		 		= $row->jumlah;
				// $isi['id_adm'] 				= $row->id_adm;
				$isi['tgl_adm']				= $row->tgl_adm;
				$isi['sanksi'] 				= $row->sanksi;
				
			}	
		}
		else
		{
				$isi['no_peminjaman'] 		= '';
				// $isi['no_bp'] 				= '';
				// $isi['tgl_peminjaman'] 		= '';
				$isi['tgl_pengembalian']	= '';
				// $isi['kode_aset'] 			= '';
				// $isi['jumlah']		 		= '';
				// $isi['id_adm'] 				= '';
				$isi['tgl_adm']				= '';
				$isi['sanksi'] 				= '';
		}
		
		$this->load->view('tampilan_adm',$isi);
	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_pinjam');

		$key = $this->uri->segment(3);
		$this->db->where('no_peminjaman', $key);
		$query = $this->db->get('peminjaman_mahasiswa');
		if ($query->num_rows()>0) 
		{
			$this->model_pinjam->getdelete($key);
		}
		redirect('peminjaman_mahasiswa');
	}

	public function denda()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_pinjam');

	}

	public function cetak()
	{
        ob_start();
        $isi['data'] = $this->model_pinjam->view();
        $this->load->view('peminjamans/print', $isi);
        $html = ob_get_contents();
        ob_end_clean();
         
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data Peminjaman Mahasiswa.pdf', 'D');
    }
	
}

