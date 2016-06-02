<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perpindahan extends CI_Controller 
{
	var $per_page;
	
	public function index()
	{
		
		$this->model_security->getsecurity();
		$isi['content']= 'perpindahan/tampil_data_perpindahan';
		$isi['judul'] ='master';
		$isi['sub_judul']='Perpindahan';
		$isi['data'] = $this->db->get('perpindahan_aset');
		
		$this->load->view('tampilan_adm',$isi);
	}

	public function data()
	{
		$this->model_security->getsecurity();
		$isi['content'] = 'perpindahan/perpindahan';
		$isi['data'] = $this->db->get('perpindahan_aset');
		$this->load->view('tampilan_print', $isi);
	}


	public function tambah()
	{
		$this->load->model('model_perpindahan');
		$this->model_security->getsecurity();
		$isi['content']			= 'perpindahan/form_tambah';
		$this->load->view('tampilan_adm',$isi);
	}
	
	public function simpan()
	{
		//$this->load->model('model_perpindahan');
		$this->model_security->getsecurity();

		$key['kode_perpindahan']		= $this->input->post('kode_perpindahan');
		$data['kode_perpindahan']		= $this->input->post('kode_perpindahan');
		$data['kode_aset']				= $this->input->post('namaaset');
		$data['id_adm']					= $this->input->post('namaadm');
		$data['tgl_perpindahan']		= $this->input->post('tgl_perpindahan');
		$data['nama_pemegang']			= $this->input->post('nama');

		$this->load->model('model_perpindahan');
		// $query = $this->model_perpindahan->getdata($key);
		
		// if ($query->num_rows()>0) 
		// {
		// 	$this->model_perpindahan->getupdate($key,$data);
		// 	$this->session->set_flashdata('info','Data sukses Di Update');
		// }
		// else
		// {
		// 	$this->model_perpindahan->getinsert($data);
		// 	$this->session->set_flashdata('info','Data sukses Di Simpan');
		// }
		// redirect('perpindahan/tambah');

		$query = $this->db->get_where('perpindahan_aset',$key);
		if ($query->num_rows()>0) 
		{
			$this->db->update('perpindahan_aset',$key,$data);
			
			echo "window.alert('Data Sukses Di Update');";	

		}
		else
		{
			$this->db->insert('perpindahan_aset',$data);
			echo "window.alert('Data Sukses Di Simpan')";
			
		}
		redirect('perpindahan/tambah');
		
		
	}

	public function delete()
	{
		$this->model_security->getsecurity();
		$this->load->model('model_perpindahan');
		$key = $this->uri->segment(3);
		$this->db->where('kode_perpindahan', $key);
		$query = $this->db->get('perpindahan_aset');
		if ($query->num_rows()>0) 
		{
			$this->model_perpindahan->getdelete($key);
		}
		redirect('perpindahan');
	}

	public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('pagination');
        $this->load->model('model_perpindahan');
 
        $this->per_page = 5;
        $count = $this->model_perpindahan->getAll()->num_rows();
        $config['base_url'] = site_url('perpindahan/page/');
        $config['total_rows'] = $count;
        $config['per_page'] = $this->per_page;
        $this->pagination->initialize($config);
    }

     public function page($from = 0) {
     	$data['content'] = 'perpindahan/tampil_data_perpindahan';
        $data['perpindahan_aset'] = $this->model_perpindahan->getWithLimit($from, $this->per_page)->result();
        $this->load->view('tampilan_adm', $data);
    }

    public function logout()
	{
		$this->model_perpindahan->logout();
		redirect('login');
	}
}

