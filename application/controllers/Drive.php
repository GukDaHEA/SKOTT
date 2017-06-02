<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drive extends MY_Controller {
	function __construct() {
		parent::__construct();

	}

	public function index()
	{

	}
	public function drive() {
		$this->load->view('drive_v');
	}
}