<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Administrator') {

			$this->load->view('admin/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'HR') {
			
			$this->load->view('User/hris/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainer') {
			
			$this->load->view('User/training/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Client') {
			
			$this->load->view('User/client/profile_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainee') {
			
			$this->load->view('User/trainee/profile_view');
		}
		else {

			$data = 0 ;
    		$this->load->view('login_view', $data);
		}
		
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */