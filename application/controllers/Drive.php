<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drive extends MY_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('Call_m');
		$this->load->model('Drive_m');
	}

	public function index()
	{
		
	}

	public function drive() {
		$SStart = $this->input->post('SStart');
		$end = $this->input->post('end');
		$totalTime = $this->input->post('totalTime');
		$totalDistance = $this->input->post('totalDistance');
		$taxiFare = $this->input->post('taxiFare');
		$Slat = $this->input->post('Slat');
		$Slon = $this->input->post('Slon');
		$Elat = $this->input->post('Elat');
		$Elon = $this->input->post('Elon');

		$this->load->view('m_header');
		$this->load->view('drive_v', array(
				'start' => $SStart,
				'end' => $end,
				'totalTime' => $totalTime,
				'totalDistance' => $totalDistance,
				'taxiFare' => $taxiFare,
				'Slat' => $Slat,
				'Slon' => $Slon,
				'Elat' => $Elat,
				'Elon' => $Elon
				)
			);
	}

	public function call() {

		$this->drivecheck();
	}

	public function driveok () {

		$this->output->set_content_type('application/json');
		$result = array();

		$data = $this->input->post();

		$insert['call_id'] = $data['call_id'];
		$call = $this->Call_m;
		$result = $call->test($insert);

		echo json_encode($result);
	}

	function drivecheck() {

		$call = $this->Call_m;
		$symbol = '';

		$chkreservation = $call->checkCallReservation();
		$data['list'] = $call->checkCallReservation();

		if (!empty($chkreservation)) {
			$symbol = '<a href="javascript:" id="'.$chkreservation->call_id.'" onclick="test(this)"><div style="z-index: 0; position: releative; margin-top: 100px; background-color: #000; color: #FFF; width: 250px; height: 250px">'.$chkreservation->departure.' 에서 <br/>'.$chkreservation->destination.'('.$chkreservation->distance.') 까지<br/> 가는 콜이 있습니다. <br/> 받으시겠습니까?</div></a>';
		}
		// echo $symbol;
		$this->load->view('m_header');
		$this->load->view('call_v', $chkreservation);
	}

	public function drivecall() {

		$this->output->set_content_type('application/json');
		$result = array();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$data = $this->input->post();
			$insert = array();
			$insert['useridx'] = !empty($data['user_idx']) ? $data['user_idx'] : '';
			$insert['departure'] = !empty($data['departure']) ? $data['departure'] : '';
			$insert['destination']  = !empty($data['destination']) ? $data['destination'] : '';
			$insert['distance']  = !empty($data['totalDistance']) ? $data['totalDistance'] : '';
			$insert['time'] = !empty($data['totalTime']) ? $data['totalTime'] : '';
			$insert['fare'] = !empty($data['taxiFare']) ? $data['taxiFare'] : '';
			$insert['Slat'] = !empty($data['Slat']) ? $data['Slat'] : '';
			$insert['Slon'] = !empty($data['Slon']) ? $data['Slon'] : '';
			$insert['Elat'] = !empty($data['Elat']) ? $data['Elat'] : '';
			$insert['Elon'] = !empty($data['Elon']) ? $data['Elon'] : '';

			$call = $this->Call_m;
			$result = $call->addDriveCall($insert);

		}
		echo json_encode($result);

	}

	public function call_login() {
		$this->load->view('call_login');
	}

	function authentication()
      {
            $user = $this->Drive_m->authenticate(array('id'=>$this->input->post('id')));
            $id = $this->input->post('id');
            $password = $this->input->post('password');
            $this->output->set_content_type('application/json');
			$data = $this->input->post('lat', TRUE);

            if ( $user == true &&
            $id == $user->driver_id &&
            $password == $user->password
            ) {
            $this->session->set_userdata(array('is_login' => true, 'driver_id' => $user->driver_id));
            $this->session->set_userdata(array('is_login' => true, 'name' => $user->name));
            $this->session->set_userdata(array('is_login' => true, 'belong' => $user->belong));
            $this->session->set_userdata(array('is_login' => true, 'area' => $user->area));
            $this->session->set_userdata(array('is_login' => true, 'picture' => $user->picture));
            $this->session->set_userdata(array('is_login' => true, 'car' => $user->car_num));
            $this->session->set_userdata(array('is_login' => true, 'lat' => $lat));
            $this->session->set_userdata(array('is_login' => true, 'lon' => $lon));


            header('Location: /Drive/call');
         } else {
			 echo "<script>alert(\"로그인에 실패하였습니다.\");</script>";		
            header('Location: /Drive/call_login');
         }
      }
    function geolocations() {
    	$this->output->set_content_type('application/json');
    	$result = array();

				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					$data = $this->input->post();
					$result[0] = $data['lat'];
					$result[1] = $data['lon'];

					echo json_encode($result);
				} else {
					echo "qq";
				}
    }
	public function call_send_start_end() {

			$this->output->set_content_type('application/json');
			 	//ajax구문
				if ($_SERVER['REQUEST_METHOD'] === 'POST') {

					$data = $this->input->post(NULL, TRUE);
					$reco_marker_sort = $data['reco_sort'];
					
					$reco_sidebar_content = $this->Map_m->recommand_spot('limit',$reco_marker_sort);

					echo json_encode($reco_sidebar_content);
				}
	}
	public function accept_call() {

		$this->output->set_content_type('application/json');
		$result = array();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$data = $this->input->post();
			$update = array();
			$update['useridx'] = !empty($data['user_idx']) ? $data['user_idx'] : '';
			$update['departure'] = !empty($data['departure']) ? $data['departure'] : '';
			$update['destination']  = !empty($data['destination']) ? $data['destination'] : '';
			$update['distance']  = rand(0, 30) . 'km';

			$call = $this->Call_m;
			$result = $call->$update;

		}
		echo json_encode($result);

		// $this->load->view('call_accept');
	}

	public function waitCall() {

		$this->output->set_content_type('application/json');
		$result = array();
		$data = array();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$data = $this->input->post();
			$check = !empty($data['call_id']) ? $data['call_id'] : '';

			$call = $this->Call_m;
			$result = $call->wait_Call($check);

			if (!empty($result)){
				echo json_encode($result);
			} else {
				echo '오류';
			}
		}
		// $this->load->view('call_accept');
	}


	public function waitCall_drive() {

		$this->output->set_content_type('application/json');
		$result = array();
		$data = array();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			// $data = $this->input->post();
			// $check = !empty($data['call_id']) ? $data['call_id'] : '';

			$call = $this->Call_m;
			$result = $call->wait_Call_drive();

			if (!empty($result)){
				echo json_encode($result);
				$result = 0;
			} else {
				echo '오류';
			}
		}
	}

	public function call_accept() {

		$idx = $this->input->post('call_id');
		$driverId = $this->input->post('driver_id');
		$useridx = $this->input->post('user_id');
		$call = $this->Call_m;
		$drive = $this->Drive_m;

		$result['call'] = $call->whtPlace($idx, $driverId);
		$result['user'] = $drive->userCheck($useridx);

		$this->load->view('m_header');
		$this->load->view('call_accept', $result);
	}

	function logout() {
		$this->session->sess_destroy();
		header('Location: /Drive/call_login');
	}

	public function cus_wide() {
		$start = $this->input->post('start_spot');
		$end = $this->input->post('end_spot');
		$driveIdx = $this->input->post('driveIdx');
		$call_id = $this->input->post('call_id');
		$Slat = $this->input->post('Slat');
		$Slon = $this->input->post('Slon');
		$Elat = $this->input->post('Elat');
		$Elon = $this->input->post('Elon');
		$taxiFare = $this->input->post('taxiFare');

		$result = array();

		$drive = $this->Drive_m;
		$result['driver'] = $drive->driverCheck($driveIdx);
		$result['start'] = $start;
		$result['end'] = $end;
		$result['Slat'] = $Slat;
		$result['Slon'] = $Slon;
		$result['Elat'] = $Elat;
		$result['Elon'] = $Elon;
		$result['taxiFare'] = $taxiFare;

		$this->load->view('m_header');
		$this->load->view('cus_wide_v', $result);
	}

	public function callist() {
		$start=1;
		$limit=5;
		$call = $this->Call_m;
		$data['list'] = $call->get_list('', $start, $limit);

		$this->load->view('m_header');
		$this->load->view('callist_v',$data);
	}

	public function report() {
		$this->load->view('m_header');
		$this->load->view('call_v');
	}

	public function Guider() {
		$Slat = $this->input->post('Slat');
		$Slon = $this->input->post('Slon');
		$Elat = $this->input->post('Elat');
		$Elon = $this->input->post('Elon');
		$taxiFare = $this->input->post('taxiFare');

		$result = array();

		$result['Slat'] = $Slat;
		$result['Slon'] = $Slon;
		$result['Elat'] = $Elat;
		$result['Elon'] = $Elon;
		$result['taxiFare'] = $taxiFare;

		$this->load->view('m_header');
		$this->load->view('Guider_v',$result);
	}

	public function driveSuc() {
		$userid = $this->input->post('user_id');
		$userphone = $this->input->post('user_phone');
		$destination = $this->input->post('destination');

		$result = array();

		$result['user_id'] = $userid;
		$result['user_phone'] = $userphone;
		$result['destination'] = $destination;

		$this->load->view('m_header');
		$this->load->view('Success_v', $result);
	}

	public function suGo() {
		$this->load->view('Sugo_v');
	}

	public function suGo_user() {
		$this->load->view('Sugo_user_v');
	}
}
