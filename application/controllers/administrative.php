<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrative extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		redirect(base_url() . 'index.php/dashboard');

	}

	function audit(){

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			
			$this->load->model('administrative_model');
			$query = $this->administrative_model->list_users();
			$data['records'] = $query;			
			$this->load->view('admin/audit_view', $data);
		}
		else {
 
    		$this->load->view('login_view');
		}	

	}

	function backup() {
		
		if($this->session->userdata('is_logged_in')) {
			
			$this->load->view('admin/backup_view');
		}
		else {

    		$this->load->view('login_view');
		}	
	}
	
	function confirm_request() {

		$this->load->model("request_model");
		$id = $this->input->post("id");

		
		
		if($this->input->post("action") == "confirm") {
			
			$this->request_model->confirm_request($id, array("confirmed"=>"1","is_read"=>"0"));
		}
		else {

			$this->request_model->confirm_request($id, array("confirmed"=>"0","is_read"=>"0"));
		}
	}

	function viewRequest(){
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	
			$id = $this->input->post('id');
			$this->load->model("request_model");
			$data = $this->request_model->viewRequest($id);

			 foreach($data as $row) {
			 	$stat = $row->confirmed;
		        if ($stat==0) {
		        	$stat = "<span class=\"label label-lg label-warning arrowed-right\">Not Confirmed</span>";
		        }
		        elseif ($stat==1) {
		        	$stat = "<span class=\"label label-lg label-success arrowed-right\">Confirmed</span>";
		        }
		        else{
		        	$stat = "<span class=\"label label-lg label-danger arrowed-right\">No records</span>";
		        }

		        $client_name = $row->company;
		        $no_of_manpower = $row->no_of_manpower;
		        $date_requested = $row->date_requested;
		        $is_to = $row->is_to;

		        $emp_type = $row->emp_type;
		        if($emp_type == 1){
					$emp_type = "Contractual";
				}
				if($emp_type == 2){

					$emp_type = "Regular";
				}
				if($emp_type == 3){

					$emp_type = "Probation";
				}

				$emp_department = $row->emp_department;

				$emp_gender = $row->emp_gender;
				
				if($emp_gender == 1){
					$emp_gender  = "Male Only";
				}
				if($emp_gender == 2){
					$emp_gender  = "Female Only";
				}
				if($emp_gender == 3){
					$emp_gender  = "Male / Female";
				}

				$remarks = $row->remarks;
				$remarks = preg_replace('/\.$/', '', $remarks); //Remove dot at end if exists
				$array = explode(',', $remarks); //split string into array seperated by ', '
				$remarks ="";
				foreach($array as $value) //loop over values
				{
				  $remarks .= $value ."<br>"; //print value
				}

				$emp_reqdocuments = $row->emp_reqdocuments;
				$emp_reqdocuments = preg_replace('/\.$/', '', $emp_reqdocuments); //Remove dot at end if exists
				$array = explode(',', $emp_reqdocuments); //split string into array seperated by ', '
				$emp_reqdocuments ="";
				foreach($array as $value) //loop over values
				{
				  $emp_reqdocuments .= $value ."<br>"; //print value
				}



			 }
	        
			/********************* OUTPUT *************************/

	        $output_string = "<div><table class=\"table table-striped\" style=\"width: 100%; word-wrap:break-word; table-layout: fixed;\">";
			$output_string .= "<colgroup>";
			$output_string .= "<col span=\"1\" style=\"width: 40%;\">";
			$output_string .= "<col span=\"1\" style=\"width: 60%;\">";
			$output_string .= "</colgroup>";

			$output_string .= "<tr><td><h4>Manpower Info</h4></td><td></td></tr>";
			$output_string .= "<tr><td>Status</td>";
			$output_string .= "<td>".$stat."</td></tr>";
			$output_string .= "</td></tr>";
			$output_string .="<tr><td>Company :</td><td>". $client_name ."</td></tr>";
			$output_string .= "<tr><td>Manpower :</td><td>". $no_of_manpower ."</td></tr>";
			$output_string .= "<tr><td>From :</td><td>". $date_requested ."</td></tr>";
			$output_string .= "<tr><td>To :</td><td>". $is_to ."</td></tr>";
			$output_string .= "<tr><td>Type :</td>";
			$output_string .= "<td>". $emp_type ."</td></tr>";
			//$output_string .= "</td></tr>";
			$output_string .= "<tr><td>Department :</td><td>". $emp_department ."</td></tr>";
			$output_string .= "<tr><td><h4>Applicant Requirements</h4></td><td></td></tr>";
			$output_string .= "<tr><td>Gender :</td>";
			$output_string .= "<td>".$emp_gender."</td></tr>";
			$output_string .= "<tr><td>Remarks :</td>";
			$output_string .= "<td>".$remarks."</td></tr>";
			$output_string .= "<tr><td>Documents :</td>";
			$output_string .= "<td>".$emp_reqdocuments."</td><tr>";
			$output_string .= "</table></div>";

			/********************* OUTPUT *************************/


	        $this->output->set_output(json_encode($output_string));
		}
		else {

			 header( 'Location: ../dashboard' ) ;
		}

	}


}

/* End of file administrative.php */
/* Location: ./application/controllers/administrative.php */