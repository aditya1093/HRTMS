<?php

class Examination_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function create_exam($data) {

        $this->db->insert('examination', $data);
    }
    
    function list_exam() {

        $str = "SELECT examination_id, COUNT( question_id ) AS items , examination_name, date_modified, IF(is_active=0,'<span class=\"label label-warning\">Inactive</span>','<span class=\"label label-success\">Active</span>') AS is_active
            FROM examination
            LEFT OUTER JOIN questions ON examination.examination_id = questions.exam_id 
            GROUP BY examination_id";
        $query = $this->db->query($str);
        return $query->result();

    }


    function add_item($data) {

        $this->db->insert('questions', $data);
    }

    function load_items() {

        $str = "SELECT * FROM questions WHERE exam_id=".$this->session->userdata("eid");
        $query = $this->db->query($str);
        return $query->result();
    }

    function name_exam() {

        $str = "SELECT examination_name FROM examination WHERE examination_id=".$this->session->userdata("eid");
        $query = $this->db->query($str);
        $this->session->set_userdata("ename",$query->row()->examination_name);
    }

    function toggle_activate($id, $data) {

        $this->db->where('examination_id', $id);
        $this->db->update('examination', $data); 
    }

    function toggle_activate_all($data) {

        $this->db->update('examination', $data); 
    }

    function rename_exam($id, $data) {

        $this->db->where('examination_id', $id);
        $this->db->update('examination', $data); 
    }


    function delete_exam($id) {

        $this->db->delete('examination', array('examination_id' => $id)); 
        $this->db->delete('questions', array('exam_id' => $id)); 
    }

    function delete_item($id) {

        $this->db->delete('questions', array('question_id' => $id)); 
    }

    
}  