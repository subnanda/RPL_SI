
<?php

class Model_login extends CI_model {

	// public function getlogin($u,$p)
	// {
		
	// 	$this->db->where('username',$u);
	// 	$this->db->where('password',$p);
	// 	$query=$this->db->get('adm_jurusan');
	// 	//$query2->$this->db->get('kajur');
	// 	if ($query->num_rows()>0) 
	// 	{
	// 		foreach ($query->result() as $row) 
	// 		{
	// 			$sess = array('username' => $row->username,
	// 						   'nama' => $row->nama,
	// 						   'ttl' => $row->ttl);
	// 			$this->session->set_userdata($sess);
	// 			redirect('beranda');
	// 		}
	// 	}
	// 	// else if ($query2->num_rows()>0) 
	// 	// {
	// 	// 	foreach ($query2->result() as $row) 
	// 	// 	{
	// 	// 		$sess = array('username' => $row->username);
	// 	// 		$this->session->set_userdata($sess);
	// 	// 		redirect('input');
	// 	// 	}	
	// 	// }
	// 	else
	// 	{
	// 		$this->session->set_flashdata('info','Maaf Username atau Password Salah!!');
	// 		redirect('login');
	// 	}
	// }
	public function cek_user($data) 
	{
			$query = $this->db->get_where('user', $data);
			return $query;
	}
}