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
		$this->load->view('admin/index');
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
			redirect(base_url()."Admin/added");
		}
		else
		{
			//false
			$this->index();
		}
	}
	public function added()
	{
		$this->index();
	}
}