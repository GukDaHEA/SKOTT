<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mains extends MY_Controller {
	function __construct() {			//생성자:자연스럽게 사용됨
		parent::__construct();
		$this->load->model('mains_m');
	}

    function index(){
        $this->load->view('mains_v');
    }

    function get($id){    	
    	$topics = $this->mains_m->gets();
    	$topic = $this->mains_m->get($id);
    	$this->load->view('head');
    	$this->load->view('topic_list', array('topics'=>$topics));
    	$this->load->view('get',array('topic'=>$topic));
    	$this->load->view('footer');
    }
    function adjust_main(){
        // $topics = $this->topic_model->gets();
        // $this->load->view('topic_list', array('topics'=>$topics));
        $this->load->view('adjust_main');
        $this->load->view('footer');
    }

}
?>
