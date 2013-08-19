<?php

class Profile_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function profile($id) {
        
        $this->db->select('*');     
        $this->db->from('user_table');
        $this->db->where('user_table.id',$id);
        $this->db->join('registration', 'registration.register_id = user_table.id');
        $query = $this->db->get();
        return $query->result();
    } 
   
    
}  