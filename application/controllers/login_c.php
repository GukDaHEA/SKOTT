<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('login_m'); 

	}

	public function index()
	{
		$this->load->view('login_v');
	}

      function authentication()
      {
         $data = array();
         $this->load->helper('password');
         $user = $this->mymodel->authenticate(array('email'=>$this->input->post('email')));

         if (  $this->input->post('email') == $user->email &&
               // password_verify($this->input->post('password') , $user->password)
               $this->input->post('password') == $user->password
            ) { 
               $this->session->set_userdata('is_login',$data);
               redirect("/mains");
         } else {
               $this->session->set_flashdata('message', '로그인에 실패 하였습니다.');
               // password_verify($this->input->post('password') , $user->password);
               redirect('/login_c');
         }
      }
}