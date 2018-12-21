<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model("Admin_model");
		$data["fetch_branch_data"] = $this->Admin_model->fetch_branch_data();
		$data["fetch_product_data"] = $this->Admin_model->fetch_product_data();
		$this->load->view("admin/index",$data);
	}
	public function menu()
	{
		$this->load->view('menu');
	}
	public function login()
	{
		$this->load->view('admin/login');
	}
	public function add_branch_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("ab_username", "Username", 'required');
		$this->form_validation->set_rules("ab_password", "Password", 'required');
		$this->form_validation->set_rules("ab_address", "Address", 'required');
		$type="1";

		if ($this->form_validation->run()) 
		{
			//true
			$this->load->model("Admin_model");
			$data = array(
				"u_name" 	=>$this->input->post("ab_username"),
				"u_pass" 	=>$this->input->post("ab_password"),
				"u_email" 	=>$this->input->post("ab_address"),
				"u_type" 	=>$type
			);
			$this->Admin_model->add_branch($data);
			redirect(base_url()."Admin/added_bran");
		}
		else
		{
			//false
			$this->index();
		}
	}
	public function add_franchise_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("af_username", "Username", 'required');
		$this->form_validation->set_rules("af_password", "Password", 'required');
		$this->form_validation->set_rules("af_email", "Address", 'required');
		$type="2";

		if ($this->form_validation->run()) 
		{
			//true
			$this->load->model("Admin_model");
			$data = array(
				"u_name" 	=>$this->input->post("af_username"),
				"u_pass" 	=>$this->input->post("af_password"),
				"u_email" 	=>$this->input->post("af_email"),
				"u_type" 	=>$type
			);
			$this->Admin_model->add_branch($data);
			redirect(base_url()."Admin/added_fran");
		}
		else
		{
			//false
			$this->index();
		}
	}
	public function add_product_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("ap_prod_name", "Product Name", 'required');
		$this->form_validation->set_rules("ap_prod_desc", "Description", 'required');
		$this->form_validation->set_rules("ap_prod_price", "Price", 'required|numeric');
		$this->form_validation->set_rules("ap_prod_type", "Type", 'required');

		if ($this->form_validation->run()) 
		{
			//true
			$this->load->model("Admin_model");
			$data = array(
				"prod_name" 	=>$this->input->post("ap_prod_name"),
				"prod_desc" 	=>$this->input->post("ap_prod_desc"),
				"prod_price" 	=>$this->input->post("ap_prod_price"),
				"prod_type" 	=>$this->input->post("ap_prod_type"),
			);
			$this->Admin_model->add_branch($data);
			redirect(base_url()."Admin/added_prod");
		}
		else
		{
			//false
			$this->index();
		}
	}
	public function added_prod()
	{
		$this->index();
	}
	public function added_bran()
	{
		$this->index();
	}
	public function added_fran()
	{
		$this->index();
	}
}