<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($err = FALSE)
	{
		$params['error'] = TRUE && $err;
		$this->load->view('headers');
		$this->load->view('login', $params);
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

	public function profile($params)
	{
		$this->load->model('identifier', 'identifier', TRUE);
		$user_pk = $params->result()[0]->pk;

		$response = $this->identifier->get_user_data($user_pk);

		$data['photo'] = $params->result()[0]->photo;

		$this->load->view('headers');
		$this->load->view('profile', $data);

	}
}
