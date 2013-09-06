<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deployment extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		redirect(base_url() . 'index.php/dashboard');
	}
	
}

/* End of file deployment.php */
/* Location: ./application/controllers/deployment.php */