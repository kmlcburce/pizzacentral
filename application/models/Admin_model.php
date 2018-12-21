<?php
class Admin_model extends CI_Model{

	function add_branch($data)
	{
		$this->db->insert("user", $data);
	}
}
