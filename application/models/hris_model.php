<?php

class Hris_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }


    function personal_info($data) {

            //$this->session->set_userdata($data);
            $this->db->where('trainee_id', $this->session->userdata('id'));
            $this->db->update('hris', $data);
            return true;
    }

   
   
    
}  