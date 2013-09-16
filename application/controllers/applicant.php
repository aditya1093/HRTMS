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

	function batch_control() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			//List Batch Control
			$this->load->model('applicant_model');
			$query = $this->applicant_model->list_batch_control();
			$data['records'] = $query;


			//List Client
			$this->load->model('client_model');
			$query = $this->applicant_model->list_request();
			$data['records2'] = $query;
			$this->load->view('applicant/batch_control', $data);
		}
		else {

    		$this->load->view('login_view');
		}

	
	}

	function getCompany(){
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			$id =  $this->input->post('req_id');

			$this->load->model('applicant_model');
			$query = $this->applicant_model->getCompany($id);
			echo json_encode ($query);
		}
		else {

    		$this->load->view('login_view');
		}


	}

	function addBatchControl(){
		if($this->session->userdata('is_logged_in')) {
			$query = $this->db->query("SELECT batch_control_no FROM batch_no WHERE YEAR( date_created ) = YEAR( NOW( ) ) ORDER BY date_created DESC LIMIT 1");
	        if ($query->num_rows() > 0)
			{
			   foreach ($query->result() as $row)
			   {
			   	  list($ts, $asb, $id) = explode("-", $row->batch_control_no);
			      $p= $id + 1;
			   }
			   	//$hr_count = $p;
				$p = sprintf("%03d",$p) ;
				$permi = "-ASB-";
				$date = date('Y');
				$batch_no = 'TS' .substr($date, -2).$permi.$p;
			}
			else
			{
				//$this->db->insert('user_count', array('hr_count' => '1' ));
				$p = "1";
				$p = sprintf("%03d",$p) ;
				$permi = "-ASB-";
				$date = date('Y');
				$batch_no = 'TS' .substr($date, -2).$permi.$p; 

			}
			$req_id = $this->input->post('req_id');
			$client_name = $this->input->post('client_name');
			$date_start = $this->input->post('date_start');
			$training_days = $this->input->post('training_days');
			$limit = $this->input->post('limit_no');
			$is_training = '1';

			$date_end = date('Y-m-d', strtotime($date_start. ' + '.$training_days.' days'));
			//echo $batch_no;
			
			$data = array(
				'request_id' => $req_id,
				'batch_control_no' => $batch_no , 
				'client' => $client_name, 
				'date_start' => $date_start , 
				'training_days' => $training_days,
				'limit_no' => $limit,
				'date_created' => date("Y-m-d H:i:s"),
				'is_training' => $is_training

				);
			$this->load->model('applicant_model');
			$this->applicant_model->addBatchNo($data);
			$this->applicant_model->updateRequest($req_id);
			
			$query = $this->applicant_model->getIdBatchControl($req_id);
			echo json_encode ($query);		
		
		}
		else {
   
    		$this->load->view('login_view');
		}

	}

	function getBatchInfo(){
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			$batch =  $this->input->post('batch_no');

			$query =$this->db->query("select request_id from batch_no where batch_control_no='".$batch."'");
			//$query2 =$this->db->query("select  register_id from registration order by register_id desc");
			//$id = "";
			if ($query->num_rows() > 0)
			{
			   foreach ($query->result() as $row)
			   {
			      	$id= $row->request_id;
			     	$this->load->model('applicant_model');
					$query = $this->applicant_model->batchInfo($id, $batch);
					echo json_encode ($query);
			   }
				
			}
			//echo $id;
		
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
		$batch_control_no = $this->input->post('batch_control_no');
		$current = $this->input->post('current');
		$current = $current + 1;
		$this->output->set_output(json_encode($name));
		$hris = array(
					'register_id' => $reg_id,
					'trainee_id' => $train_id,
					'batch_control_no' => $batch_control_no,
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
        			'company' => $this->input->post('client'),
        			'date_created' => date('Y-m-d H:i:s')
        		);
    	$attendance = array(
    				'training_id' => $train_id,
    				'training_days' => $this->input->post('training_days')
    			);	
		
		//
			/*$this->applicant_model->add_trainee_hris($hris);  //Add Applicant to HRIS Table
			$this->applicant_model->update_userTable($reg_id,$user_table); //Update UserAccount in User_Table
			$this->applicant_model->update_registration($reg_id); // Update Registration , Active to 1.
			$this->applicant_model->updateBatch($batch_control_no,$current); // Update the number of current trainee in a batch.
			$this->applicant_model->insertAttendance($attendance); // Insert applicant to trainee_attendace table
		
			*/	
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
	       	//$data = $this->applicant_model->getBatch();
	        $this->output->set_output(json_encode($data));
		}
		else {
		      header( 'Location: Accept' ) ;
		}
		 /*	$id=$this->input->post('id');
	        $this->load->model('applicant_model');
	        $data = $this->applicant_model->getInfo($id);
	       	//$data[]= $this->applicant_model->getBatch();
	        $this->output->set_output(json_encode($data));*/


    }
    function getBatch(){
	    /*if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	     	$this->load->model('applicant_model');
	       	$data= $this->applicant_model->getBatch();
	        $this->output->set_output(json_encode($data));
		}
		else {
		      header( 'Location: Accept' ) ;
		}*/
		 	
	        $this->load->model('applicant_model');
	       	$query= $this->applicant_model->getBatch();
	        echo json_encode ($query);


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

			
			
			$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean');
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