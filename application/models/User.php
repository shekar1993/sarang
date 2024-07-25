<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    function __construct() {
        $this->tableName = 'users';
        $this->primaryKey = 'id';
    }

    /*
     * Insert / Update facebook profile data into the database
     * @param array the data for inserting into the table
     */

    public function getUserTypeId($userType) {
        $userID = 0;
        switch ($userType) {
            case "admin":
                $userID = 1;
                break;
            case "instructor":
                $userID = 2;
                break;
            case "student":
                $userID = 3;
                break;
        }
        return $userID;
    }

    public function checkUser($userData = array()) {
        if (!empty($userData)) {
            //check whether user data already exists in database with same oauth info
            $this->db->select("*");
            $this->db->from($this->tableName);
            if ($userData['oauth_provider'] != 'sarang') {
                $this->db->where(array(
                    'oauth_provider' => $userData['oauth_provider'],
                    'oauth_uid' => $userData['oauth_uid']));
            } else {
                $this->db->or_where('email', $userData['email']);
            }

            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            /*
              if($prevCheck >0){
              $prevResult = $prevQuery->row_array();

              //update user data
              $userData['modified'] = date("Y-m-d H:i:s");
              $update = $this->db->update($this->tableName, $userData, array('id' => $prevResult['id']));

              //get user ID
              $userID = $prevCheck;
              } */


            $userID = $prevCheck;
            $prevResult = $prevQuery->row_array();
            if ($prevCheck == 0) {
                //insert user data
                $userData['created'] = date("Y-m-d H:i:s");
                $userData['modified'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert($this->tableName, $userData);
            } else {
                if ($prevResult['user_status'] == 0) {
                    $userID = 0;
                } else if ($prevResult['user_status'] == 1) {
                    
                    $userID = $this->getUserTypeId($prevResult['user_type']);
                }
                  if ($prevResult['oauth_provider'] != 'sarang'){
                          $userID = -1;
                  }
            }
        }
        return $userID;
    }

    public function validateUser($userData = array()) {
        $userStatus = array();
        $this->db->select("*");
        $this->db->from($this->tableName);
        $this->db->where(array(
            'email' => $userData['email'],
            'password' => $userData['password']));

        $prevQuery = $this->db->get();
        $prevCheck = $prevQuery->num_rows();
	

        if ($prevCheck > 0) {
            $prevResult = $prevQuery->row_array();
            if ($prevResult['user_status'] === 1) {
                $userStatus['result'] = 'success';
                $userStatus['userData'] = $prevResult;
                $userStatus['userID'] = $this->getUserTypeId($prevResult['user_type']);
            } else if ($prevResult['user_status'] === 0) {
                $userStatus['result'] = 'pending';
            }
        } else {
            $userStatus['result'] = 'failed';
        }
        return $userStatus;
    }

}
