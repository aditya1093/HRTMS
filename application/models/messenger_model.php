<?php

class Messenger_Model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function load_messages() {

        $this->db->select('*');
        $this->db->from('inbox');
        $query = $this->db->get();
        return $query->result();
        
    } 

    function send_message($data) {

        $this->db->insert('inbox', $data);
    }
   
    function messenger_query($q) {

        $query = $this->db->query($q);
        return $query->result();
    }
}  