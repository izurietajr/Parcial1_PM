<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data["username"] = "Jesus";
		$data["userid"] = "5";

		$this->load->view('headers');
		// $this->load->view('navbar', $data);
		$this->load->view('login');
	}

	public function validate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		echo $username;
		echo $password;

		$this->load->model('user', 'user', TRUE);
		$data['users'] = $this->user->validate_password();

		$this->load->view('headers');
		$this->load->view('profile', $data);
	}
}
