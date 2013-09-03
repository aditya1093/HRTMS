<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->model('client_model');
			$query = $this->client_model->list_company();
			$data['records'] = $query;
			$this->load->view('company/company_view', $data);
		}
		else {

    		$this->load->view('login_view', $data);
		}	
	
	}
	function add_client() {

		$this->form_validation->set_rules('client_name', 'client Name', 'required|xss_clean');
		$this->form_validation->set_rules('client_location', 'Location', 'required|xss_clean');
		$this->form_validation->set_rules('client_username', 'Username', 'trim|required|xss_clean|min_length[6]|is_unique[user_table.username]|alpha_dash');
		$this->form_validation->set_rules('client_password', 'Password', 'trim|required|matches[password_confirm]|min_length[6]');
		$this->form_validation->set_rules('client_password_confirm', 'Password Confirmation', '');
		$this->form_validation->set_rules('client_email', 'Email', 'required|valid_email');
		
 
        //$this->session->unset_userdata('error_client');
        $query = $this->db->query("select * from user_count where count_id = 1");
		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
		      $p= $row->client_count + 1;
		   }
		   	$client_count = $p;
			$p = sprintf("%04d",$p) ;
			$permi = "-CLIENT-";
			$user_id = 'AMI' .$permi.$p;
		}
		else
		{
			$this->db->insert('user_count', array('client_count' => '1' ));
			$p = "1";
			$p = sprintf("%04d",$p);
			$permi = "-CLIENT-";
			$user_id = 'AMI' .$permi.$p;

		}
        if($this->form_validation->run() == true) {

        	$data = array(
        			'user_id' => $user_id,
        			'client_name' => $this->input->post('client_name'),
        			'client_location' => $this->input->post('client_location'),
        			'client_username' => $this->input->post('client_username'),
        			'client_email' => $this->input->post('client_email')
        		);
        	$userTable = array(
        			'user_id' => $user_id,
        			'first_name' => $this->input->post('client_name'),
        			'username' => $this->input->post('client_username'),
        			'password' => md5($this->input->post('client_password')),
        			'email' => $this->input->post('client_email')
        		);
        	$count = array('client_count' => $client_count);
    		
			$this->load->model('client_model');
			$this->client_model->add_client($data,$count,$userTable);



			$config['hostname'] = 'ftp.jemnuine.com';
	        $config['username'] = 'jemnuin2@jemnuine.com';
	        $config['password'] = 'sinigang123';
	        $config['debug']    = TRUE;


	        $success_string = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Client account has successfully added.</div>';
 			$this->session->set_flashdata('client_message',$success_string); 

 			
	        $this->ftp->connect($config);

	        //$this->ftp->mirror('/', '/public_html/elfinder/files/');
	        //$list = $this->ftp->list_files('/public_html/elfinder/files/Modules/'.$path);
	        if(!$this->ftp->mkdir('/public_html/elfinder/files/AMI-Training/'.strtoupper($this->input->post('client_name')).'/', DIR_WRITE_MODE))
	        {
	        	redirect(base_url().'client', 'refresh');
	        	$this->ftp->close();
	        }
	        $this->ftp->close();
	        

		}
		else
		{

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() .$user_id. '</div>';
			$data = array (
					'client_message' => $error_string,
					'client_name' => $this->input->post('client_name'),
        			'client_location' => $this->input->post('client_location'),
        			'client_username' => $this->input->post('client_username'),
        			'client_email' => $this->input->post('client_email')

				);	
			//$this->session->set_userdata($data);
			$this->session->set_flashdata($data); 
			
		}

		redirect(base_url().'client', 'refresh');	
	}

	/********************* client view ************************/

	function send_request() {

		$arr = explode("-", $this->input->get("date-range-picker"));

		$data = array(
			'no_of_manpower' => $this->input->get("no_of_manpower"),
			'date_requested' => date("Y-m-d", strtotime($arr[0])),
			'to' => date("Y-m-d", strtotime($arr[1])),
			'remarks' => $this->input->get("remarks"),
			'company' => $this->session->userdata("company")
		);

		$this->load->model('request_model');
		$this->request_model->send_request($data);

		
		redirect(base_url().'dashboard', 'refresh');	
	}

	function hide_confirmed() {

		$this->load->model('request_model');
		$this->request_model->hide_confirmed($this->input->post("id"), array("is_read" => "1"));
	}

}

/* End of file client.php */
/* Location: ./application/controllers/client.php */