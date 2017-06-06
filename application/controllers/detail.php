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
      $this->load->view('header');

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

      $this->load->view('footer');

   }

   public function check() {
      $returnURL = $this->input->get('returnURL');
      if($returnURL == false){
               redirect("/mains");
            }
            redirect($returnURL);
   }

// // 내가 연습하는 거 
//    public function board_v_write_ok() {
//        // 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
//       $config['upload_path'] = './static/image/review';
//       // git,jpg,png 파일만 업로드를 허용한다.
//       $config['allowed_types'] = 'gif|jpg|png';
//       // 허용되는 파일의 최대 사이즈
//       $config['max_size'] = '1000000';
//       // 이미지인 경우 허용되는 최대 폭
//       $config['max_width'] = '2048';
//       // 이미지인 경우 허용되는 최대 높이
//       $config['max_height'] = '1200';
//       //$config에 코드이크나이터에서 해주는 library에 저장
//       $this->load->library('upload',$config);

//       if (! $this->upload->do_upload("upload")){
//                echo "<script>alert('업로드에 실패했습니다." .$this->upload->display_errors('','')."')</script>";
//             } 
//             else 
//             {
//                $CKEditorFuncNum = $this->input->get('CKEditorFuncNum');
//                $data =  $this->upload->data();
//                $filename = $data['file_name'];
//                $url = '/static/image/review/'.$filename;
               
//                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$CKEditorFuncNum."', '".$url."', '전송에 성공')</script>";
//              }      
//    }


//    public function board_v_write() {

//       echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'; 
//       // 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
//       $config['upload_path'] = './static/image/review';
//       // git,jpg,png 파일만 업로드를 허용한다.
//       $config['allowed_types'] = 'gif|jpg|png';
//       // 허용되는 파일의 최대 사이즈
//       $config['max_size'] = '1000000';
//       // 이미지인 경우 허용되는 최대 폭
//       $config['max_width'] = '2048';
//       $config['max_height'] = '1200';
//       // 이미지인 경우 허용되는 최대 높이
//       $this->load->library('upload',$config);
//       //$config에 코드이크나이터에서 해주는 library에 저장
 
//       if($this->session->userdata('is_login'))
//       {
//          //form
//          if($_POST) 
//          {

//             if( !$this->input->post('board_subject', true) OR !$this->input->post('board_contents', true) ) {
//                echo "<script>alert(\"비정상적인 접근입니다. \");</script>";
//                redirect('/Detail/board_v_write','refresh');
//                exit;
//             }

//             //파일 업로드가 되는지 확인
//             if (! $this->upload->do_upload("user_upload_file")){
//                echo $this->upload->display_errors();
//             } 
//             else 
//             {
//                $data =  $this->upload->data();
//                echo "성공";
//                $file_url = "/static/image/review/".$data['file_name'];
//             }


//             $board_subject = $this->input->post('board_subject', true);
//             $board_contents = $this->input->post('board_contents', true);
//             $user_name = $this->session->userdata('name');
//             $user_email = $this->session->userdata('email');
//              $user_picture = $file_url;

//             $result = $this->board_m->board_insert($board_subject, $board_contents, $user_name, $user_email, $user_picture);

//             if($result)
//             {
//                echo "<script>alert(\"입력되었습니다.\");</script>";
//                redirect('/Detail/detail/1','refresh');
//                exit;
//             }
//             else
//             {
//                echo "<script>alert(\"다시 입력해주세요.\");</script>";
//                redirect('/Detail/board_v_write','refresh');
//                exit;
//             }

//          }

//          else
//             {

//                $this->load->view('header');
//                $this->load->view('board_v_write');
//                $this->load->view('footer');
//             }
//          }
//       else 
//       {
//          echo "<script>alert(\"로그인이 필요합니다.\");</script>";
//             redirect('/Login','refresh');
//             exit;
//       }
//    }


//    public function board_delete() {
//       $id = $this->uri->segment(3);
// // $returnURL = $this->input->get('returnURL');
//       $this->board_m->get_delete($id);
//        // $detail_result = $this->Detail_m->detail();

//       // $ids = $detail_result->reco_idx;
//       // echo ('1');
//       header("Location: /Detail/detail/1");
//       // echo ($returnURL);
//       // redirect('/Detail/detail/1',0);
//    }

//    public function board_v_modify() {

//       echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'; 
//       $config['upload_path'] = './static/image/review';
//       $config['allowed_types'] = 'gif|jpg|png';
//       $config['max_size'] = '1000000';
//       $config['max_width'] = '2048';
//       $config['max_height'] = '1200';
//       $this->load->library('upload',$config);


//       $id = $this->uri->segment(3);
//       //form
//       if($_POST) 
//       {

//          if( !$this->input->post('modify_subject', true) OR !$this->input->post('modify_contents', true) ) {
//             echo "<script>alert(\"비정상적인 접근입니다. \")</script>";
//             redirect('/Detail/detail/1','refresh');
//             exit;
//          }

//             //파일 업로드
//             if (! $this->upload->do_upload("user_upload_file")){
//                echo $this->upload->display_errors();
//                $file_url = "/static/image/review/".$data['file_name'];
//             } 
//             else 
//             {
//                $data =  $this->upload->data();
//                echo "성공";
//                $file_url = "/static/image/review/".$data['file_name'];
//             }

//          $modify_subject = $this->input->post('modify_subject', true);
//          $modify_contents = $this->input->post('modify_contents', true);
//          $modify_picture = $file_url;
//          $result = $this->board_m->board_modify($modify_subject, $modify_contents, $id, $modify_picture);
//          if($result)
//          {
//             echo "<script>alert(\"입력되었습니다\");</script>";
//             redirect('/Detail/detail/1','refresh');
//             exit;
//          }
//          else
//          {
//             echo "<script>alert(\"다시 입력해주세요. \")</script>";
//             redirect('/Detail/board_v_modify','refresh');
//             exit;
//          }
//       }

//       else
//          {

//             $data['views'] = $this->board_m->get_modify_view($id);
//             $this->load->view('board_v_modify', $data);
//          }
//    }

//    function url_explode($url, $key)
//    {
//       $cnt = count($url);
//       for($i=0; $cnt>$i; $i++ )
//       {
//          if($url[$i] ==$key)
//          {
//             $k = $i+1;
//             return $url[$k];
//          }
//       }
//    }

//    function segment_explode($seg)
//    {
//       //세크먼트 앞뒤 '/' 제거후 uri를 배열로 반환
//       $len = strlen($seg);
//       if(substr($seg, 0, 1) == '/')
//       {
//          $seg = substr($seg, 1, $len);
//       }
//       $len = strlen($seg);
//       if(substr($seg, -1) == '/')
//       {
//          $seg = substr($seg, 0, $len-1);
//       }
//       $seg_exp = explode("/", $seg);
//       return $seg_exp;
//    }

   function drive() {
      $this->load->view('drive_v');
   }
}
