<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		

		$this->session->set_userdata("sender_id","0");

		if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Administrator') {

			$this->load->model('request_model');
			$data['record'] = $this->request_model->list_request();
			$this->load->view('admin/dashboard_view', $data);
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'HR') {
			
			//$this->load->view('User/hris/dashboard_view');
			$this->load->view('admin/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainer') {
			
			$this->load->view('User/training/dashboard_view');
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Client') {
			
			$this->load->model('request_model');

			$data["record"] = $this->request_model->list_confirmed();
			$this->load->view('User/client/dashboard_view',$data);
		}
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Trainee') {

			$id = $this->session->userdata('user_id');
			$this->load->model("profile_model");
			$query = $this->profile_model->profile_trainee($id);
			$data['records'] = $query;

			$this->load->model("examination_model");
			$this->examination_model->active_exam();
			
			$id = $this->session->userdata("user_id");
	        $b_id = $this->session->userdata("b_id");

	        if($this->input->get("take_exam")) {
	        	$this->session->set_userdata("take_exam_id", $this->input->get("take_exam"));
	        }
	        else {
	        	$this->session->unset_userdata("take_exam_id");

	        }

	        $data['sets'] = $this->examination_model->exam_set_info($b_id);
			/*$is_took = $this->examination_model->check_gradesheet($id, $b_id);

			if($is_took == 0) {

				$data["score"] = $this->examination_model->get_gradesheet($id, $b_id);
			}*/
			
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