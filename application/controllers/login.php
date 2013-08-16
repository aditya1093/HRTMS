<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function load_view($view_name) {

		$data = array (
			'error_msg' => NULL
		);

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			redirect(base_url() . 'index.php/dashboard');
		}
		else {

    		$this->load->view($view_name, $data);
		}	

	}

	function index() {

		$this->load_view('login_view');		
	}

	function client() {
		
		$this->load_view('login_view_client');	
	}

	function training() {
		
		$this->load_view('login_view_training');	
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */