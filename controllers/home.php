<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	


	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'tampilan_beranda';
		$this->load->view('tampilan_adm',$isi);

	}



	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
