<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pinjam extends CI_model {

	public function tampilpeminjaman($key)
	{


		$this->db->where('no_bp',$key);
		$query = $this->db->get('mahasiswa');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$hasil = $row->nama;
			}
		}
		else
		{
			$hasil = '';
			
		}
		return $hasil;		
	}

	public function tampilpeminjaman1($key)
	{


		$this->db->where('kode_aset',$key);
		$query = $this->db->get('aset');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$hasil = $row->nama;
			}
		}
		else
		{
			$hasil = '';
			
		}
		return $hasil;		
	}

	

	public function tampiladmin($key)
	{


		$this->db->where('id_adm',$key);
		$query = $this->db->get('adm_jurusan');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				$hasil = $row->nama;
			}
		}
		else
		{
			$hasil = '';
			
		}
		return $hasil;
	}

	// public function getdenda($key,$data)
	// {
	// 	$this->db->where('no_peminjaman');
	// 	$query = $this->db->get('peminjaman_lembaga_dosen');
		
	// }

	public function getdata($key)
	{
		$this->db->where('no_peminjaman',$key);
		$hasil = $this->db->get('peminjaman_mahasiswa');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('no_peminjaman',$key);
		$this->db->update('peminjaman_mahasiswa',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('peminjaman_mahasiswa',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('no_peminjaman',$key);
		$this->db->delete('peminjaman_mahasiswa');
	}

	public function view()
	{
        return $this->db->get('peminjaman_mahasiswa')->result();
    }
}

