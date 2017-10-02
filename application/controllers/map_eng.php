<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map_eng extends MY_Controller {


	function __construct() {
		parent::__construct ();
		$this->load->model('Map_m');
         }

	function index(){
		echo "안녕";
	}

	// public function test() {

	// 	$this->output->set_content_type('application/json');
 
	// 	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// 		$data = $this->input->post(NULL, TRUE);
	// 		$test = 'asdsad';
	// 		echo json_encode($test);
	// 	} else {
	// 		echo 'get';
	// 	}
	// }
	
	public function map_v()
	{

		$this->load->view('header_eng');
		$recommand_name = $this->Map_m->reco_name();

		$recommand_name= json_encode($recommand_name, JSON_UNESCAPED_UNICODE);

		// $this->load->view('header3', 
		// 	array(	
		// 		'recommand_name'=>$recommand_name								
		// 		)				
		// );

		// $this->load->view('header3');


		$reco_sidebar_content = $this->Map_m->recommand_spot('limit');

		$lo = $this->Map_m->recommand_spot();

		$location_sort = $this->Map_m->recommand_spot_sort();

		for ($i=0; $i<count($lo); $i++) {
			$marker_lat[] = $lo[$i]->lat;
			$marker_lng[] = $lo[$i]->lng;
			$marker_sort[] = $lo[$i]->reco_sort;
			$marker_reco_name[] = $lo[$i]->title;
			$marker_idx[] = $lo[$i]->reco_idx;
			// $dt["positions"][] = array("lat"=>$marker_lat[$i],"lng"=>$marker_lng[$i]);
		}

        $marker_location = json_encode($lo);

        $marker_location_sort = json_encode($location_sort);

		$this->load->view('map_v_eng', 
			array(	
				'lo'=>$lo,			 //전체 디비 
				'marker_location'=>$marker_location, //json_encode 변환 전체 디비
				'reco_sidebar_content'=>$reco_sidebar_content, //전체 디비중 별점이 높은 관광지 10곳을 뽑음
				'location_sort'=>$location_sort,
				'marker_location_sort'=>$marker_location_sort,
				'recommand_name'=>$recommand_name,	
				'reco_idx'=>$marker_idx[0]
				)					//변수 이름으로
		);

	}

	public function map_v_ajax_marker() {
			 	// ajax구문
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					$this->output->set_content_type('application/json');

					$data = $this->input->post(NULL, TRUE);
					$reco_marker_idx = $data['reco_sort'];

					$reco_sidebar_content = $this->Map_m->recommand_spot_ajax_marker($reco_marker_idx);

					echo json_encode($reco_sidebar_content);
		}

	} //해당 지역에 대한 마커를 생성하기 위한 ajax

	public function map_v_ajax_marker_content_dynamic() {

			$this->output->set_content_type('application/json');
			 	//ajax구문
				if ($_SERVER['REQUEST_METHOD'] === 'POST') {

					$data = $this->input->post(NULL, TRUE);
					$reco_marker_sort = $data['reco_sort'];
					
					$reco_sidebar_content = $this->Map_m->recommand_spot('limit',$reco_marker_sort);

					echo json_encode($reco_sidebar_content);
				}

		}

		public function map_v_ajax_marker_content() {
			 	//ajax구문
				$this->output->set_content_type('application/json');

				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					$data = $this->input->post(NULL, TRUE);
					$reco_sidebar_idx = $data['reco_idx'];

					$reco_sidebar_idx = $this->Map_m->recommand_spot_ajax($reco_sidebar_idx);

					echo json_encode($reco_sidebar_idx);
				}
		} //HTML에 해당 div 클릭시 나타나는 marker_content

		public function search_marker_content() {
			 	//ajax구문
				$this->output->set_content_type('application/json');

				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					$data = $this->input->post(NULL, TRUE);
					$search_marker_text = $data['search_text'];

					$search_marker_text = $this->Map_m->search_marker_ajax($search_marker_text);

					echo json_encode($search_marker_text);
				}
		} //HTML에 해당 div 클릭시 나타나는 marker_content


		public function like_content_click() {
			 	//ajax구문
				$this->output->set_content_type('application/json');

				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					$data = $this->input->post(NULL, TRUE);
					$reco_idx = $data['reco_idx'];

					$like_content = $this->Map_m->like_content_ajax($reco_idx);

					echo json_encode($like_content);
				}
		} //HTML에 해당 div 클릭시 나타나는 marker_content





	function detail($url) {
		$db = $this->mymodel;

      $detail_result = $db->detail($url);
      
      if (empty($detail_result))
         $detail_result = array();

      $idx = $detail_result->idx;
      $spot_idx = $detail_result->spot_idx;
      $text = $detail_result->text;

      $idx = array();   
      $lat = array();
      $lng = array();
      $driving_idx = array();
      $date = array();

      $this->load->view('header.php');
      $this->load->view('detail', 
         array(
            'idx' => $idx,
            'spot_idx' => $spot_idx,
            'text' => $text
         )               //변수 이름으로
      );
      $this->load->view('footer.php');
	}

	function location_infos() {

		$idx = array();	
		$lat = array();
		$lng = array();
		$driving_idx = array();
		$date = array();

		for ($i=0; $i<count($result); $i++) {
			$idx[] = $result[$i]->idx;
			$lat[] = $result[$i]->lat;
			$lng[] = $result[$i]->lng;
			$driving_idx[$i]= $result[$i]->driving_idx;
			$date[$i]= $result[$i]->date;
		}							//디비 값 넣기

		//print_r($name);
		//var_dump($name);
		//echo json_encode($name);
		// echo md5('hello');

		$this->load->view('test', 
			array(
				'idx' => $idx,
				'lat' => $lat,
				'lng' => $lng,
				'driving_idx' => $driving_idx,
				'date' => $date
				)					//변수 이름으로
		);

	}


   public function mains() {
			$this->load->view('mains'); 
			$this->load->view('footer.php');
		}
 public function navi() {
			$this->load->view('navi');
		}

	 public function test_main() {
			$this->load->view('test_main'); 
		}


