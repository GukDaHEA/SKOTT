<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board_c_eng extends CI_Controller {

	function __construct() {
		parent::__construct ();
		$this->load->model('Board_m');
      $this->load->model('Detail_m');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function board_v_eng($url) {
      $this->load->view('header_eng');

      $search_word = $page_url = '';
      $uri_segment = 4;

      //주소중에서 q(검색어) 세그먼트가 있는지 검사하기 위해 주소를 배열로 변환
      $uri_array = $this->segment_explode($this->uri->uri_string());

      if( in_array('q', $uri_array) ) {
         //주소에 검색어가 있을 경우의 처리. 즉 검색시
         $search_word = urldecode($this->url_explode($uri_array, 'q'));

         //페이지네이션용 주소
         $page_url = '/'.$url.'/q/'.$search_word;
         $uri_segment = 7;
      }
      
      $this->load->library('pagination');
         //페이지네이션 설정
         $config['base_url'] = '/board_c_eng/board_v_eng/'.$page_url.'/page/'; //페이징 주소
         $config['total_rows'] = $this->Board_m->get_list('count' , '', '', $search_word, $url); //게시물의 전체 갯수
         $config['per_page'] = 5; //한 페이지에 표시할 게시물 수
         $config['uri_segment'] =  $uri_segment; //페이지 번호가 위치한 세그먼트

         //페이지네이션 초기화
         $this->pagination->initialize($config);

         //페이징 링크를 생성하여 view에서 사용할 변수에 할당
         $data['pagination'] = $this->pagination->create_links();

         //게시판 목록을 불러오기 위한 offset, limit 값 가져오기
         $page = $this->uri->segment($uri_segment , 1);

         if ( $page > 1 )
         {
            $start = (($page/$config['per_page'])) * $config['per_page'];
         }
         else
         {
            $start = ($page-1) * $config['per_page'];
         }

         $limit = $config['per_page'];

         $data['list'] = $this->Board_m->get_list('', $start, $limit, $search_word, $url);

         if (!empty($data['list'])){
           $this->load->view('board_v_eng', $data);
         } else {
            // $this->load->view('board_v',$data);
            echo 'Nothing Contents';
         }
   }


   public function board_v_view_eng($url) {
      $this->load->view('header_eng');
      $id = $this->uri->segment(4);

      $data['views'] = $this->Board_m->get_view($url, $id);

      $this->load->view('board_v_view_eng',$data);
   }

    public function board_v_write_eng($url) {

      echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'; 
      // 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
      $config['upload_path'] = './static/image/review';
      // git,jpg,png 파일만 업로드를 허용한다.
      $config['allowed_types'] = 'gif|jpg|png';
      // 허용되는 파일의 최대 사이즈
      $config['max_size'] = '1000000';
      // 이미지인 경우 허용되는 최대 폭
      $config['max_width'] = '2048';
      $config['max_height'] = '1200';
      // 이미지인 경우 허용되는 최대 높이
      $this->load->library('upload',$config);
      //$config에 코드이크나이터에서 해주는 library에 저장
      $data['url'] = $url;
 
      if($this->session->userdata('is_login'))
      {
         //form
         if($_POST) 
         {

            $url2 = '/board_c_eng/board_v_eng/'.$url;
            $url3 = '/board_c_eng/board_v_write_eng/'.$url;

            if( !$this->input->post('board_subject', true) OR !$this->input->post('board_contents', true) ) {
               echo "<script>alert(\"비정상적인 접근입니다. \");</script>";
               redirect($url3,'refresh');
               exit;
            }

            //파일 업로드가 되는지 확인
            if (! $this->upload->do_upload("user_upload_file")){
               // echo $this->upload->display_errors();
               $user_picture = '';
            } 
            else 
            {
               $data =  $this->upload->data();
               $file_url = "/static/image/review/".$data['file_name'];
               $user_picture = $file_url;
            }

            $star = $this->input->post('star',true);
            $board_subject = $this->input->post('board_subject', true);
            $board_contents = $this->input->post('board_contents', true);
            $user_name = $this->session->userdata('name');
            $user_email = $this->session->userdata('email');

            $result = $this->Board_m->board_insert($board_subject, $board_contents, $user_name, $user_email, $user_picture, $url);

            if($result)
            {
               echo "<script>alert(\"입력되었습니다.\");</script>";
               redirect($url2,'refresh');
               exit;
            }
            else
            {
               echo "<script>alert(\"다시 입력해주세요.\");</script>";
               redirect($url3,'refresh');
               exit;
            }

         }

         else
            {
               $this->load->view('header_eng');
               $this->load->view('board_v_write_eng', $data);
            }
         }
      else
      {
         echo "<script>alert(\"로그인이 필요합니다.\");</script>";
            redirect('/Login','refresh');
            exit;
      }
   }


   public function board_delete($url) {
      $id = $this->uri->segment(4);

      $this->Board_m->get_delete($id);

      $url2 = '/board_c_eng/board_v_eng/'.$url;
      redirect($url2);
   }


    public function board_v_modify_eng($url) {

      $this->load->view('header_eng');
      echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'; 
      $config['upload_path'] = './static/image/review';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '1000000';
      $config['max_width'] = '2048';
      $config['max_height'] = '1200';
      $this->load->library('upload',$config);


      $id = $this->uri->segment(4);


      //form
      if($_POST)
      {
         if( !$this->input->post('modify_subject', true) OR !$this->input->post('modify_contents', true)) 
         {
            $url2 = '/board_c_eng/board_v_eng/'.$url;
            echo "<script>alert(\"비정상적인 접근입니다. \")</script>";
            redirect($url2,'refresh');
            exit;
         }
            //파일 업로드
            if (!$this->upload->do_upload("user_upload_file"))
            {
               // echo $this->upload->display_errors();

               $file_result = $this->Board_m->file_result($id);

               if (empty($file_result))
                  $file_result = array();

               $picture = $file_result->picture;

               // $idx = $detail_result->idx;
               // print_r();

               $file_url = $picture;
            } 
            else 
            {
               $data =  $this->upload->data();
               // echo "성공";
               $file_url = "/static/image/review/".$data['file_name'];
            }
         $url2 = '/board_c_eng/board_v_eng/'.$url;
         $url3 = '/board_c_eng/board_v_modify_eng/'.$url;
         $modify_subject = $this->input->post('modify_subject', true);
         $modify_contents = $this->input->post('modify_contents', true);
         $modify_picture = $file_url;

         $result = $this->Board_m->board_modify($modify_subject, $modify_contents, $id, $modify_picture);
         if($result)
         {
            echo "<script>alert(\"입력되었습니다\");</script>";
            redirect($url2,'refresh');
            exit;
         }
         else
         {
            echo "<script>alert(\"다시 입력해주세요. \")</script>";
            redirect($url3,'refresh');
            exit;
         }
      }

      else
         {

            $data['views'] = $this->Board_m->get_modify_view($id);
            $this->load->view('board_v_modify_eng', $data);
         }
   }

   function url_explode($url, $key)
   {
      $cnt = count($url);
      for($i=0; $cnt>$i; $i++ )
      {
         if($url[$i] ==$key)
         {
            $k = $i+1;
            return $url[$k];
         }
      }
   }

   function segment_explode($seg)
   {
      //세크먼트 앞뒤 '/' 제거후 uri를 배열로 반환
      $len = strlen($seg);
      if(substr($seg, 0, 1) == '/')
      {
         $seg = substr($seg, 1, $len);
      }
      $len = strlen($seg);
      if(substr($seg, -1) == '/')
      {
         $seg = substr($seg, 0, $len-1);
      }
      $seg_exp = explode("/", $seg);
      return $seg_exp;
   }


}
