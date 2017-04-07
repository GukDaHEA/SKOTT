<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct() {
		parent::__construct ();
		$this->load->model('test_model');
     }

	public function index()
	{
		$data['list'] = $this->test_model->test();

		// var_dump($data); 
		// die;

		$this->load->view('welcome_message', $data);

	}
}
