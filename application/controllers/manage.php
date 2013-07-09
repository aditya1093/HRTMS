<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		redirect(base_url() . 'index.php/dashboard');
	}

	function hr() {

		$this->load->view('admin/manage_accounts/hr');
	}
}

/* End of file manage.php */
/* Location: ./application/controllers/manage.php */