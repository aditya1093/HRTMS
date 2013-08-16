<?php

class Manage_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function list_hr() {
        $permission='hr';
        $this->db->select('*');
        $this->db->where('permission',$permission);
        $this->db->from('user_table');
        $this->db->join('user_logs', 'user_logs.user_id = user_table.id','left');
        $query = $this->db->get(); 
        return $query->result();
    } 
    function add_hr($data) {  
 
        $this->db->insert('user_table', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;   
       
    } 
    
    
    function delete_hr($hr_id) {

        $this->db->where('id', $hr_id);
        $this->db->delete('uesr_table');
    }

     function info($id)
    {
        $this->db->select('*');
        $this->db->from('uesr_table');
        $this->db->where('id', $id );
        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
          
          /*  $row = $query->row_array();

            return $row;

            */
           $row = $query->row();
           $data = array(
                    /* Info */
                    'hr_id' => $row->id, 
                    'hr_username' => $row->username,
                    'hr_email' => $row->email,
                    'hr_displayname' => $row->displayname,                    
                    'hr_password' => $row->password  
                
                      
                   
                    );
            return $data;
        }
    } 

    function change_info($displayname, $email) {

            $data = array (
                    'displayname' => $displayname,
                    'email' => $email
                );

            $this->session->set_userdata($data);

            $this->db->where('id', $this->session->userdata('hr_id'));
            $this->db->update('uesr_table', $data);
            return true; 
    }

    function change_pass($password) {

            $data = array (
                    'password' => md5($password)
                );

            $this->session->set_userdata($data);

            $this->db->where('id', $this->session->userdata('id'));
            $this->db->update('uesr_table', $data);
            return true;
    }

    function list_trainer() {
        $permission='trainer';
        $this->db->select('*');
        $this->db->where('permission',$permission);
        $this->db->from('user_table');
        $this->db->join('user_logs', 'user_logs.user_id = user_table.id','left');
        $query = $this->db->get(); 
        return $query->result();
    } 
     function add_trainer($data) {  
 
        $this->db->insert('user_table', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : TRUE;   
       
    } 
    
}  