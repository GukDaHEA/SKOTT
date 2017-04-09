<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Review_m'); 
	}
	function index() {
		$this->load->view('review_v');
	}
}