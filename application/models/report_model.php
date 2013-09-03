<?php

class Report_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        
    }


    function list_trainee() {
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();
        return $query->result(); 
    }


    function trainee_attendance() {
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('trainee_attendance', 'hris.trainee_id = trainee_attendance.training_id','left');
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();
        return $query->result(); 
    }
    function traineeAttendanceByBatch($batch) {
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('trainee_attendance', 'hris.trainee_id = trainee_attendance.training_id','left');
        $this->db->where('batch_control_no',$batch);
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }
   
 
    function gradesheet() {
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('gradesheet', 'hris.trainee_id = gradesheet.training_id','left');
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }

     function byBatch() {
        $this->db->select('batch_control_no');
        $this->db->distinct();
        $this->db->from('hris');
        $this->db->join('gradesheet', 'hris.trainee_id = gradesheet.training_id','left');
        $this->db->order_by("batch_control_no", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }


    function gradesheetByBatch($batch) {
        $this->db->select('*');
        $this->db->from('hris');
        $this->db->join('gradesheet', 'hris.trainee_id = gradesheet.training_id','left');
        $this->db->where('batch_control_no',$batch);
        $this->db->order_by("trainee_id", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }
} 