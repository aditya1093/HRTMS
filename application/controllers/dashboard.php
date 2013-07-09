<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Administrator') {

			$this->load->view('admin/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'HR') {
			
			$this->load->view('hris/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainer') {
			
			$this->load->view('training/dashboard_view');
		}
		else {

    		//$this->load->view('login_view', $data);
    		echo "asdf";
		}
		
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */