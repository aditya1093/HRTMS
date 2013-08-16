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
		
 
        $this->session->unset_userdata('error_client');

        if($this->form_validation->run() == true) {

        	$data = array(
        			'client_name' => $this->input->post('client_name'),
        			'client_location' => $this->input->post('client_location')
        		);
    		
			$this->load->model('client_model');
			$this->client_model->add_client($data);

		}
		else
		{

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
			$data = array (
					'error_client' => $error_string
				);	
			$this->session->set_userdata($data);
			
		}

		redirect(base_url().'client', 'refresh');	
	}

}

/* End of file client.php */
/* Location: ./application/controllers/client.php */