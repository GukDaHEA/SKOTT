<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drive extends MY_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('call_m');

	}

	public function index()
	{
		
	}

	public function drive() {

				$this->load->view('drive_v');
	}

	public function drive_success() {

		$this->drivecheck();
		$this->load->view('drive_sucess');
	}

	public function driveok () {

		$this->output->set_content_type('application/json');
		$result = array();

		$data = $this->input->post();

		$insert['call_id'] = $data['call_id'];
		$call = $this->call_m;
		$result = $call->test($insert);

		echo json_encode($result);
	}

	function drivecheck() {

		$call = $this->call_m;
		$symbol = '';

		$chkreservation = $call->checkCallReservation();

		if (!empty($chkreservation)) {
			$symbol = '<a href="javascript:" id="'.$chkreservation->call_id.'" onclick="test(this)"><div style="z-index: 0; position: releative; margin-top: 100px; background-color: #000; color: #FFF; width: 250px; height: 250px">'.$chkreservation->departure.' 에서 <br/>'.$chkreservation->destination.'('.$chkreservation->distance.') 까지<br/> 가는 콜이 있습니다. <br/> 받으시겠습니까?</div></a>';
		}

		echo $symbol;
	}

	public function drivecall () {

		$this->output->set_content_type('application/json');
		$result = array();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$data = $this->input->post();

			$insert = array();
			$insert['userIdx'] = 34;
			$insert['departure'] = !empty($data['departure']) ? $data['departure'] : '';
			$insert['destination']  = !empty($data['destination']) ? $data['destination'] : '';
			$insert['distance']  = !empty($data['distance']) ? $data['distance'] : '';

			$call = $this->call_m;
			$result = $call->addDriveCall($insert);

		}
		echo json_encode($result);
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
}
