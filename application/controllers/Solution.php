<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solution extends MY_Controller {
	
	function __construct() {
		parent::__construct ();
		$this->load->model('Solution_m');
         }

	function index(){
		echo "안녕";
	}
}
?>