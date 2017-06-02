<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Call extends MY_Controller {
	function __construct() {
		parent::__construct();

	}

	public function index()
	{

	}
	public function call() {
		$this->load->view('call_v');
	}
}