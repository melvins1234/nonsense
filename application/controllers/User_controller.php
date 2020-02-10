<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('UserConfig');
	}

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
		$this->load->view('includes/head');
		$this->load->view('includes/login');
		$this->load->view('includes/footer');

		// $input = $this->input->post();
		// if(!empty($input)){
		// 	echo $input;
		// } 
	}

	public function RegisterUser()
	{
		$this->load->view('includes/head');
		$this->load->view('includes/register');
		$this->load->view('includes/footer');


		 $input = $this->input->post();

		if(!empty($input)){
			
			$this->UserConfig->addInformation($input, $input["user_email"]);
			// var_dump($input["user_email"]);
		}
	}
}
