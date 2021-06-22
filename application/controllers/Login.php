<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function proses_login()
	{
		$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$cek_login = $this->login_model->get($username, $password);

		if ($cek_login->num_rows() > 0) {


			$data = $cek_login->row_array();
			$this->session->set_userdata('masuk', TRUE);
			if ($data['role'] == 'Admin') {
				$this->session->set_userdata('akses','Admin');
				$this->session->set_userdata('id_user',$data['id']);
				$this->session->set_userdata('username', $data['username']);
				redirect('home','refresh');
			} else {
				$this->session->set_userdata('akses','Mahasiswa');
				$this->session->set_userdata('id_user',$data['id']);
				$this->session->set_userdata('username', $data['username']);
				redirect('home','refresh');
			}
		} else {
			$this->session->set_flashdata('msg', 'Username/NIM atau Password salah!');
			redirect('login','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		echo '<script>
		alert("Sukses! Anda berhasil logout.");
		window.location.href="'.base_url('login').'";
		</script>';
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */