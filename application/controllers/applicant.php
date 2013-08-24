<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicant extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
		$this->load->model('applicant_model');
		$query = $this->applicant_model->applicant_list();
		$data['records'] = $query;

		
		$this->load->view('applicant/registration_view',$data);
		}
		else {

    		$this->load->view('login_view');
		}	
	
	}

	function accept() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
	
		$this->load->view('applicant/accept_applicant');
		}
		else {

    		$this->load->view('login_view');
		}

	
	}

	function acceptApp(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	$reg_id =  $this->input->post('register_id');								
		list($ami,$tag,$id) = explode('-', $reg_id);
		$tag = "TRAINEE";
		$train_id = $ami.'-'.$tag.'-'.$id;
		$m = $this->input->post('middle_name');
		$name = $this->input->post('first_name') .' ' .$m[0].' '.$this->input->post('last_name'); 
		$this->output->set_output(json_encode($name));
		$hris = array(
					'register_id' => $reg_id,
					'trainee_id' => $train_id,
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'birthdate' => $this->input->post('birth_date'),
        			'present_address' => $this->input->post('address'),
        			'present_city' => $this->input->post('city'),
        			'present_province' => $this->input->post('province'),        			
        			'mobile_no' => $this->input->post('phone'),
        			'gender' => $this->input->post('gender'),
        			'email' => $this->input->post('email')
        		);
		$user_table = array(
					'id' => $train_id,
        			'username' => strtolower($this->input->post('username')),
        			'password' => $this->input->post('password'),
        			'first_name' => $this->input->post('first_name'), 
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'email' => $this->input->post('email'),
        			'permission' => 'Trainee',
        			'date_created' => date('Y-m-d H:i:s')
        		);
    		
		$this->load->model('applicant_model');
		//$this->applicant_model->add_trainee_hris($hris);
		//$this->applicant_model->add_trainee($user_table);
		//$this->applicant_model->update_registration($reg_id)
		}
		else {

		    header( 'Location: Personal_info' ) ;
		}
		
	}

	public function searchApplicant(){
	    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	    
	        $id=$this->input->post('id');
	        $this->load->model('applicant_model');
	        $data = $this->applicant_model->getInfo($id);
	        $this->output->set_output(json_encode($data));
		}
		else {
		      header( 'Location: Accept' ) ;
		}


    }

}

/* End of file applicant.php */
/* Location: ./application/controllers/applicant.php */