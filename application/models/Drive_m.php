<?php
class Drive_m extends CI_MODEL {
	function __construct() 
	{
		parent::__construct();
	}

	public function get() {
		// return $this->db->get_where('car', array('car_id'=>$id))->result();
		return $this->db->query('SELECT * FROM car')->result();
	}
}