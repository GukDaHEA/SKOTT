<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends MY_Controller {


	function __construct() {
		parent::__construct ();
		$this->load->model('Map_m');
         }

	function index(){
		if(MobileCheck()){ // 모바일일 경우  아래 실행
        	$this->load->view('m_header');
  		}else
  		{  //pc 일 경우 실행
			$this->load->view('header');
  		}
		$recommand_name = $this->Map_m->reco_name();

		$recommand_name= json_encode($recommand_name, JSON_UNESCAPED_UNICODE);

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

		$this->load->view('map_v', 
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