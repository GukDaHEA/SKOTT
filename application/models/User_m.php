<?php
class User_m extends CI_MODEL {
    function __construct() 
   {
        parent::__construct();
    }

    function get_view($email) {

		$sql = "select * from user where email = '".$email."'"; 

		$query = $this->db->query($sql);

		$result = $query->row();

		return $result;

	}

    function user_modify($modify_name, $modify_nation, $email, $file_url) {


		$sql = "update user set name = '".$modify_name."', nation = '".$modify_nation."', picture = '".$file_url."' where email ='".$email."'";

		$query = $this->db->query($sql);

		return $query;
	}


	function get_modify_view($email) {

		$sql = "select * from user where email = '".$email."'"; 

		$query = $this->db->query($sql);

		$result = $query->row();

		return $result;
	}
}