<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicant extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('applicant_model');
	}

	function index() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

		$this->load->model('client_model');
		$query = $this->client_model->list_company();
		$data['records2'] = $query;
	
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
		$name .= ' ('.$train_id.')';
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
        			'email' => $this->input->post('email'),
        			'height' => $this->input->post('height'),
        			'civil_status' => $this->input->post('civil_status')
        		);
		$user_table = array(
					'user_id' => $train_id,
        			'username' => strtolower($this->input->post('username')),
        			'password' => $this->input->post('password'),
        			'first_name' => $this->input->post('first_name'), 
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'email' => $this->input->post('email'),
        			'permission' => 'Trainee',
        			'date_created' => date('Y-m-d H:i:s')
        		);
    		
	
		//
			$this->applicant_model->add_trainee_hris($hris);  //Add to HRIS Table
			$this->applicant_model->update_userTable($reg_id,$user_table); //Update UserAccount in User_Table
			$this->applicant_model->update_registration($reg_id); // Update Registration , Active to 1.
		}
		else {

		    header( 'Location: Accept' ) ;
		}
		
	}

	function searchApplicant(){
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

    function view_info($register_id) {
    //check kung naka-login
	    if($this->session->userdata('is_logged_in')) {

			$query =  $this->applicant_model->info($register_id);
			$data['records'] = $query;
			
			$this->load->view('applicant/applicant_view', $data);
	    	
	    }
	    else {

	     	$this->load->view('login_view');
	     
	    }
    
  	}

  	function edit_info($register_id) {
    //check kung naka-login
	    if($this->session->userdata('is_logged_in')) {

			
			
			$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean|alpha');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean|alpha');
			$this->form_validation->set_rules('middle_name', 'Middle Name', 'xss_clean|alpha');
			$this->form_validation->set_rules('birth_date', 'Birthdate', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
			$this->form_validation->set_rules('city', 'City', 'required|xss_clean');
			$this->form_validation->set_rules('province', 'Province', 'required|xss_clean');
			$this->form_validation->set_rules('phone', 'Phone', 'required|xss_clean');
			$this->form_validation->set_rules('height', 'Height', 'required');
			$this->form_validation->set_rules('civil_status', 'Civil Status', 'required');
			
			/*$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
			//$this->form_validation->set_rules('email_confirm', 'Email Address Confrimation', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|xss_clean|min_length[6]');
			$this->form_validation->set_rules('password', 'Password', 'required|matches[password_confirm]|min_length[6]');
			$this->form_validation->set_rules('password_confirm', 'Password Confirmation', '');*/
			$this->form_validation->set_rules('agree', '...', 'callback_terms_check');
			
			
			if ($this->form_validation->run() == true)
			{
				$data = array(
					'first_name' 	=> $this->input->post('first_name'),
					'last_name'  	=> $this->input->post('last_name'),
					'middle_name'	=> $this->input->post('middle_name'),
					'birth_date'  	=> $this->input->post('birth_date') ,
					'address'    	=> $this->input->post('address'),
					'city'    		=> $this->input->post('city'),
					'province'    	=> $this->input->post('province'),
					'phone'      	=> $this->input->post('phone'),
					'height'      	=> $this->input->post('height'),
					'civil_status'  => $this->input->post('civil_status'),
					'date_change'	=> date('Y-m-d H:i:s'),
				);
			}
			if ($this->form_validation->run() == true )
			{ 
				//check to see if we are creating the user
				//redirect them to checkout page
      			$this->load->model('profile_model');
      			$this->profile_model->change_info($register_id,$data);
      			$success_message = "Changes Successfully";
      		 	//$this->session->set_flashdata('message2',"Changes Successfully"); 
		       
		       	$this->session->set_flashdata('success',$success_message); 
		        redirect(base_url().'applicant/edit_info/'.$register_id, 'refresh');
		        
			}
			else
			{ 
				//$id = $this->session->userdata('user_id');
				//$this->load->model('profile_model');
				$query =  $this->applicant_model->info($register_id);
				$this->data['records'] = $query;
				//display the create user form
				//set the flash data error message if there is one
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->session->flashdata('message')));
			

				$this->load->view('applicant/edit_applicant_view',$this->data);
				//$this->load->view('registration/registration_view', $this->data);
				
			}
			//
	    	
	    }
	    else {

	     	$this->load->view('login_view');
	     
	    }
    
  	}

}

/* End of file applicant.php */
/* Location: ./application/controllers/applicant.php */