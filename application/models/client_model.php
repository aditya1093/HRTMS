<?php

class Client_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }


    function list_company() {
        
        $this->db->select('*');
        $this->db->from('client');
        $query = $this->db->get();
        return $query->result();
    }

    function add_client($data) { 

        //insert muna sa table ng examination
        //$this->db->insert('examination', $data);
     
		$this->db->insert('client', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : TRUE;	
        
    }
    

}