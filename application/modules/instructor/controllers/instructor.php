<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructor extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		
		
		$this->load->library('form_validation');
			
		$this->load->model('instructor_model');
                   $this->load->helper('url');	
		     $this->load->library('session');
                     $this->load->library('breadcrumbs');
                       $this->load->library('facebook');
                       $this->load->library('google');
                 $this->load->model('user');
    }

                     public function index()
	{
                $this->breadcrumbs->push('Home', '/admin');
                $this->breadcrumbs->push('Dashboard', '/admin/dashboard');
                $data['breadcrumb']=  $this->breadcrumbs->show(); 
                $data['title']=  "Dashboard"; 
                $this->load->template('instructor','sidebar',$data);
	}
}
