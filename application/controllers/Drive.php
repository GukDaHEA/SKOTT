<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drive extends MY_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('call_m');
		$this->load->model('Drive_m');
	}

	public function index()
	{
		
	}
	public function drive() {

		$start = $this->input->post('start');
		$end = $this->input->post('end');

		$this->load->view('drive_v', array(
				'start' => $start,
				'end' => $end
				)
			);
	}

	public function call() {

		$this->drivecheck();
		$this->load->view('call_v');
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
			$insert['distance']  = rand(0, 30) . 'km';

			$call = $this->call_m;
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

            if ( $user == true &&
            $id == $user->driver_id &&
            $password == $user->password
            ) {
            $this->session->set_userdata(array('is_login' => true, 'name' => $user->name));
            $this->session->set_userdata(array('is_login' => true, 'belong' => $user->belong));
            $this->session->set_userdata(array('is_login' => true, 'area' => $user->area));
            $this->session->set_userdata(array('is_login' => true, 'picture' => $user->picture));
            
            header('Location: /Drive/call');
         } else {
            $this->session->set_flashdata('message','로그인에 실패 하였습니다. 아이디 또는 비밀번호를 확인해 주세요.');
            // header('Location: /Drive/call_login');
         }
      }
}
