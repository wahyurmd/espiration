<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		if($this->session->userdata('masuk') != TRUE){
            redirect('login','refresh');
        }
	}

	public function index()
	{
		$all = $this->Home_model->get_all();
		$data = array('tampil' => $all);
		$this->load->view('v_home', $data);
	}

	public function add_aspirasi()
	{
		date_default_timezone_set('Asia/Jakarta');

		$id_user = $this->input->post('id_user');
		$aspirasi = $this->input->post('aspirasi');
		$created_at = date('Y-m-d H:i:s');
		$status = 1;

		$addAspirasi = array(
			'id_user' 		=> $id_user,
			'aspirasi' 		=> $aspirasi,
			'created_at' 	=> $created_at,
			'status'		=> $status
		);

		$this->Home_model->add($addAspirasi, 'aspirasi');

		echo '<script>
		alert("Succses! Your aspiration have been added.");
		window.location.href="'.base_url('home').'";
		</script>';
	}

	public function admin()
	{
		$data['tampil'] = $this->Home_model->get_all2()->result();
		$this->load->view('v_admin', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */