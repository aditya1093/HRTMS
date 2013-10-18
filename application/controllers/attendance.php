<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attendance extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			$this->load->model('applicant_model');
			$query = $this->applicant_model->trainee_list();
			$data['records'] = $query;

			$this->load->model('client_model');
			$query = $this->client_model->list_company();
			$data['records2'] = $query;
			
			//$this->load->view('company/company_view', $data);
			$this->load->view('user/training/attendance_view',$data);
		}
		else {
   			$this->session->set_userdata('login_type', 'employee');
    		$this->load->view('login_view');
		}	
	}

// 	function present_applicant(){

// 		$data = array(
//  			   'name' => $name,
//     			'email' => $email
// );

// 		$this->
// 	}

	

}

/* End of file attendance.php */
/* Location: ./application/controllers/attendance.php */




