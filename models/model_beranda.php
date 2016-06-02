<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_beranda extends CI_model {

	public function getdata($key)
	{
		$this->db->where('id',$key);
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
		$this->db->where('kode_aset',$key);
		$this->db->delete('aset');
	}
}

