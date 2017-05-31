<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Detail_m');
      $this->load->model('board_m');
      $this ->load-> helper('date');
	}

	function index() { 

   }


	function detail($url) { 
	  $db = $this->Detail_m;

      $detail_result = $db->detail($url);
      
      if (empty($detail_result))
         $detail_result = array();

      $idx = $detail_result->reco_idx;
      $lat = $detail_result->lat;
      $lng = $detail_result->lng;
      $name = $detail_result->title;
      $address = $detail_result->reco_address;
      $text = $detail_result->reco_text;

      // $this->load->view('header.php');
      $this->load->view('detail_v', 
         array(
            'idx'=>$idx,         //전체 디비 
            'lat'=>$lat, //json_encode 변환 전체 디비
            'lng'=>$lng, //전체 디비중 별점이 높은 관광지 10곳을 뽑음
            'name'=>$name,
            'reco_address'=>$address,
            'reco_text'=>$text
            ));


      // 리뷰 페이지 시작!!
      $search_word = $page_url = '';
      $uri_segment = 4;

      //주소중에서 q(검색어) 세그먼트가 있는지 검사하기 위해 주소를 배열로 변환
      $uri_array = $this->segment_explode($this->uri->uri_string());

      if( in_array('q', $uri_array) ) {
         //주소에 검색어가 있을 경우의 처리. 즉 검색시
         $search_word = urldecode($this->url_explode($uri_array, 'q'));

         //페이지네이션용 주소
         $page_url = '/q/'.$search_word;
         $uri_segment = 6;
      }
      
      $this->load->library('pagination');
         //페이지네이션 설정
         $config['base_url'] = '/Detail/detail/'.$url.'/'.$page_url.'/page/'; //페이징 주소
         $config['total_rows'] = $this->board_m->get_list('count' , '', '', $search_word); //게시물의 전체 갯수
         $config['per_page'] = 5; //한 페이지에 표시할 게시물 수
         $config['uri_segment'] =  $uri_segment; //페이지 번호가 위치한 세그먼트

         //페이지네이션 초기화
         $this->pagination->initialize($config);

         //페이징 링크를 생성하여 view에서 사용할 변수에 할당
         $data['pagination'] = $this->pagination->create_links();
         //게시판 목록을 불러오기 위한 offset, limit 값 가져오기
         $page = $this->uri->segment(5 , 1);
         if ( $page > 1 )
         {
            $start = (($page/$config['per_page'])) * $config['per_page'];
         }
         else
         {
            $start = ($page-1) * $config['per_page'];
         }

         $limit = $config['per_page'];
         $data['list'] = $this->board_m->get_list('', $start, $limit, $search_word);

         $this->load->view('board_v', $data);
         //리뷰 페이지 끝!
      $this->load->view('footer.php');
   }


   public function board_v_view() {

      $id = $this->uri->segment(3);

      $data['views'] = $this->board_m->get_view($id);

      $this->load->view('header');
      $this->load->view('board_v_view',$data);
      $this->load->view('footer');
   }

   public function check() {
      $returnURL = $this->input->get('returnURL');
      if($returnURL == false){
               redirect("/mains");
            }
            redirect($returnURL);
   }


   public function board_v_write() {

      echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'; 
      $config['upload_path'] = './static/image/review';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '1000000';
      $config['max_width'] = '2048';
      $config['max_height'] = '1200';
      $this->load->library('upload',$config);

      if($this->session->userdata('is_login'))
      {
         //form
         if($_POST) 
         {

            if( !$this->input->post('board_subject', true) OR !$this->input->post('board_contents', true) ) {
               echo "<script>alert(\"비정상적인 접근입니다. \");</script>";
               redirect('/Detail/board_v_write','refresh');
               exit;
            }

            //파일 업로드
            if (! $this->upload->do_upload("user_upload_file")){
               echo $this->upload->display_errors();
            } 
            else 
            {
               $data =  $this->upload->data();
               echo "성공";
               $file_url = "/static/image/review/".$data['file_name'];
            }


            $board_subject = $this->input->post('board_subject', true);
            $board_contents = $this->input->post('board_contents', true);
            $user_name = $this->session->userdata('name');
            $user_email = $this->session->userdata('email');
             $user_picture = $file_url;

            $result = $this->board_m->board_insert($board_subject, $board_contents, $user_name, $user_email, $user_picture);

            if($result)
            {
               echo "<script>alert(\"입력되었습니다.\");</script>";
               redirect('/Detail/detail/1','refresh');
               exit;
            }
            else
            {
               echo "<script>alert(\"다시 입력해주세요.\");</script>";
               redirect('/Detail/board_v_write','refresh');
               exit;
            }

         }

         else
            {

               $this->load->view('header');
               $this->load->view('board_v_write');
               $this->load->view('footer');
            }
         }
      else 
      {
         echo "<script>alert(\"로그인이 필요합니다.\");</script>";
            redirect('/Login','refresh');
            exit;
      }
   }


   public function board_delete() {
      $id = $this->uri->segment(3);
// $returnURL = $this->input->get('returnURL');
      $this->board_m->get_delete($id);
       // $detail_result = $this->Detail_m->detail();

      // $ids = $detail_result->reco_idx;
      // echo ('1');
      header("Location: /Detail/detail/1");
      // echo ($returnURL);
      // redirect('/Detail/detail/1',0);
   }

   public function board_v_modify() {

      echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'; 
      $config['upload_path'] = './static/image/review';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '1000000';
      $config['max_width'] = '2048';
      $config['max_height'] = '1200';
      $this->load->library('upload',$config);


      $id = $this->uri->segment(3);
      //form
      if($_POST) 
      {

         if( !$this->input->post('modify_subject', true) OR !$this->input->post('modify_contents', true) ) {
            echo "<script>alert(\"비정상적인 접근입니다. \")</script>";
            redirect('/Detail/detail/1','refresh');
            exit;
         }

            //파일 업로드
            if (! $this->upload->do_upload("user_upload_file")){
               echo $this->upload->display_errors();
               $file_url = "/static/image/review/".$data['file_name'];
            } 
            else 
            {
               $data =  $this->upload->data();
               echo "성공";
               $file_url = "/static/image/review/".$data['file_name'];
            }

         $modify_subject = $this->input->post('modify_subject', true);
         $modify_contents = $this->input->post('modify_contents', true);
         $modify_picture = $file_url;
         $result = $this->board_m->board_modify($modify_subject, $modify_contents, $id, $modify_picture);
         if($result)
         {
            echo "<script>alert(\"입력되었습니다\");</script>";
            redirect('/Detail/detail/1','refresh');
            exit;
         }
         else
         {
            echo "<script>alert(\"다시 입력해주세요. \")</script>";
            redirect('/Detail/board_v_modify','refresh');
            exit;
         }
      }

      else
         {

            $data['views'] = $this->board_m->get_modify_view($id);
            $this->load->view('board_v_modify', $data);
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
