<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deployment extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		if($this->session->userdata('is_logged_in')) {

		$this->load->model('client_model');
		$query = $this->client_model->list_company();
		$data['records2'] = $query;
	
		//$query = $this->applicant_model->applicant_list();
		$data['records'] = $query;

		
		$this->load->view('trainee/deployment_view',$data);
		}
		else {

    		$this->load->view('login_view');
		}	

	}
	
}

/* End of file deployment.php */
/* Location: ./application/controllers/deployment.php */