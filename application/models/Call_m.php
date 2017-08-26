<?php
class Call_m extends CI_MODEL {
	function __construct() 
	{
		parent::__construct();
	}

	function addDriveCall($insert)
	{	
		$this->db->insert('call', $insert);
	}

	function checkCallReservation()
	{	
		$db = $this->db;
		$db->select('*');
		$db->from('call');
		$db->where('state', 1);

		return $db->get()->row();
	}

	function test($input)
	{	
		$data = array();
		$data['state'] = 2;
		$date['call_id'] = $input['call_id'];

		$db = $this->db;
		$db->where('call_id', $date['call_id']);
		$result = $db->update('call', $data);
		return $result;
	}

	function acceptCall($update) {
		$data = array();
		$data['state'] = 2;
		$data['call_id'] = $update['call_id'];

		$db = $this->db;
		$db->where('call_id', $data['call_id']);
		$result = $db->update('call', $data);
		return $result;
	}
}