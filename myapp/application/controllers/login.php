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

	public function validate()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		echo $username;
		echo $password;
		$this->load->view('headers');
		$this->load->view('welcome_message');
	}
}
