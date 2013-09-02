<?php

class Request_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }

    function send_request($data) { 
     
		$this->db->insert('request', $data);
        
    }

    function list_request() {
        
        $this->db->select('*');
        $query = $this->db->get('request');
        return $query->result();
    }

    function confirm_request($id, $data) {

        $this->db->where('request_id', $id);
        $this->db->update('request', $data); 
    }
    
    function list_confirmed() {

        $query = $this->db->query("SELECT * FROM request WHERE confirmed=1 AND is_read=0 AND company='".$this->session->userdata("company")."'");
        return $query->result();
    }

    function hide_confirmed($id, $data) {

        $this->db->where('request_id', $id);
        $this->db->update('request', $data); 
    }
}