<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guk extends MY_Controller {

	function __construct() {			//생성자:자연스럽게 사용됨
		parent::__construct();
		// $this->load->model('Mains_m');
	}

    function index(){
   
        $this->load->view('guk_v');
        // $this->load->view('footer');
    }
}
?>