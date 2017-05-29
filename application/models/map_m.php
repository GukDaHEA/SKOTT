<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 계정 데이터 관리
 */
class Map_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function test() 
	{
		$this->db->select('*');
		$this->db->from('spot');

		return $this->db->get()->result();
	}

	function reco_name() {
		$sql = "select title from recommand_spot";
		$query = $this->db->query($sql);
		$result = $query->result();

		return $result;
	}

	function recommand_spot($limit = NULL, $sort = NULL) 
	{	
		$db = $this->db;
		$db->select('*');
		$db->from('recommand_spot');
		if (!empty($sort)) {
			$db->where("reco_sort ='".$sort."'");
			// $db->where('reco_sort = 1');
		 }
		if (!empty($limit)) {
			$db->order_by('reco_star DESC');
			$db->limit(10);
		} 
		return $this->db->get()->result();
	}											//전체 관광지중 별점이 높은 순서대로 가져와서 뿌려줌


	function recommand_spot_content($idx)
	{
		$sql = "select * from recommand_spot where reco_sort ='".$idx."'";
		$query = $this->db->query($sql);
		$result = $query->result();

		return $result;
	}

	function recommand_spot_sort($limit = NULL)
	{
		$db = $this->db;
		$db->select('lat, lng, title, reco_address, reco_idx, reco_star');
		$db->from('recommand_spot');
		$db->where('reco_sort = 1');
		if (!empty($limit)) {
			$db->order_by('reco_star DESC');
			$db->limit(10);
		}
		return $this->db->get()->result();
	}											//reco_sort = 1 (수도권) 인 디비만 가져와서 뿌려줌 
	function recommand_spot_ajax($idx)
	{
		$sql = "select * from recommand_spot where reco_idx ='".$idx."'";
		$query = $this->db->query($sql);
		$result = $query->row();

		return $result;
			// return $this->db->get()->row();
	}											//사이드바를 클릭하면 해당 idx를 가져와서 쿼리를 돌리고 그행을 가져가서 뿌린다.

	function search_marker_ajax($search_marker_text)
	{
		$sql = "select * from recommand_spot where title ='".$search_marker_text."'";
		$query = $this->db->query($sql);
		$result = $query->row();

		return $result;
			// return $this->db->get()->row();
	}	

	function like_content_ajax($reco_idx)
	{

 		$sql = "update recommand_spot set reco_like = reco_like + 1  where reco_idx ='".$reco_idx."'";
		$this->db->query($sql);

		$sql0 = "select reco_like, reco_idx from recommand_spot where reco_idx ='".$reco_idx."'";
		$query = $this->db->query($sql0);
		$result = $query->row();

		return $result;

	}	


	function recommand_spot_ajax_marker($idx)
	{
		$sql = "select * from recommand_spot where reco_sort ='".$idx."'";
		$query = $this->db->query($sql);
		$result = $query->result();

		return $result;
			// return $this->db->get()->row();
	}		

	function dbtest($title, $content_main) {
		// $this->db->select('*');
		// $this->db->from('recommand_spot');

		// return $this->db->get()->result(); //전체 출력

		// return $this->db->query('select * from recommand_spot')->result_array();

		// $db = $this->db;

		// $db->select('*');
		// $db->from('recommand_spot');

		// return $db->get()->row();

		// $this->db->set('created', NOW(), false ); //현재 시각 출력

		$this->db->insert('spot', array(
			'title' =>$title,
			'content_main' =>$content_main
			));

		return $this->db->insert_id(); //최종적으로 추가한 데이터에대한 id값을 알수있다.

		// echo $this->db->last_query(); //쿼리가 실제로 어떤 쿼리가 생성이 되는지 화면에 출력을해준다.

	}


	function detail($idx) {

		$this->db->select('*');
		$this->db->from('detail');

		$this->db->where('idx', $idx);

		return $this->db->get()->row(); //한줄 출력입니다.
	}

	function location() {

		$this->db->select('*');
		$this->db->from('location');

		return $this->db->get()->result();
}


public function insert_board() {
      $this->load->helper('date');
      $data = array (
         'star' => $this->input->post('star'),
         'make' => $this->input->post('make'),
         'title' => $this->input->post('title'),
         'content' => $this->input->post('content')
      );

      $this->db->set('adddate','now()',FALSE);

      return $this->db->insert('review', $data); 
   }

   function getView() {
      $CODE = $this->input->post('CODE');

      $SQL = "select review_num, star, make, title, content, adddate from review where review_num='$CODE' ";
      $query = $this->db->query($SQL);

      return $query->row();
   }

   function getList() {
      $SQL = "select review_num, star, make, title, content, adddate from review order by adddate desc ";
      $query = $this->db->query($SQL);
      return $query->result_array(); //배열 형태로 결과를 가져오는 모델클래스의 함수
   }


}