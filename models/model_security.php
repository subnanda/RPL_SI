<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_security extends CI_model {

	public function getsecurity()
	{
		$username = $this->session->userdata('username');
		if (empty($username)) 
		{
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}