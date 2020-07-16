<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scores extends CI_Controller {

    public function index(){
		$this->load->model('score', 'score', TRUE);

		$response = $this->score->approved();
        $data["response"] = $response;

		$this->load->view('headers');
		$this->load->view('scores', $data);

    }

}
