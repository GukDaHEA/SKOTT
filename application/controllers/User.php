<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('User_m'); 
	}

	public function index()
	{

	}
	public function user() {
      if($this->session->userdata('is_login')){
         $id = $this->uri->segment(3);
         $email = $this->session->userdata('email');
         $data['views'] = $this->User_m->get_view($email);
         $this->load->view('header');
   		$this->load->view('User_v', $data);
      }
      else
      {
         echo "<script>alert(\"로그인이 필요합니다.\");</script>";
            redirect('/Login','refresh');
            exit;
      }
	}
	 public function user_modify() {

      echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'; 
       $config['upload_path'] = './static/image/user';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '10000000000';
      $config['max_width'] = '3500';
      $config['max_height'] = '2400';
      $this->load->library('upload',$config);

      $id = $this->uri->segment(3);
      $email = $this->session->userdata('email');
      //form
      if($_POST) 
      {
         if( !$this->input->post('name', true) OR !$this->input->post('nation', true) ) {
            echo "<script>alert(\"비정상적인 접근입니다. \")</script>";
            redirect('/mains','refresh');
            exit;
         }
         $up = $this->upload->do_upload("user_upload_file");
         $check = $this->input->post('file');
            //파일 업로드
            if (! $up ){
               $file_url = $check;
            }
            else
            {
               $data =  $this->upload->data();
               $file_url = "/static/image/user/".$data['file_name'];
            }

         $modify_name = $this->input->post('name', true);
         $modify_nation = $this->input->post('nation', true);

         $result = $this->User_m->user_modify($modify_name, $modify_nation, $email, $file_url);
         if($result)
         {
            echo "<script>alert(\"입력되었습니다\");</script>";
            $data['views'] = $this->User_m->get_modify_view($email);
            $this->load->view('header');
            $this->load->view('User_v', $data);
         }
         else
         {
            echo "<script>alert(\"다시 입력해주세요. \")</script>";
            redirect('/User/user_modify','refresh');
            exit;
         }
      }

      else
         {

            $data['views'] = $this->User_m->get_modify_view($email);
            $this->load->view('User_v', $data);
         }
   }
}