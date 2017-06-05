<?php
class MY_Controller extends CI_Controller {

	function __construct() 
	{
		parent::__construct();

	}
	function _footer() {
		$this->load->view('footer');
	}
	function _head() {
		$this->load->view('header');
	}

}