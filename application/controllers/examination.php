<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examination extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('applicant_model');
			$query = $this->applicant_model->trainee_list();
			$data['records'] = $query;

			
			$this->load->view('training/examination_view',$data);
		}
		else {

    		$this->load->view('login_view');
		}	

	}

	function create_exam() {

		$data = array(
			'examination_name' => $this->input->post('examination_name'),
			'date_modified' => date('Y-m-d H:i:s')
		);

		$this->load->model("examination_model");
		$this->examination_model->create_exam($data);

	}

	function list_exam() {

		$this->load->model("examination_model");
		$data = $this->examination_model->list_exam();

		$str = json_encode($data);
		$str = '{ "aaData": '. $str . '}';
		echo $str;
	}

	function edit_exam($param="") {

		if($param) {

			$data = array("eid" => $param);

			$this->session->set_userdata($data);

			$this->load->view('training/examination_items_view');
		}
	}

	function add_item() {

		$data = array(

			'question' => $this->input->post("question"),
			'answers' => $this->input->post("answers"),
			'key_answer' => $this->input->post("key_answer"),
			'question_type' => $this->input->post("question_type"),
			'exam_id' => $this->session->userdata("eid"),
			'no_of_choices' => $this->input->post("no_of_choices")

		);

		$this->load->model("examination_model");
		$this->examination_model->add_item($data);

	}
	
	function load_items() {

		$this->load->model("examination_model");
		$data = $this->examination_model->load_items();

		$str = json_encode($data);
		echo $str;
	}
}

/* End of file examination.php */
/* Location: ./application/controllers/examination.php */