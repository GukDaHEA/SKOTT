<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Detail_m'); 
	}

	function index() { 

   }

	function detail($url) { 
	  $db = $this->Detail_m;

      $detail_result = $db->detail($url);
      
      if (empty($detail_result))
         $detail_result = array();

      $idx = $detail_result->reco_idx;
      $lat = $detail_result->lat;
      $lng = $detail_result->lng;
      $name = $detail_result->reco_name;
      $address = $detail_result->reco_address;

      $this->load->view('header.php');
      $this->load->view('detail_v', 
         array(
            'idx'=>$idx,         //전체 디비 
            'lat'=>$lat, //json_encode 변환 전체 디비
            'lng'=>$lng, //전체 디비중 별점이 높은 관광지 10곳을 뽑음
            'name'=>$name,
            'address'=>$address
            ));
      $this->load->view('footer.php');
   }
}
