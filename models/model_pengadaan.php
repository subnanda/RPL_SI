<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pengadaan extends CI_model {

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

	public function getdata($key)
	{
		$this->db->where('kode_aset',$key);
		$hasil = $this->db->get('aset');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('kode_aset',$key);
		$this->db->update('aset',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('aset',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('id_pengadaan',$key);
		$this->db->delete('pengadaan');
	}

	public function getdeletes($key)
	{
		$this->db->where('kode_aset',$key);
		$this->db->delete('aset');
	}

}

