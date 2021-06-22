<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function add($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function get_all()
	{
		$query = "SELECT * FROM aspirasi";
		return $this->db->query($query)->result_array();
	}

	public function get_all2()
	{
		$query = "SELECT * FROM aspirasi WHERE status='1'";
		return $this->db->query($query);
	}

}

/* End of file Home_modal.php */
/* Location: ./application/models/Home_modal.php */