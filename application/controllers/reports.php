<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function list_trainee() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('report_model');
			$query = $this->report_model->gradesheet();
			$data['records'] = $query;
	
			$query2 = $this->report_model->byBatch();
			$data['records2'] = $query2;

			$this->load->view('reports/list_trainee_view', $data);
		}
		else {

    		$this->load->view('login_view');
		}	
	  
	}

	function trainee_attendance() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('report_model');
			$query = $this->report_model->gradesheet();
			$data['records'] = $query;
	
			$query2 = $this->report_model->byBatch();
			$data['records2'] = $query2;

			
			$this->load->view('reports/trainee_attendance_view', $data);
		}
		else {
  
    		$this->load->view('login_view' );
		}	
	
	}
	function gradesheet() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('report_model');
			$query = $this->report_model->gradesheet();
			$data['records'] = $query;
	
			$query2 = $this->report_model->byBatch();
			$data['records2'] = $query2;

			$this->load->view('reports/gradesheet_view', $data);



		}
		else {
  
    		$this->load->view('login_view');
		}
	
	}
	public function gradesheetByBatch(){

        $batch=$this->input->post('batch');

       // $batch = "TS13-ASB-001";
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('gradesheet', 'hris.trainee_id = gradesheet.training_id','left');
        $this->db->where('batch_control_no',$batch);
        $this->db->order_by("last_name", "asc"); 
        $query = $this->db->get();
        if($query->num_rows > 0){
            $header = false;    
            //$output_string = "<div class=\"box-content\">";
              
          
                $output_string = "<h1 class=''>Gradesheet : $batch</h1>";
                $output_string .= "  <table class='table table-striped table-bordered'> 
                                    <thead>
                                    <tr>
                                        <th class='center'>
                                            Training ID
                                        </th>
                                        <th class='center'> Name
                                        </th>
                                        <th class='center'>
                                            Scores
                                        </th>
                                        <th  class='center'>
                                            Status
                                        </th>
                                    </tr> 
                                    </thead>
                                    
                                 ";
                $output_string .= " 
                                    <tbody>";
                 foreach ($query->result() as $row){ 
                      
                 $output_string .=  "<tr> 
                                        <td width='200px' height='10px'> $row->trainee_id</td>
                                        <td width='450px' height=''> $row->last_name, $row->first_name $row->middle_name</td>
                                        <td width='50px' class='center'> $row->scores/$row->over</td>
                                        <td width='30px' class='center'> $row->status</td>
                                    </tr>";
                                  
                //$output_string .= "Record $row->last_name";
           		 }   
                $output_string .= "</tbody></table>";                 

       
          
        }
        else{
            $output_string = '"There are no results"';
            if($batch == null)
            {
                $output_string .="<br>NULL  BATCH";
            }
        } 
         
        echo json_encode($output_string);
    }

    public function traineeByBatch(){

        $batch=$this->input->post('batch');

       	$this->db->select('*');    
        $this->db->from('hris');
        $this->db->where('hris.batch_control_no',$batch);
        $query = $this->db->get();
        //return $query->result();
        if($query->num_rows > 0){
              
        	
            $output_string = "<h1 class=''>List of Trainee: $batch</h1>";
            $output_string .= "  <table class='table table-striped table-bordered'> 
                                <thead>
								<tr>
									
									<th class=\"center\">
										Training ID
									</th>
									<th class=\"center\">
										 Name
									</th>
									<th class=\"center\">
										Birthdate
									</th>
									<th class=\"center\">													
										Address 
									</th>
									<th class=\"center\">
										City
									</th>
									<th class=\"center\">
										Province
									</th>
									<th class=\"center\">
										Gender
									</th>
									<th class=\"center\">
										Phone
									</th>
									<th class=\"center\">
										Email
									</th>
									
								</tr>
								</thead>
                                
                             ";
            $output_string .= "<tbody>";
			
            foreach ($query->result() as $row){
	            $output_string .="<tr> 
                                    <td width=\"150px\" height=\"10px\"> $row->trainee_id</td>
									<td width=\"200px\" height=\"10px\"> $row->last_name, $row->first_name $row->middle_name</td>
									<td width=\"100px\" height=\"10px\"> $row->birthdate</td>
									<td> $row->present_address</td>
									<td> $row->present_city</td>		
									<td> $row->present_province</td>												
									<td width=\"50px\" height=\"1px\"> $row->gender</td>
									<td> $row->mobile_no</td>
									<td> $row->email</td>	
	                                </tr>  
	                               ";
	           
	            		}
	            $output_string .= " </tbody></table>";
     
        }
        else{
            $output_string = '"There are no results"';
            if($batch == null)
            {
                $output_string .="<br>NULL  BATCH";
            }
        } 
         
        echo json_encode($output_string);
    }

     public function traineeAttendanceByBatch(){
     	$batch=$this->input->post('batch');

       	$this->db->select('*');
        $this->db->from('hris');
        $this->db->join('trainee_attendance', 'hris.trainee_id = trainee_attendance.training_id', 'left');
        $this->db->where('batch_control_no',$batch);
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();

        if($query->num_rows > 0){

            $output_string = "<h1 class=''>List of Trainee: $batch</h1>";
            $output_string .= "  <table class='table table-striped table-bordered'> 
                                <thead>
								<tr>							
									<th>
										Training ID
									</th>
									<th>
										Batch ID
									</th>
									<th >
										Name
									</th>
									<th >							
										No. of Training days 
									</th>
									<th >
										No. of days attended
									</th>	
								</tr>
								</thead>
                                
                             ";
            foreach ($query->result() as $row){ 
                  
             $output_string .=  "<tr>
								<td>$row->trainee_id</td>
							 
								<td>$row->batch_control_no</td>
									<td>$row->last_name, $row->first_name $row->middle_name</td>
								<td class=\"center\">$row->training_days</td>
								<td class=\"center\">$row->present_days</td>

								</tr>";
                              
            //$output_string .= "Record $row->last_name";
       		 }   
            $output_string .= "<tbody></table>";
			
          
     
        }
        else{
            $output_string = '"There are no results"';
            if($batch == null)
            {
                $output_string .="<br>NULL  BATCH";
            }
        } 
         
        echo json_encode($output_string);
    }
	
	
	
}

/* End of file reports.php */
/* Location: ./application/controllers/reports.php */