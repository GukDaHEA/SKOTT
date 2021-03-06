<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 계정 데이터 관리
 */
class Board_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function board($idx) 
   {
      $this->db->select('*');
      $this->db->from('ci_board');

      $this->db->where('plag_id', $idx);

      return $this->db->get()->result(); //한줄 출력입니다.
   }

	function get() {

		// echo "안녕";
		// $sql = "select * from ci_board";
		// $query = $this->db->query($sql);
		// $result = $query->result();
		// return $result;

		$db = $this->db;

		$db->select('*');
		$db->from('ci_board');

		return $this->db->get()->result();
	}

	function get_view( $url, $id) {

		$sql0 = "update ci_board set hits = hits+1 where board_id = '".$id."' AND plag_id = '".$url."'"; 

		$this->db->query($sql0);

		$sql = "select * from ci_board where board_id = '".$id."' AND plag_id = '".$url."'";

		$query = $this->db->query($sql);

		$result = $query->row();

		return $result;

	}

	function get_modify_view($id) {

		$sql = "select * from ci_board where board_id = '".$id."'"; 

		$query = $this->db->query($sql);

		$result = $query->row();

		return $result;
	}

	function board_modify($modify_subject, $modify_contents, $id, $modify_picture) {

		$sql = "update ci_board set subject = '".$modify_subject."', contents = '".$modify_contents."', picture = '".$modify_picture."' where board_id ='".$id."'";

		$query = $this->db->query($sql);

		return $query;
	}

	function file_result($id) {
		$sql = "select * from ci_board where board_id ='".$id."'";
		$query = $this->db->query($sql);
		$result = $query->row();
		return $result;
	}


	function board_insert($board_subject, $board_contents, $user_name, $user_email, $user_picture, $url) 
	{
		$date = date("Y-m-d H:i:s");
		$sql  = "insert into ci_board(subject, contents, user_name, user_id, reg_date, picture, plag_id )  values ('".$board_subject."','".$board_contents."','".$user_name."','".$user_email."','".$date."','".$user_picture."','".$url."')";

		$query = $this->db->query($sql);

		return $query;
	}

	function get_delete($id)
	{

		$sql = "update ci_board set appear = '0' where board_id ='".$id."'";
		//db에 0이면 보여주는거고 1이면 삭제된거고
		// $sql = "delete from ci_board where board_id = '".$id."'";

		$query = $this->db->query($sql);

		// $db = $this->db;
		// $db->delete('');
		// $db->from('ci_board')
		// $db->where("board_id = '".$id."'");

		// return $this->db->get()->result();

	}

 function get_list($type='', $offset='', $limit='' , $search_word='', $url)
    {
		$sword= ' ';

		$sword = ' WHERE appear = "1" AND plag_id ='.$url;

		if ($search_word != '' )
     	{
     		//검색어가 있을 경우의 처리
     		$sword = ' WHERE subject like "%'.$search_word.'%" or contents like "%'.$search_word.'%" AND appear = "1" AND plag_id ='.$url;
     	}

       $limit_query = '';

       if ( $limit != '' OR $offset != '' )
        {
           //페이징이 있을 경우의 처리
           $limit_query = ' LIMIT '.$offset.', '.$limit;
        }

       $sql = "SELECT * FROM ci_board".$sword." ORDER BY board_id DESC".$limit_query;
       $query = $this->db->query($sql);

      if ( $type == 'count' )
        {
           //리스트를 반환하는 것이 아니라 전체 게시물의 갯수를 반환
          $result = $query->num_rows();
        }
        else
        {
           //게시물 리스트 반환
          $result = $query->result();
        }

        if (empty($result))
        {
        	// $db = $this->db;
        	// $db->select('*');
        	// $db->from('ci_board');
        	// $db->where('board_id', 1);
        	// $db->order_by('board_id','DESC');
        	// $db->limit(10,20);
        	// $result = $db->get()->row();
        }

       return $result;
    }
}