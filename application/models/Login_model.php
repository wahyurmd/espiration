<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function get($username, $password)
	{
		$query = $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */