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


}

/* End of file administrative.php */
/* Location: ./application/controllers/administrative.php */