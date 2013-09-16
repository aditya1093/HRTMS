<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		redirect(base_url() . 'index.php/dashboard');
	}

	/******************* List HR USER ***************************************/

	function hr() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('manage_model');
			$query = $this->manage_model->list_hr();
			$data['records'] = $query;			
			$this->load->view('admin/manage_accounts/hr_view', $data);
		}
		else {

    		$this->load->view('login_view');
		}	
	}

	/******************* ADD HR USER ***************************************/

	function add_hr() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[6]|is_unique[user_table.username]|alpha_dash');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password_confirm]|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', '');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|alpha|xss_clean');
		$this->form_validation->set_rules('middle_nme', 'Middle Name', 'trim|alpha|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        //$this->session->unset_userdata('error_hr');
		$query = $this->db->query("select * from user_count where count_id = 1");
        if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $p= $row->hr_count + 1;
		   }
		   	$hr_count = $p;
			$p = sprintf("%04d",$p) ;
			$permi = "-HR-";
			$user_id = 'AMI' .$permi.$p;
		}
		else
		{
			$this->db->insert('user_count', array('hr_count' => '1' ));
			$p = "1";
			$p = sprintf("%04d",$p) ;
			$permi = "-HR-";
			$user_id = 'AMI' .$permi.$p;

		}

        if($this->form_validation->run() == true) {
 
        	$data = array(
        			'user_id' => $user_id,
        			'username' => $this->input->post('username'),
        			'password' => md5($this->input->post('password')),
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'email' => $this->input->post('email'),
        			'permission' => 'HR',
        			'date_created' => date('Y-m-d H:i:s')
        		); 
    		$count = array('hr_count' => $hr_count);

			$this->load->model('manage_model');
			$this->manage_model->add_hr($data,$count);

			$success_string = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>HR account has successfully added.</div>';
 			$this->session->set_flashdata('hr_message',$success_string); 
		}
		else
		{

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
			$data = array (
					'hr_message' => $error_string,
					'username' => $this->input->post('username'),
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'email' => $this->input->post('email')

				);	
			//$this->session->set_userdata($data);
			$this->session->set_flashdata($data); 
		}

		redirect(base_url().'manage/hr', 'refresh');	
	}


	/******************* List TRAINER USER ***************************************/


	function training() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('manage_model');
			$query = $this->manage_model->list_trainer();
			$data['records'] = $query;			
			$this->load->view('admin/manage_accounts/training_view', $data);
		}
		else {

    		$this->load->view('login_view');
		}	
	}



	/******************* ADD TRAINER USER ***************************************/

	function add_trainer() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length[6]|is_unique[user_table.username]|alpha_dash');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password_confirm]|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|alpha|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|alpha|xss_clean');
		$this->form_validation->set_rules('middle_nme', 'Middle Name', 'trim|alpha|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        //$this->session->unset_userdata('error_trainer');
		$query = $this->db->query("select * from user_count where count_id = 1");
        if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $p= $row->trainer_count + 1;
		   }
		   	$trainer_count = $p;
			$p = sprintf("%04d",$p) ;
			$permi = "-TRAINER-";
			$user_id = 'AMI' .$permi.$p;
		}
		else
		{
			$this->db->insert('user_count', array('trainer_count' => '1' ));
			$p = "1";
			$p = sprintf("%04d",$p) ;
			$permi = "-TRAINER-";
			$user_id = 'AMI' .$permi.$p;

		}

        if($this->form_validation->run() == true) {
 
        	$data = array(
        			'user_id'		=> $user_id,
        			'username' => $this->input->post('username'),
        			'password' => md5($this->input->post('password')),
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'email' => $this->input->post('email'),
        			'permission' => 'Trainer',
        			'date_created' => date('Y-m-d H:i:s')
        		); 
    		$count = array('trainer_count' => $trainer_count);

			$this->load->model('manage_model');
			$this->manage_model->add_trainer($data,$count);

			$success_string = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Trainer account has successfully added.</div>';
 			$this->session->set_flashdata('trainer_message',$success_string); 
 
		}
		else
		{

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
			$data = array (
					'trainer_message' => $error_string,
					'username' => $this->input->post('username'),
        			'first_name' => $this->input->post('first_name'),
        			'last_name' => $this->input->post('last_name'),
        			'middle_name' => $this->input->post('middle_name'),
        			'email' => $this->input->post('email')

				);	
			//$this->session->set_userdata($data);
			$this->session->set_flashdata($data); 
			
		}

		redirect(base_url().'manage/training', 'refresh');	
	}


	/******************* Delete User ******************************/

	function delete_user() {
		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$id = $this->input->post("id");
			$username = $this->input->post("username");
			echo $id;
			$this->load->model('manage_model');
			//$this->manage_model->delete_user($id);

			$success_string = '<div class="alert alert-block alert-success">
										<button type="button" class="close" data-dismiss="alert">
											<i class="icon-remove"></i>
										</button>

										<p>
											<strong>
												<i class="icon-ok"></i>
												Well done!
											</strong>
											You successfully delete '.$client_name.'.'.
										'</p>

										<p>
											<button class="btn btn-small btn-success">Do This</button>
											<button class="btn btn-small">Undo</button>
										</p>
									</div>';
 			$this->session->set_flashdata('delete_message',$success_string); 


		}
		else {

    		$this->load->view('login_view');
		}	
	}


}

/* End of file manage.php */
/* Location: ./application/controllers/manage.php */