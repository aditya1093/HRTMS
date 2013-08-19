<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("Register_Model");
		$this->load->library("form_validation");
	}

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
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Applicant') {
			$id = $this->session->userdata('id');
			$this->load->model('profile_model');
			$query = $this->profile_model->profile($id);
			$data['records'] = $query;
			$this->load->view('User/applicant/profile_view',$data);
		}
		else {

			$data = 0 ;
    		$this->load->view('login_view', $data);
		}
		
	}

	public function edit_profile()
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
		else if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'Applicant')
		{

			//load the registration helper under helper folder
			$this->load->helper('registration_helper');

			//validate form input
			$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean|alpha');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean|alpha');
			$this->form_validation->set_rules('middle_name', 'Middle Name', 'xss_clean|alpha');
			$this->form_validation->set_rules('birth_date_year', 'Year', 'required');
			$this->form_validation->set_rules('birth_date__nc_month', 'Month', '');
			$this->form_validation->set_rules('birth_date__nc_day', 'Day', '');
			$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
			$this->form_validation->set_rules('address_2', 'Address 2', 'xss_clean');
			$this->form_validation->set_rules('city', 'City', 'required|xss_clean');
			$this->form_validation->set_rules('state', 'State/Province', 'xss_clean');
			$this->form_validation->set_rules('country', 'Country', 'required|xss_clean');
			$this->form_validation->set_rules('zipcode', 'Zip/Postal code', 'required|xss_clean');
			$this->form_validation->set_rules('phone', 'Phone', 'required|xss_clean');
			
			$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
			//$this->form_validation->set_rules('email_confirm', 'Email Address Confrimation', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|xss_clean|min_length[6]');
			$this->form_validation->set_rules('password', 'Password', 'required|matches[password_confirm]|min_length[6]');
			$this->form_validation->set_rules('password_confirm', 'Password Confirmation', '');
			$this->form_validation->set_rules('agree', '...', 'callback_terms_check');
			
			

			$query =$this->db->query("select count( year(date_created) = year(now()) && month(date_created)=month(now()))  as count from registration");
			//$query2 =$this->db->query("select  register_id from registration order by register_id desc");
		
			if ($query->num_rows() > 0)
			{
			   foreach ($query->result() as $row)
			   {
			      $p= $row->count + 1;
			   }
				$p = sprintf("%04d",$p) ;
				$date = date('Y'); //this returns the current date time
				$date2 = date('m');
				$reg_id = 'AMI' . substr($date, -2) .$date2 .'-REG-'.$p;
			}
			

			if ($this->form_validation->run() == true)
			{
				$data = array(
					'register_id'	=> $reg_id,
					'username' 		=> strtolower($this->input->post('username')),
					'email'    		=> $this->input->post('email'),
					'password' 		=> md5($this->input->post('password')),
					'first_name' 	=> $this->input->post('first_name'),
					'last_name'  	=> $this->input->post('last_name'),
					'middle_name'	=> $this->input->post('middle_name'),
					'birth_date'  	=> $this->input->post('birth_date_year') . '-' .$this->input->post('birth_date_month') . '-'. $this->input->post('birth_date_day') ,
					'gender'		=> $this->input->post('gender'),
					'address'    	=> $this->input->post('address'),
					'address_2'    	=> $this->input->post('address_2'),
					'city'    		=> $this->input->post('city'),
					'state'    		=> $this->input->post('state'),
					'country'    	=> $this->input->post('country'),
					'zipcode'    	=> $this->input->post('zipcode'),
					'phone'      	=> $this->input->post('phone'),
					'type'			=> 0,
					'date_created'	=> date('Y-m-d H:i:s'),
				);
			}
			if ($this->form_validation->run() == true && $this->Register_Model->register($data))
			{ 
				//check to see if we are creating the user
				//redirect them to checkout page
		 		$this->load->view('success');
			}
			else
			{ 
				$id = $this->session->userdata('id');
				$this->load->model('profile_model');
				$query = $this->profile_model->profile($id);
				$this->data['records'] = $query;
				//display the create user form
				//set the flash data error message if there is one
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->session->flashdata('message')));
				
				foreach($this->data['records'] as $row){
				
				$birthdate = $row->birth_date;
				
				}
				//$birthdate = $this->data['records']['full_name'];

				list($y,$m,$d) = explode('-', $birthdate);
				/**/
				$this->data['birth_date_year'] = buildYearDropdown('birth_date_year', $y);
				
				$this->data['birth_date_month'] = buildMonthDropdown('birth_date_month', $m );
				
				$this->data['birth_date_day'] = buildDayDropdown('birth_date_day', $d );
				
				$this->data['country'] = buildCountryDropdown('country', $this->input->post('country'));

				
				$this->load->view('User/applicant/edit_profile_view',$this->data);
				//$this->load->view('registration/registration_view', $this->data);
				
			}
		}
		else {

			$data = 0 ;
    		$this->load->view('login_view', $data);
		}
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */
