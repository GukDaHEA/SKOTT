<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Review_m'); 
	}
	function index() {

	}
	function add() {
		if (!$this->session->userdata('is_login')){
			redirect('/mains');
		} else {
		$this->load->view('header');
		$this->load->view('review_v');
		}
	}
}