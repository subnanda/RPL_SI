
<?php 
class Login extends CI_Controller {

	public function index()
	{

		$this->load->view('tampilan_login');
	}
	// public function getlogin()
	// {
	// 	$u = $this->input->post('username');
	// 	$p = $this->input->post('password');
	// 	$this->load->model('model_login');
	// 	$this->model_login->getlogin($u,$p);
	// }

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
					  'password' => $this->input->post('password', TRUE)
			);
		$this->load->model('model_login'); // load model_user
		$hasil = $this->model_login->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['nama'] = $sess->nama;
				$sess_data['ttl'] = $sess->ttl;
				$sess_data['Alamat'] = $sess->Alamat;
				$sess_data['gol'] = $sess->gol;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('c_admin');
			}
			elseif ($this->session->userdata('level')=='member') 
			{
				redirect('c_member');
			}
			elseif ($this->session->userdata('level')=='mahasiswa') 
			{
				redirect('mahasiswa');
			}
			elseif ($this->session->userdata('level')=='dosen') 
			{
				redirect('dosen');
			}				
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
}
   