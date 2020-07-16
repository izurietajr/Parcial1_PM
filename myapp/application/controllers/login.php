<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($err = FALSE)
	{
		$params['error'] = TRUE && $err;
		$this->load->view('headers');
		$this->load->view('login', $params);
		// $this->load->view('navbar', $data);
	}

	public function validate()
	{
		$this->load->model('user', 'user', TRUE);

		$params['username'] = $this->input->post('username');
		$params['password'] = $this->input->post('password');

		$response = $this->user->validate_password($params);

		if(empty($response->result())){
			$this->index(TRUE);
		}
		else {
			$this->profile($response);
		}

	}

	private function profile($response){
		// TODO show profile
		$data['users'] = $response;
		$this->load->view('headers');
		$this->load->view('profile', $data);

	}
}
