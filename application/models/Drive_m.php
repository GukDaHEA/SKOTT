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
	
	function authenticate($option)
   {
      $result = $this->db->get_where('driver', array('driver_id'=>$option['id']))->row();
      return $result;
   }

   function driverCheck($idx)
   {
   		$db = $this->db;

   		$sql = "SELECT * FROM driver WHERE driver_id = '".$idx."'";
        $query = $db->query($sql);
        $result = $query->row();

		return $result;
   }

   function userCheck($useridx)
   {
   		$db = $this->db;
		$db->select('*');
		$db->from('user');
		$db->where('user_id', $useridx);

		return $db->get()->row();
   }
}