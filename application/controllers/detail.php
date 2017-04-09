<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('detail_m'); 
	}

	function index() { 

   }

	function detail($url) { 
	  $db = $this->detail_m;

      $detail_result = $db->detail($url);
      
      if (empty($detail_result))
         $detail_result = array();

      $idx = $detail_result->idx;
      $spot_idx = $detail_result->spot_idx;
      $text = $detail_result->text;

      $idx = array();   
      $lat = array();
      $lng = array();
      $driving_idx = array();
      $date = array();

      $this->load->view('header.php');
      $this->load->view('detail_v', 
         array(
            'idx' => $idx,
            'spot_idx' => $spot_idx,
            'text' => $text
         )               //변수 이름으로
      );
      $this->load->view('footer.php');
   }
}