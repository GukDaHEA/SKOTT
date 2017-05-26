<?php
class Mains_m extends CI_Model {
	function _construct(){
		parent::_construct();
	}

	public function gets(){
		return $this->db->query('SELECT * FROM topic')->result();
	}

	public function get($topic_id){
		 return $this->db->get_where('topic', array('id'=>$topic_id))->row();
	}

	function reco_name() {
		$sql = "select title from recommand_spot";
		$query = $this->db->query($sql);
		$result = $query->result();

		return $result;
	}

}