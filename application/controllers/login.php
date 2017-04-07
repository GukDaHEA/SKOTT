<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
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
         $user = $this->login_m->authenticate(array('email'=>$this->input->post('email')));

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

      function logout() 
      {
         $this->session->sess_destroy();
         redirect('/mains');
      }

      function join() 
      {
         $this->load->library('form_validation');
         // $a_tb = $this->accounts;
         $input_dt = $this->input->post();
         $this->form_validation->set_rules('email', '이메일 주소', 'trim|required|valid_email|is_unique[user.email]');
         $this->form_validation->set_rules('password', '비밀번호', 'trim|required|min_length[6]|max_length[30]|matches[pswd2]');
         $this->form_validation->set_rules('pswd2', '비밀번호 확인', 'trim|required');
         $this->form_validation->set_rules('name', '이름', 'trim|required|min_length[2]|max_length[30]');
         $this->form_validation->set_rules('phone', '휴대전화번호', 'trim|required|min_length[10]|max_length[20]|is_unique[user.phone]');

         if($this->form_validation->run() === false) {
            $this->load->view('join');
         } else {
            // $is_user = $a_tb->get_one("email = '{$input_dt['email']}'");
            // if (!empty($is_user)) print_error_back('이미 사용중인 이메일 주소입니다.');
            // $is_user = $a_tb->get_one("phone = '{$input_dt['phone']}'");
            // if (!empty($is_user)) print_error_back('이미 사용중인 휴대전화번호입니다.');
            $hash = password_hash($this->input->post('password'),PASSWORD_BCRYPT);
            
            $this->login_m->user_add(array(
               'email'=>$this->input->post('email'),
               // 'password'=>$hash,
               'password'=>$this->input->post('password'),
               'name'=>$this->input->post('name'),
               'phone'=>$this->input->post('phone')
            ));
            echo "<script>alert(\"회원가입이 완료 되었습니다.\");</script>";
            redirect('/login');
         }
      }
}