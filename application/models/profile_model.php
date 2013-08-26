<?php

class Profile_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function profile_applicant($id) {
        
        $this->db->select('*');     
        $this->db->from('user_table');
        $this->db->where('user_table.id',$id);
        $this->db->join('registration', 'registration.register_id = user_table.id');
        $query = $this->db->get();
        return $query->result();
    } 

    function profile_trainee($id) {
        
        $this->db->select('*');     
        $this->db->from('user_table');
        $this->db->where('user_table.id',$id);
        $this->db->join('hris', 'hris.trainee_id = user_table.id');
        $query = $this->db->get();
        return $query->result();
    } 

    function change_info($data) {

            $this->session->set_userdata($data);
            $this->db->where('register_id', $this->session->userdata('id'));
            $this->db->update('registration', $data);
            return true;
    }

   

   
    
}  