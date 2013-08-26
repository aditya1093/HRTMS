<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		redirect(base_url() . 'index.php/dashboard');
	}

	function hr() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			$this->session->unset_userdata('edit_hr_error');

			$this->load->model('manage_model');
			$query = $this->manage_model->list_hr();
			$data['records'] = $query;			
			$this->load->view('admin/manage_accounts/hr_view', $data);
		}
		else {

    		$this->load->view('login_view');
		}	
	}
	function add_hr() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[6]|is_unique[user_table.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password_confirm]|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|alpha|xss_clean');
		$this->form_validation->set_rules('middle_nme', 'Middle Name', 'trim|alpha|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        $this->session->unset_userdata('error_hr');

        if($this->form_validation->run() == true) {
 
        	$data = array(
        			//''		=> 
        			'username' => $this->input->post('username'),
        			'password' => md5($this->input->post('password')),
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'email' => $this->input->post('email'),
        			'permission' => 'HR',
        			'date_created' => date('Y-m-d H:i:s')
        		); 
    		
			$this->load->model('manage_model');
			$this->manage_model->add_hr($data);
 
		}
		else
		{

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
			$data = array (
					'error_hr' => $error_string
				);	
			$this->session->set_userdata($data);
			
		}

		redirect(base_url().'manage/hr', 'refresh');	
	}

	function training() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			$this->session->unset_userdata('edit_hr_error');

			$this->load->model('manage_model');
			$query = $this->manage_model->list_trainer();
			$data['records'] = $query;			
			$this->load->view('admin/manage_accounts/training_view', $data);
		}
		else {

    		$this->load->view('login_view');
		}	
	}
	function add_trainer() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[6]|is_unique[user_table.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password_confirm]|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|alpha|xss_clean');
		$this->form_validation->set_rules('middle_nme', 'Middle Name', 'trim|alpha|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        $this->session->unset_userdata('error_trainer');

        if($this->form_validation->run() == true) {
 
        	$data = array(
        			'username' => $this->input->post('username'),
        			'password' => md5($this->input->post('password')),
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'email' => $this->input->post('email'),
        			'permission' => 'Trainer',
        			'date_created' => date('Y-m-d H:i:s')
        		); 
    		
			$this->load->model('manage_model');
			$this->manage_model->add_trainer($data);
 
		}
		else
		{

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
			$data = array (
					'error_trainer' => $error_string
				);	
			$this->session->set_userdata($data);
			
		}

		redirect(base_url().'manage/training', 'refresh');	
	}
}

/* End of file manage.php */
/* Location: ./application/controllers/manage.php */