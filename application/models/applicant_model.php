<?php

class Applicant_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function applicant_list() {
    	
        $this->db->select('*');
        $query = $this->db->get('registration');
        return $query->result();
    }

    function trainee_list() {
        
        $this->db->select('*');
        $query = $this->db->get('hris');
        return $query->result();
    }

    function getInfo($id)
    {
        $status = "0";
        $this->db->select('*');
        $this->db->where('register_id',$id);
        $this->db->where('active', $status);
        $this->db->from('registration');
        $query = $this->db->get();
        return $query->result();
         
         /*if( $query->num_rows() > 0 ) {
                echo json_encode($query);
            } 
            else {
                $output_string = "There is no result";
                echo json_encode($output_string);
            }
        */ 
    }

   

    function info($register_id)
    {
        $this->db->select('*');
        $this->db->from('registration');
        $this->db->where('register_id', $register_id );
        $query = $this->db->get();
        return $query->result();
      
    }







    function add_trainee($data) {  
 
        $this->db->insert('user_table', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;   
       
    }
    function add_trainee_hris($data) {  
 
        $this->db->insert('hris', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;   
       
    }
     function update_userTable($reg_id,$data){

        $this->db->where('user_id', $reg_id);
        $this->db->update('user_table',$data);
       
        return TRUE;
        //$id = $this->db->update_id();
        //return (isset($id)) ? $id : TRUE;     

    }

    function update_registration($id){

        $this->db->where('register_id', $id);
        $this->db->update('registration',array('active'=>'1'));
        return TRUE;
        //$id = $this->db->update_id();
        //return (isset($id)) ? $id : TRUE; 

    }



























}  