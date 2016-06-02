<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_setuju extends CI_model {

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

	public function tampiladmin($key)
	{


		$this->db->where('id_pengadaan',$key);
		$query = $this->db->get('pengadaan');
		if ($query->num_rows()>0) 
		{
			foreach ($query->result() as $row) 
			{
				if ($hasil = $row->status == 0) 
				{
					$hasil = "Belum Disetujui";
				}
				else
				{
					$hasil = "Disetujui";
				}
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

	// public function getlistaset()
	// {
	// 	return $this->db->get('aset');
	// }
	 	
	public function getdata($key)
	{
		$this->db->where('id_pengadaan',$key);
		$hasil = $this->db->get('pengadaan');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('id_pengadaan',$key);
		$this->db->update('pengadaan',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('pengadaan',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id_pengadaan',$key);
		$this->db->delete('pengadaan');
	}
}

