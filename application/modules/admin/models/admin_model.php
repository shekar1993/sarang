<?php

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->tableName = 'users';
        $this->primaryKey = 'id';
    }

    public function getinstructor() {

        $this->db->select("*");
        $this->db->from($this->tableName);
        $this->db->where('user_type', 'instructor');
        $prevQuery = $this->db->get();
        return $prevQuery->result();
    }

    public function getUserDetail($id) {
        $this->db->select("*");
        $this->db->from($this->tableName);
        $this->db->where('id', $id);
        $prevQuery = $this->db->get();
        return $prevQuery->result();
    }

    public function setUserStatus($id) {
        $updateData = array("user_status" => 1);
        $this->db->where("id", $id);
       return $this->db->update("users", $updateData);

    }
    public function saveUserDetail($id,$updateData){
         $this->db->where("id", $id);
       return $this->db->update("users", $updateData);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

