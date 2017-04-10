<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('User_m'); 
	}

	public function index()
	{

	}
	public function user() {
		$this->load->view('header');
		$this->load->view('User_v');
	}
}