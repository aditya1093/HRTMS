<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("Register_Model");
		$this->load->library("form_validation");
	}


	public function register()
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

			//display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->session->flashdata('message')));
			

			/**/
			$this->data['birth_date_year'] = buildYearDropdown('birth_date_year', $this->input->post('birth_date_year'));
			
			$this->data['birth_date_month'] = buildMonthDropdown('birth_date_month', $this->input->post('birth_date_month'));
			
			$this->data['birth_date_day'] = buildDayDropdown('birth_date_day', $this->input->post('birth_date_day'));
			
			$this->data['country'] = buildCountryDropdown('country', $this->input->post('country'));

			$this->load->view('registration/registration_view', $this->data);
			
		}
		
	}


	//Registration
	function index() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {

    		$this->load->view('Registration/guide_registration');
    		//$this->load->view('registration/guide_registration');
		}	
	
	} 

	//Location - SITE MAP
	public function site_map()  
	{
		if($this->session->userdata('is_logged_in')) {

			redirect(base_url() . 'dashboard');
		}
		else {
			$this->load->view('registration/site_map');
		}
		
	} 

	/* Requirements */

	//Photo
	public function photo_requirement()
	{
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			$this->load->view('registration/photo_requirements');
		}
		
	}
	//Documents
	public function required_documents()
	{
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			  $this->load->view('registration/required_documents');
		}
		
	}
	//Expenses
	public function expenses()
	{
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			  $this->load->view('registration/expenses');
		}
		
	}

	/* Screening */
	//Preliminary Exam
	public function prelim_exam()
	{
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			  $this->load->view('registration/prelim_exam');
		}
		
	}
	//Interview
	public function interview_screen()
	{
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			  $this->load->view('registration/interview_screen');
		}
		
	}
	//Medical Referral
	public function medical_referral()
	{
		if($this->session->userdata('is_logged_in')) {
			redirect(base_url() . 'dashboard');
		}
		else {
			  $this->load->view('registration/medical_referral');
		}
		
	}

	

}

/* End of file registration.php */
/* Location: ./application/controllers/registration.php */