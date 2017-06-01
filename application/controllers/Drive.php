<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Drive extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Drive_m');
	}

	function index(){
		$this->load->view('drive_v');
		//$this->load->view('drive_sucess');
		
		// $data = $this->Drive_m->get();
		// foreach ($data as $dodo) {
		// 	var_dump($dodo);
		// }
		
		// echo "안녕하세요";

	}
}
?>