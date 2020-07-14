<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data["username"] = "Jesus";
		$data["userid"] = "5";

		$this->load->view('headers');
		$this->load->view('navbar', $data);
		$this->load->view('login');
	}

	public function nippa()
	{
		$this->load->view('headers');
		$this->load->view('welcome_message');
	}
}
