<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	public function register($data)
	{
		$this->db->insert('registration', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}

	public function userTable($data)
	{
		$this->db->insert('user_table', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}



}