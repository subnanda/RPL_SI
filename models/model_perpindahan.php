<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_perpindahan extends CI_model {

	public function tampilperpindahan($key)
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

	public function tampiladm($key)
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

	public function getdata($key)
	{
		$this->db->where('kode_perpindahan',$key);
		$hasil = $this->db->get('perpindahan_aset');
		return $hasil;
	}

	public function getlistaset()
	{
		return $this->db->get('aset');
	}


	public function getupdate($key,$data)
	{
		$this->db->where('kode_perpindahan',$key);
		$this->db->update('perpindahan_aset',$data);
	}

	public function getinsert($data)
	{
		$this->db->insert('perpindahan_aset',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('kode_perpindahan',$key);
		$this->db->delete('perpindahan_aset');
	}

	public function __construct() {
        parent::__construct();
    }
 
    function getAll() {
        $this->db->select('*')->from('perpindahan_aset');
        return $this->db->get('');
    }
 
    function getWithLimit($start, $limit) {
        $this->db->select('*')->from('perpindahan_aset');
        $this->db->limit($limit, $start);
        return $this->db->get();
    }

    public function logout()
	{
		$CI =& get_instance();
		$CI->session->sess_destroy();
	}
}

