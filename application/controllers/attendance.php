<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attendance extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {
			$this->load->model('applicant_model');
			$query = $this->applicant_model->trainee_list();
			$data['records'] = $query;

			$this->load->model('client_model');
			$query = $this->client_model->list_company();
			$data['records2'] = $query;
			
			//$this->load->view('company/company_view', $data);
			$this->load->view('training/attendance_view',$data);
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

			$client_name = $this->input->post('client_name');
			$date_start = $this->input->post('date_start');
			$training_days = $this->input->post('training_days');

			$date_end = date('Y-m-d', strtotime($date_start. ' + '.$training_days.' days'));
			echo $batch_no;
			
			$data = array(
				'batch_control_no' => $batch_no , 
				'client' => $client_name, 
				'date_start' => $date_start , 
				'training_days' => $training_days,
				'date_created' => date("Y-m-d H:i:s")

				);
			$this->load->model('applicant_model');
			$this->applicant_model->addBatchNo($data);
		
		}
		else {
   
    		$this->load->view('login_view');
		}

	}

}

/* End of file attendance.php */
/* Location: ./application/controllers/attendance.php */




