<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrative extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		redirect(base_url() . 'index.php/dashboard');

	}

	function audit(){

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			
			$this->load->model('administrative_model');
			$query = $this->administrative_model->list_users();
			$data['records'] = $query;			
			$this->load->view('admin/audit_view', $data);
		}
		else {
 
    		$this->load->view('login_view');
		}	

	}

	function backup() {
		
		if($this->session->userdata('is_logged_in')) {
			
			$this->load->view('admin/backup_view');
		}
		else {

    		$this->load->view('login_view');
		}	
	}
	
	function confirm_request() {

		$this->load->model("request_model");
		$id = $this->input->post("id");

		
		
		if($this->input->post("action") == "confirm") {
			
			$this->request_model->confirm_request($id, array("confirmed"=>"1","is_read"=>"0"));
		}
		else {

			$this->request_model->confirm_request($id, array("confirmed"=>"0","is_read"=>"0"));
		}
	}

	function viewRequest(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	
			$id = $this->input->post('id');
			$this->load->model("request_model");
			$data = $this->request_model->viewRequest($id);
	        $this->output->set_output(json_encode($data));
		}
		else {

			 header( 'Location: ../dashboard' ) ;
		}

	}


}

/* End of file administrative.php */
/* Location: ./application/controllers/administrative.php */