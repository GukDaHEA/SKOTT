<?php
class Login_m extends CI_MODEL {
	function __construct() 
   {
		parent::__construct();
	}

   function gets($option){
      return $this->db->get_where('user', array('email'=>$option['email']))->row();
   }
   
	function authenticate($option) 
   {
      $result = $this->db->get_where('user', array('email'=>$option['email']))->row();
      return $result;
   }
     function user_add($option)
   {
      $this->db->set('email', $option['email']);
      $this->db->set('password', $option['password']);
      $this->db->set('name', $option['name']);
      $this->db->set('phone', $option['phone']);
      $this->db->set('make', 'NOW()',false);
      $this->db->insert('user');
      $result=$this->db->insert_id();
      return $result;
   }
}