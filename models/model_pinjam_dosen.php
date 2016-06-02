<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pinjam_dosen extends CI_model {

	public function tampilpeminjaman($key)
	{


		$this->db->where('id_dosen',$key);
		$query = $this->db->get('dosen');
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

	public function getlistaset()
	{
		return $this->db->get('aset');
	}
	 	
	public function getdata($key)
	{
		$query = $this->db->get_where('peminjaman_lembaga_dosen', $key);
			return $query;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('no_peminjaman',$key);
		$this->db->update('peminjaman_lembaga_dosen',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('peminjaman_lembaga_dosen',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('no_peminjaman',$key);
		$this->db->delete('peminjaman_lembaga_dosen');
	}
}

