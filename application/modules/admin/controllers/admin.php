<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->load->library('form_validation');

        $this->load->model('admin_model');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('breadcrumbs');
        $this->load->library('facebook');
        $this->load->library('google');
        $this->load->model('user');
    }

    public function index() {

        $this->breadcrumbs->push('Home', '/admin');
        $this->breadcrumbs->push('Dashboard', '/admin/dashboard');
        $data['breadcrumb'] = $this->breadcrumbs->show();
        $data['title'] = "Dashboard";

        $data['instructorlist'] = $this->admin_model->getinstructor();
        $edituser=$this->session->userdata('edituser');
        $this->session->unset_userdata('edituser');
        if(!empty($edituser)){
             $data['edituser'] = $edituser;
        }

        $this->load->template('Dashboard', 'sidebar', $data);
    }

    public function profile() {
        $this->breadcrumbs->push('Home', '/admin');
        $this->breadcrumbs->push('Teacher', '/admin/teacher');
        $data['breadcrumb'] = $this->breadcrumbs->show();
        $data['title'] = "Teacher profile";
        $this->load->template('profile', 'sidebar', $data);
    }

    public function userAction() {

        $id = $this->input->get('id');
        $result = $this->admin_model->setUserStatus($id);
        redirect('admin/index');
    }
    
    public function editUser(){
        $id = $this->input->get('id');
        $result = $this->admin_model->getUserDetail($id);
        echo var_dump($result);
        $this->session->set_userdata('edituser', $result);
        redirect('admin/index');
    }
    public function saveUser(){
        
        $id = $this->input->post('id');
        $firstName= $this->input->post('first_name');
         $lastName= $this->input->post('last_name');
          $email= $this->input->post('email');
           $country= $this->input->post('country');
            $gender= $this->input->post('gender');
             $updateData = array("first_name"=>$firstName,
                 "last_name"=>$lastName,
                 "email"=>$email,
                 "country"=>$country,
                 "gender"=>$gender);
            $result = $this->admin_model->saveUserDetail($id,$updateData);
          redirect('admin/index');
    }

}
