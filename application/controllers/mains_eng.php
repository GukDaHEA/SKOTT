<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mains_eng extends MY_Controller {
	function __construct() {			//생성자:자연스럽게 사용됨
		parent::__construct();
		$this->load->model('Mains_m');
	}

    function index(){          
         $this->load->view('mains_v_eng');        
        // $this->load->view('footer');
    }
}
?>
