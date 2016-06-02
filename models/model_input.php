<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_input extends CI_model {

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

