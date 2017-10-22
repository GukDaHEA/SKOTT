<?php
class Call_m extends CI_MODEL {
	function __construct() 
	{
		parent::__construct();
	}

	function addDriveCall($insert)
	{
		$this->db->insert('callist', $insert);

		$db = $this->db;
        $sql = "SELECT * FROM callist WHERE userIdx = ".$insert['useridx']." ORDER BY call_id DESC";
        $query = $db->query($sql);
        $result = $query->row();
		return $result;
	}

	function checkCallReservation()
	{
		$db = $this->db;
		$db->select('*');
		$db->from('callist');
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
		$result = $db->update('callist', $data);
		return $result;
	}

	function acceptCall($update) {
		$data = array();
		$data['state'] = 2;
		$data['call_id'] = $update['call_id'];

		$db = $this->db;
		$db->where('call_id', $data['call_id']);
		$result = $db->update('callist', $data);
		return $result;
	}

	function wait_Call($idx) {
		$db = $this->db;

        $sql = "SELECT * FROM callist WHERE call_id = ".$idx." and state = 2";
        $query = $db->query($sql);
        $result = $query->row();

		return $result;
	}

	function wait_Call_drive() {
		$db = $this->db;
		$data['alarm'] = 2;

		$sql = "SELECT * FROM callist WHERE alarm = 1";
		$query = $db->query($sql);
		$result = $query->row();

		$db->where('alarm', 1);
		$db->update('callist', $data);

		return $result;
	}

	function whtPlace($idx, $driverId) {
		$data = array();
		$data['state'] = 2;
		$data['driveIdx'] = $driverId;

		$db = $this->db;
		$db->where('call_id', $idx);
		$db->update('callist', $data);

		
		$db->select('*');
		$db->from('callist');
		$db->where('call_id', $idx);

		return $db->get()->row();
		// return $result;
	}

	function get_list($type='', $offset='', $limit='' )
    {
		$sword= ' ';

		$sword = ' WHERE state = "1" ';

       $limit_query = '';

       if ( $limit != '' OR $offset != '' )
        {
           //페이징이 있을 경우의 처리
           $limit_query = ' LIMIT '.$offset.', '.$limit;
        }

       $sql = "SELECT * FROM callist".$sword." ORDER BY call_id DESC".$limit_query;
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
       return $result;
    }
}