<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mains extends MY_Controller {
	function __construct() {			//생성자:자연스럽게 사용됨
		parent::__construct();
		$this->load->model('Mains_m');
	}

    function index(){
    	if(MobileCheck()){ // 모바일일 경우  아래 실행
        $this->load->view('mains_v');
  		}else{
 
        $this->load->view('mains_v');
      //pc 일 경우 실행
 
  }
    }
}
?>