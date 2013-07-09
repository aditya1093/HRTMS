<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function index() {

		$data = array (
			'error_msg' => NULL
		);

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			redirect(base_url() . 'index.php/dashboard');
		}
		else {

    		$this->load->view('login_view', $data);
		}	
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */