<?php
class Login_m extends CI_MODEL {
	function __construct() 
   {
		parent::__construct();
	}
	function authenticate($option) 
   {
      $result = $this->db->get_where('user', array('email'=>$option['email']))->row();
      return $result;
   }
}