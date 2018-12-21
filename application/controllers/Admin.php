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
		$this->form_validation->set_rules("ab_cpass", "Password Confirmation", 'required');
		$this->form_validation->set_rules("ab_address", "Address", 'required');
		if ($this->form_validation->run()) {
			$this->load->model("Admin_model");
		}
		else{
			$this->index();
		}
	}
}