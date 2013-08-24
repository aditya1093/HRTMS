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

}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */
