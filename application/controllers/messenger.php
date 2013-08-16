<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messenger extends CI_Controller {

	public function index()
	{
		$this->load->model('Messenger_Model');

		//le break MVC rules
		$q = 

		"SELECT message_id, sender_id, receiver_id, message, time_sent, is_read, 
		CONCAT(first_name, ' ', last_name) AS full_name, permission  
		FROM inbox INNER JOIN user_table ON receiver_id=id AND receiver_id='". $this->session->userdata("id") . "'";
		
		$query = $this->Messenger_Model->messenger_query($q);

		$data['records'] = $query;

		$q = "SELECT * FROM user_table";
		
		$query = $this->Messenger_Model->messenger_query($q);

		$data['user_records'] = $query;

		$this->load->view('chat_view', $data);
		
	}

	public function send_message($param = 0) {

		if($this->input->post('ajax')) {

			$data = array(

				'sender_id' => $this->input->post('sender_id'),
				'receiver_id' => $this->input->post('receiver_id'),
				'message' => $this->input->post('message'),
				'time_sent' => date('Y-m-d H:i:s')

			);

			$this->load->model('Chat_Model');

			$this->Chat_Model->send_message($data);

			$query = $this->Chat_Model->load_messages();

			echo json_encode($query);

			

			
			

		}
		else {

			echo "AJAX error :(";

			//redirect(base_url() . 'index.php/examination');

		}

	}
}
/* End of file messenger.php */
/* Location: ./application/controllers/messenger.php */