public function ajax_test()
	{	
		$data = $this->input->post(NULL, TRUE);

		$latitude = $data['latitude'];
		$longitude = $data['longitude'];
		$apikey = $data['apikey'];

		if ($fp = fopen('https://apis.daum.net/local/geo/coord2addr?latitude=' . $latitude . '&longitude=' . $longitude .'&output=json&apikey=' . $apikey, 'r')) {
			$content = '';
			while ($line = fread($fp, 1024)) {
				$content .= $line;
			}
		}

		print_r($content);

	}


	function getList() { // 리뷰 뿌려주기
      $HEADER_HTML = " <div style='width:100%; border-top:1px solid #aaaaaa; height:30px; clear:both; color:#999999 '>
         <span style='width:10%; float:left; text-align:center; line-height:30px'>
            No.
         </span>
         <span style='width:10%; float:left; text-align:center; line-height:30px'>
            별점
         </span>
         <span style='width:10%; float:left; text-align:center; line-height:30px'>
            아이디
         </span>
         <span style='width:10%; float:left; text-align:center; line-height:30px'>
            제목
         </span>
         <span style='width:30%; float:left; text-align:center; line-height:30px'>
            작성날짜
         </span>
      ";
      $FOOTER_HTML = "
      </div>
      ";
      $return_html = $HEADER_HTML;
      $return_value = $this->mymodel->getList();
      $data['review'] = $return_value;
         $idx2 = 0;

      foreach ($data['review'] as $items){
         $idx2++;
         $return_html .= " <div style='width:100%; border-top:1px solid #aaaaaa; height:30px; clear:both; color:#999999 '>
         <span style='width:10%; float:left; text-align:center; line-height:30px'>
            $idx2
         </span>
         <span style='width:10%; float:left; text-align:center; line-height:30px'>
            $items[star]
         </span>
         <span style='width:10%; float:left; text-align:center; line-height:30px'>
            $items[make]
         </span>
         <span style='width:10%; float:left; text-align:center; line-height:30px'>
            <a style='text-decoration:underline;cursor:pointer' onclick=\"javascript:viewBoard('$items[review_num]');\"> $items[title] </a>
         </span>
         <span style='width:30%; float:left; text-align:center; line-height:30px'>
            $items[adddate]
         </span>
         ";
      }
      $return_html .= $FOOTER_HTML;
      echo $return_html;
   }

   function getView() {
      $data = $this->mymodel->getView();

      echo $data->make . "^" . $data->star . "^" . $data->title . "^" . $data->content;
   }

   public function write_ok(){
      $return_value = $this->mymodel->insert_board();
      echo $return_value;
   }

     public function json() {
			$this->load->view('json'); 
		}

	  public function time() {
			$this->load->view('time'); 
		}
}