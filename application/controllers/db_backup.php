<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_backup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library("form_validation");
	}

	function index() {

		$prefs = array(
                'format'      => 'zip',         
                'filename'    => 'ami_db.sql',    
                'add_insert'  => TRUE,            
                'newline'     => "\n" 
              );

		$this->load->dbutil();
		$backup = $this->dbutil->backup($prefs); 
		$this->load->helper('file');
		write_file('/path/to/ami ' . date("Y-m-d H:i:s") . '.zip', $backup); 
		$this->load->helper('download');
		force_download('ami '.date("Y-m-d H:i:s").'.zip', $backup);

	}

}