<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 계정 데이터 관리
 */
class Test_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function test() 
	{
		$this->db->select('*');
		$this->db->from('ci_board');

		return $this->db->get()->result();
	}

}