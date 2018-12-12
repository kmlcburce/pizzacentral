<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('client/header');
		$this->load->view('client/index');
		$this->load->view('client/footer');
		
	}
	public function menu()
	{
		$this->index();
		$this->load->view('client/menu.php');
	}
}
class Admin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/acrud');
		$this->load->view('admin/footer');
	}
	public function menu()
	{	
		$this->load->view('menu');
	}
}
