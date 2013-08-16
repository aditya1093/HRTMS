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
    $this->db->select('*');
    $this->db->where('register_id',$id);
    $this->db->from('registration');
    $query = $this->db->get();
    return $query->result();
     
     /*if( $query->num_rows() > 0 ) {
            echo json_encode($query);
        } else {
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

	   if ( $query->num_rows() > 0 )
	    {
	      
          /*  $row = $query->row_array();

	        return $row;

            */
            $row = $query->row();

            $data = array(
                    /* Info */
                    'app_register_id' => $row->id,
                    'app_last_name' => $row->last_name,
                    'app_first_name' => $row->first_name,
                    'app_middle_name' => $row->middle_name, 
                    'app_address' => $row->address,
                    'app_address2' => $row->address_2,
                    'app_city'  => $row->city,
                    'app_state' => $row->state,
                    'app_country' => $row->country,  
                    'app_zipcode' => $row->zipcode,
                    'app_gender' => $row->gender,
                    'app_bday' => $row->birth_date,
                    'app_phone' => $row->phone,

                    /* Account */
                    'app_date_created' => $row->date_created,
                    'app_active' => $row->active,
                    'app_username' => $row->username,
                    'app_password' => $row->password,
                    'app_email' => $row->email
                   
                    );
            return $data;
	    }
    }
}  