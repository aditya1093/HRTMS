<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deployment extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		if($this->session->userdata('is_logged_in')) {

			$this->load->model('applicant_model');
			$query = $this->applicant_model->list_request();
			
			$data['records2'] = $query;
			
			$this->load->view('trainee/deployment_view',$data);
		}
		else {

    		$this->load->view('login_view');
		}	

	}

	function list_deployment(){
		$id = $this->input->post('id');

		$this->load->model('deployment_model');
		$data = $this->deployment_model->request_info($id);
		$data2 = $this->deployment_model->list_trainee($id);
		
		$str['info'] = "";
		foreach ($data as $row) {
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

		}
	

		$str['info'] .= "<table class=\"table table-bordered\">";
		$str['info'] .="<tr><td>Company :</td><td>". $client_name ."</td></tr>";
		$str['info'] .= "<tr><td>Manpower :</td><td>". $no_of_manpower ."</td></tr>";
		$str['info'] .= "<tr><td>From :</td><td>". $date_requested ."</td></tr>";
		$str['info'] .= "<tr><td>To :</td><td>". $is_to ."</td></tr>";
		$str['info'] .= "<tr><td>Type :</td>";
		$str['info'] .= "<td>". $emp_type ."</td></tr>";
		//$str['info'] .= "</td></tr>";
		$str['info'] .= "<tr><td>Department :</td><td>". $emp_department ."</td></tr>";
		$str['info'] .= "</table>";
		$str['hris']= "";
		$str['hris'] .= "<table class='table table-striped table-bordered' id='table_report' > 
                            <thead>
                            <tr>
                                <th class='center'>
                                    Training ID
                                </th>
                                <th class='center'> Name
                                </th>
                                <th class='center'>
                                    Contact No.
                                </th>
                                <th >
                                   
                                </th>
                            </tr> 
                            </thead> ";
       	$str['hris'] .= "<tbody>";
       	foreach($data2 as $row ){
			$str['hris'] .= "<tr>";
			$str['hris'] .= "<td>$row->trainee_id</td>";
			$str['hris'] .= "<td>$row->last_name, $row->first_name  $row->middle_name</td>";
			$str['hris'] .= "<td>$row->mobile_no / $row->home_no</td>";
			$str['hris'] .= "<td></td>";
			$str['hris'] .= "</tr>";

		}

       	$str['hris'] .= "</tbody></table>";

		echo json_encode($str);





	}
	
}

/* End of file deployment.php */
/* Location: ./application/controllers/deployment.php */