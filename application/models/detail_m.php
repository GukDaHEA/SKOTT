<?php
class Detail_m extends CI_MODEL {
	function __construct() 
   {
		parent::__construct();
	}
	function detail($idx) 
   {
      $this->db->select('*');
      $this->db->from('detail');

      $this->db->where('idx', $idx);

      return $this->db->get()->row(); //한줄 출력입니다.
   }
}