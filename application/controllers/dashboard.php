<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		

		$this->session->set_userdata("sender_id","0");

		if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Administrator') {

			$this->load->view('admin/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'HR') {
			
			//$this->load->view('User/hris/dashboard_view');
			$this->load->view('admin/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainer') {
			
			$this->load->view('User/training/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Client') {
			
			$this->load->view('User/client/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainee') {
			$id = $this->session->userdata('id');
			$this->load->model("profile_model");
			$query = $this->profile_model->profile_trainee($id);
			$data['records'] = $query;
			$this->load->view('User/trainee/dashboard_view',$data);
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Applicant') {
			
			$this->load->view('User/Applicant/dashboard_view');
		}
		else {

			$data = 0 ;
    		$this->load->view('login_view', $data);
		}
		
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */