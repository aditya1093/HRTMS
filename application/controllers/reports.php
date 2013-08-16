<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function list_trainee() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('report_model');
			$query = $this->report_model->list_trainee();
			$data['records'] = $query;
			$this->load->view('reports/list_trainee_view', $data);
		}
		else {

    		$this->load->view('login_view');
		}	
	  
	}

	function trainee_attendance() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('report_model');
			$query = $this->report_model->trainee_attendance(); 
			$data['records'] = $query;

			$query2 = $this->report_model->byBatch();
			$data['records2'] = $query2;
			
			$this->load->view('reports/trainee_attendance_view', $data);
		}
		else {
  
    		$this->load->view('login_view' );
		}	
	
	}
	function gradesheet() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('report_model');
			$query = $this->report_model->gradesheet();
			$data['records'] = $query;
	
			$query2 = $this->report_model->byBatch();
			$data['records2'] = $query2;

			$this->load->view('reports/gradesheet_view', $data);



		}
		else {
  
    		$this->load->view('login_view');
		}
	
	}
	function gradesheetByBatch() {
    	$batch = $this->input->post('batch');
		$this->load->model('report_model');
		$query = $this->report_model->gradesheetByBatch($batch); 
		$data['records'] = $query;	
		$this->load->view('reports/gradesheet_batch_view', $data);
	} 
	
}

/* End of file reports.php */
/* Location: ./application/controllers/reports.php */