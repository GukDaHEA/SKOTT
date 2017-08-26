<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Login_m'); 
	}

	public function index()
	{
		$this->load->view('login_v', array('returnURL'=>$this->input->get('returnURL')));
	}

      function authentication()
      {
            $this->load->helper('password');
            $user = $this->Login_m->authenticate(array('email'=>$this->input->post('email')));
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ( $user == true &&
            $email == $user->email &&
            // password_verify($password, $user->password)
            $password == $user->password
            ) {
            $this->session->set_userdata(array('is_login' => trye, 'user_idx' => $user->user_id));
            $this->session->set_userdata(array('is_login' => true, 'name' => $user->name));
            $this->session->set_userdata(array('is_login' => true, 'email' => $email));
            // $returnURL = $this->input->get('returnURL');
            // if($returnURL == false){
            //    redirect("/mains");
            // }
            header('Location: /mains');
         } else {
            $this->session->set_flashdata('message','로그인에 실패 하였습니다. 아이디 또는 비밀번호를 확인해 주세요.');
            header('Location: /login');
         }
      }

      function logout() 
      {
         $this->session->sess_destroy();
            if($returnURL == false){
            header('Location: /mains');
            }
      }

      function join() 
      {
         $this->load->library('form_validation');
         // $a_tb = $this->accounts;
         $this->load->helper('password');

         $input_dt = $this->input->post();
         $this->form_validation->set_rules('email', '이메일 주소', 'trim|required|valid_email|is_unique[user.email]');
         $this->form_validation->set_rules('password', '비밀번호', 'trim|required|min_length[6]|max_length[30]|matches[pswd2]');
         $this->form_validation->set_rules('pswd2', '비밀번호 확인', 'trim|required');
         $this->form_validation->set_rules('name', '이름', 'trim|required|min_length[2]|max_length[30]');
         $this->form_validation->set_rules('phone', '휴대전화번호', 'trim|required|min_length[10]|max_length[20]|is_unique[user.phone]');

         if($this->form_validation->run() === false) {
            $this->load->view('join');
         } else {
            $hash = password_hash($this->input->post('password'),PASSWORD_BCRYPT);
            
            $this->Login_m->user_add(array(
               'email'=>$this->input->post('email'),
               // 'password'=>$hash,
               'password'=>$this->input->post('password'),
               'name'=>$this->input->post('name'),
               'phone'=>$this->input->post('phone')
            ));

            //E-mail 전송 부분
            $users = $this->Login_m->gets(array('email'=>$this->input->post('email')));
            $this->load->library('email');
            $this->email->initialize(array('mailtype'=>'html'));
            $this->email->from('zziltongjh@gmail.com', 'KIMJUNGHWAN');
            // $this->email->to($this->config->item('dev_receive_email')); //개발시 나한테 보낼 때 
            $this->email->to($users->email);
            $this->email->subject('(SKOTT) 확인 메일이 도착하였습니다.');
            $this->email->message('확인해 주세욧');
            $this->email->send();
            //E-mail 기능 끝

            $this->session->set_flashdata('message', '회원가입이 완료되었습니다.');
            header('Location: /login');
         }
      }
}