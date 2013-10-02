<?php

class Deployment_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }

   	function request_info($id){

   		$this->db->select('*');
   		$this->db->from('request');
   		$this->db->where('request_id', $id);
   		$query = $this->db->get();
   		return $query->result();
   		
   	}

    function list_trainee($id){

	     $this->db->select('hris.trainee_id ,hris.first_name, hris.last_name, hris.middle_name, hris.mobile_no, hris.home_no');
	     $this->db->from('hris');
	     $this->db->join('batch_no', 'hris.batch_control_no = batch_no.batch_control_no');
	     $this->db->where('batch_no.request_id',$id);
	     $query = $this->db->get();
	     return $query->result();
     
    }
    
    

}