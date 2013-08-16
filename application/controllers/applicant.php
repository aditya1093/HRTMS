<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicant extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
		$this->load->model('applicant_model');
		$query = $this->applicant_model->applicant_list();
		$data['records'] = $query;

		
		$this->load->view('applicant/registration_view',$data);
		}
		else {

    		$this->load->view('login_view');
		}	
	
	}

	function accept() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
	
		$this->load->view('applicant/accept_applicant');
		}
		else {

    		$this->load->view('login_view');
		}	
	
	}


}

/* End of file applicant.php */
/* Location: ./application/controllers/applicant.php */