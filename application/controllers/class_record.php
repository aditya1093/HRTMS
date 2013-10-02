<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Class_Record extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			$this->load->model('report_model');
			$query2 = $this->report_model->exam_set_batch();
			$data['records2'] = $query2;
			
			$this->load->view('user/training/class_record_view',$data);
		}
		else {

    		$this->load->view('login_view');
		}	
	}

	function exam_id(){
    	$batch=$this->input->post('batch');

       	$this->db->select('*');
        $this->db->from('exam_set');
        $this->db->join('examination','exam_set.exam_id = examination.examination_id');
       // $this->db->where('batch_id',$batch);
        $query = $this->db->get();
        $str = "";
	    if ($query->num_rows() > 0)
		{	
			$str .= "<label >Examination name: </label>";
			$str .= "<select class=\"chzn-select\" id=\"exam\">";
			$str .= "<option value=\"\"></option>";
		   foreach ($query->result() as $row)
		   {
		      
		      $str .= "<option value=".$row->exam_id." exam_name="."'".$row->examination_name."'".">";
		      $str .= $row->examination_name;
		      $str .= "</option>";
		   
		  
			}
			$str .= "</select>";
		}
		//echo $str;
        echo json_encode($str);
        //echo json_encode($batch);

    }

	
    function gradesheetByExamId(){
    	$exam_id = $this->input->post('id');
    	$batch = $this->input->post('batch');
    	$exam_name = $this->input->post('name');
    	//echo json_encode($exam_id);


    	$this->db->select('hris.trainee_id ,hris.first_name, hris.last_name, hris.middle_name, gradesheet.score, gradesheet.over, gradesheet.status');
    	$this->db->from('hris');
    	$this->db->join('gradesheet', 'hris.trainee_id = gradesheet.trainee_id');
        $this->db->where('gradesheet.exam_id',$exam_id);
        $this->db->where('gradesheet.status','PASSED');
        $query = $this->db->get();

      	/*  $query = $this->db->query('select hris.trainee_id ,hris.first_name, hris.last_name, hris.middle_name, gradesheet.score, gradesheet.over, gradesheet.status 
        	from hris inner join gradesheet on hris.trainee_id = gradesheet.trainee_id where exam_id = '.$exam_id .'where status = "PASSED"');
        *///$this->db->order_by("hris.trainee_id", "asc"); 
        //
        $str = "";
        if ($query->num_rows() > 0)
		{	
			//$str .= "Examination name: ";
			$str .= "  <table class='table table-striped table-bordered' id='table_report' > 
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
            $str .= "<tbody>"; 
			   foreach ($query->result() as $row)
			   {
			     	
			   		$str .= "<tr> 
	                            <td> $row->trainee_id</td>
	                            <td> $row->last_name, $row->first_name $row->middle_name</td>
	                            <td class='center'> $row->score/$row->over</td>
	                            <td class='center'> ". strtoupper($row->status)."</td>
	                        </tr>";
			   
			  
			}
			$str .= "</tbody></table>";
			
		}
		else
		{
			$str .= "NO RESULT";
		}
		echo json_encode($str);
    }
}

/* End of file attendance.php */
/* Location: ./application/controllers/attendance.php */