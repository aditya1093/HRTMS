<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hris extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("profile_model");
		$this->load->library("form_validation");
	}

	public function personal_info()
	{
		$id = $this->session->userdata('id');
			//$this->load->model('profile_model');
		$query = $this->profile_model->profile_trainee($id);
		$data['records'] = $query;
		$this->load->view('user/trainee/personal_info',$data);
	}
	public function personal_accounts()
	{
		$id = $this->session->userdata('id');
			//$this->load->model('profile_model');
		$query = $this->profile_model->profile_trainee($id);
		$data['records'] = $query;
		$this->load->view('user/trainee/personal_acc',$data);
	}
	public function marital_info()
	{
		$id = $this->session->userdata('id');
			//$this->load->model('profile_model');
		$query = $this->profile_model->profile_trainee($id);
		$data['records'] = $query;
		$this->load->view('user/trainee/marital_info',$data);
	}
	public function educational_background()
	{
		$id = $this->session->userdata('id');
			//$this->load->model('profile_model');
		$query = $this->profile_model->profile_trainee($id);
		$data['records'] = $query;
		$this->load->view('user/trainee/educational_background',$data);
	}

	function updatePersonalInfo(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	
		$m = $this->input->post('middle_name');
		$name = $this->input->post('first_name') .' ' .$m[0].' '.$this->input->post('last_name'); 
	
		//$this->output->set_output(json_encode($name));
		$personal_info = array(
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'nickname' => $this->input->post('nickname'),
        			'birthdate' => $this->input->post('birthdate'),
        			'place_of_birth' => $this->input->post('place_of_birth'),
        			'allergy' => $this->input->post('allergy'),
        			'citizenship' => $this->input->post('citizenship'),
        			'place_of_birth' => $this->input->post('place_of_birth'),
        			'civil_status' => $this->input->post('civil_status'),
        			'height' => $this->input->post('height'),
        			'weight' => $this->input->post('weight'),
        			'blood_type' => $this->input->post('blood_type'),
        			'religion' => $this->input->post('religion'),
        			'home_no' => $this->input->post('home_no'),
        			'mobile_no' => $this->input->post('mobile_no'),
        			'alternative_no' => $this->input->post('alternative_no'),        			
        			'present_address' => $this->input->post('present_address'),
        			'present_city' => $this->input->post('present_city'),
        			'present_province' => $this->input->post('present_province'),
        			'gender' => $this->input->post('gender'),
        			'provincial_address' => $this->input->post('provincial_address'),
        			'provincial_city' => $this->input->post('provincial_city'),
        			'provincial_province' => $this->input->post('provincial_province'),
        			'mailing_address' => $this->input->post('mailing_address'),
        			'mailing_city' => $this->input->post('mailing_city'),
        			'mailing_province' => $this->input->post('mailing_province'),
        			'father_name' => $this->input->post('father_name'),
        			'father_occupation' => $this->input->post('father_occupation'),
        			'father_age' => $this->input->post('father_age'),
        			'father_occupation_address' => $this->input->post('father_occupation_address'),
        			'father_address' => $this->input->post('father_address'),
        			'father_contact_no' => $this->input->post('father_contact'),
        			'mother_name' => $this->input->post('mother_name'),
        			'mother_occupation' => $this->input->post('mother_occupation'),
        			'mother_age' => $this->input->post('mother_age'),
        			'mother_occupation_address' => $this->input->post('mother_occupation_address'),
        			'mother_address' => $this->input->post('mother_address'),
        			'mother_contact_no' => $this->input->post('mother_contact'),
        			'skills' => $this->input->post('skills'),
        			'hobbies' => $this->input->post('hobbies'),
        			'interests' => $this->input->post('interests'),
        			'date_edit' => date('Y-m-d H:i:s')
        		);
		//$name .= $this->input->post('present_address') . $this->input->post('present_city') . $this->input->post('present_province');
		//echo 'asd'.$this->input->post('skills');
    			
		$this->load->model('hris_model');
		$this->hris_model->personal_info($personal_info);
	
		}
		else {

			 header( 'Location: personal_info' ) ;
		}
		
	}

	function updatePersonalAcc(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	
		//$m = $this->input->post('middle_name');
		//$name = $this->input->post('first_name') .' ' .$m[0].' '.$this->input->post('last_name'); 
		//$name = $this->input->post('passport_issue_date');
		//$this->output->set_output(json_encode($name));
		$personal_info = array(
        			'sss_no' => $this->input->post('sss_no'),
        			'tin_no' => $this->input->post('tin_no'),
        			'philhealth_no' => $this->input->post('philhealth_no'),
        			'pagibig_no' => $this->input->post('pagibig_no'),
        			'tax_status' => $this->input->post('tax_status'),
        			'passport_no' => $this->input->post('passport_no'),
        			'passport_issue_date' => $this->input->post('passport_issue_date'),
        			'passport_issue_country' => $this->input->post('country'),
        			'passport_issue_place' => $this->input->post('passport_issue_place'),
        			'passport_expiration_date' => $this->input->post('passport_expiration_date'),
        			'license_type' => $this->input->post('license_type'),
        			'license_issue_date' => $this->input->post('license_issue_date'),
        			'license_issue_place' => $this->input->post('license_issue_place'),
        			'license_expiration_date' => $this->input->post('license_expiration_date'),
        			'date_edit' => date('Y-m-d H:i:s')
        		);
		//$name .= $this->input->post('present_address') . $this->input->post('present_city') . $this->input->post('present_province');
		//echo $name;
    			
		$this->load->model('hris_model');
		$this->hris_model->personal_info($personal_info);
	
		}
		else {

			 header( 'Location: personal_acc' ) ;
		}
		
	}
	function updateMaritalInfo(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	
		//$m = $this->input->post('middle_name');
		//$name = $this->input->post('first_name') .' ' .$m[0].' '.$this->input->post('last_name'); 
		//$name = $this->input->post('passport_issue_date');
		//$this->output->set_output(json_encode($name));
			$personal_info = array(
        			'marriage_date' => $this->input->post('marriage_date'),
        			'marriage_place' => $this->input->post('marriage_place'),
        			'spouse_first_name' => $this->input->post('spouse_first_name'),
        			'spouse_middle_name' => $this->input->post('spouse_middle_name'),
        			'spouse_last_name' => $this->input->post('spouse_last_name'),
        			'spouse_birthdate' => $this->input->post('spouse_birthdate'),
        			'spouse_occupation' => $this->input->post('spouse_occupation'),
           			'spouse_contact_no' => $this->input->post('spouse_contact_no'),
        			'date_edit' => date('Y-m-d H:i:s')
        		);
			$this->load->model('hris_model');
			$this->hris_model->personal_info($personal_info);
        
	
		}
		else {

			 header( 'Location: Marital_info' ) ;
		}
		
	}
	function updateEducation(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	
		//$m = $this->input->post('middle_name');
		//$name = $this->input->post('first_name') .' ' .$m[0].' '.$this->input->post('last_name'); 
		//$name = $this->input->post('passport_issue_date');
		//$this->output->set_output(json_encode($name));
			$personal_info = array(
        			'marriage_date' => $this->input->post('highest_educ'),
        			'school' => $this->input->post('school'),
        			'school_s' => $this->input->post('school_s'),
        			'spouse_middle_name' => $this->input->post('spouse_middle_name'),
        			'date_edit' => date('Y-m-d H:i:s')
        		);
			$this->load->model('hris_model');
			$this->hris_model->personal_info($personal_info);
        
	
		}
		else {

			 header( 'Location: Marital_info' ) ;
		}
		
	}
	function updateChildren(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    		$name=$this->input->post('child_name');
			$dob=$this->input->post('child_dob');
			$school_work=$this->input->post('child_school_work');
			$id=$this->session->userdata('id');
			$count = count($this->input->post('child_name'));
    		$data =array();
			for($i=0; $i<$count; $i++) {
			$data[$i] = array(
			           'id' => $id, 
			           'children_name' => $name[$i],
			           'children_birthdate' => $dob[$i],
			           'children_school_or_work' => $school_work[$i],

			           );
			}

			$this->db->insert_batch('hris_children', $data);
			


		}
		else {

			 header( 'Location: Marital_info' ) ;
		}
		
	}

	function updateDependent(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    		$name=$this->input->post('dependent_name');
			$dob=$this->input->post('dependent_dob');
			$relationship=$this->input->post('dependent_relationship');
			$id=$this->session->userdata('id');
			$count = count($this->input->post('dependent_name'));
    		$data =array();
			for($i=0; $i<$count; $i++) {
			$data[$i] = array(
			           'id' => $id, 
			           'dependent_name' => $name[$i],
			           'dependent_birthdate' => $dob[$i],
			           'dependent_relationship' => $relationship[$i]

			           );
			}

			$this->db->insert_batch('hris_dependent', $data);
			


		}
		else {

			 header( 'Location: Marital_info' ) ;
		}
		
	}
	function updateBeneficiary(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    		$name=$this->input->post('beneficiary_name');
			$dob=$this->input->post('beneficiary_dob');
			$relationship=$this->input->post('beneficiary_relationship');
			$id=$this->session->userdata('id');
			$count = count($this->input->post('beneficiary_name'));
    		$data =array();
			for($i=0; $i<$count; $i++) {
			$data[$i] = array(
			           'id' => $id, 
			           'beneficiary_name' => $name[$i],
			           'beneficiary_birthdate' => $dob[$i],
			           'beneficiary_relationship' => $relationship[$i]

			           );
			}

			$this->db->insert_batch('hris_beneficiary', $data);
			


		}
		else {

			 header( 'Location: Marital_info' ) ;
		}
		
	}

}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */
