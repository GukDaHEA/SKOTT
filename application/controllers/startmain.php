<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Startmain extends MY_Controller {


	function __construct() {
		parent::__construct ();
         }

	function index(){
		
	}

	function startmain_v() {
		$this->load->view('startmain_v');
	}
}