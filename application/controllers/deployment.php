<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deployment extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		redirect(base_url() . 'index.php/dashboard');
	}

	function hr() {

		$this->load->view('admin/manage_accounts/hr');
	}

	function training() {

		$this->load->view('admin/manage_accounts/training');
	}
}

/* End of file deployment.php */
/* Location: ./application/controllers/deployment.php */