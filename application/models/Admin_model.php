<?php
class Admin_model extends CI_Model{


	function add_branch($data)
	{
		$this->db->insert("user", $data);
	}
	function add_product($data)
	{
		$this->db->insert("product_profile", $data);
	}
	function fetch_branch_data()
	{
		$query = $this->db->get("user");
		return $query;
	}
	function fetch_product_data()
	{
		$query = $this->db->get("product_profile");
		return $query;
	}
	function delete_branch($u_id){
		$this->db->where("u_id",$u_id);
		$this->db->delete("user");
	}
	function delete_product($prod_id){
		$this->db->where("prod_id",$prod_id);
		$this->db->delete("product_profile");
	}

	function fetch_single_product($prod_id){
		$this->db->where("prod_id",$prod_id);
		$query = $this->db->get("product_profile");
		return $query;
	}
	function update_product($data,$id){
		$this->db->where("prod_id",$id);
		$this->db->update("product_profile");
	}

}
