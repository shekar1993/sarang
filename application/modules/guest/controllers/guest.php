<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		
		
		$this->load->library('form_validation');
			
		
                   $this->load->helper('url');	
		     $this->load->library('session');
                     $this->load->library('breadcrumbs');
                       $this->load->library('facebook');
                       $this->load->library('google');
              
    }
	   public function index(){
		  $this->load->hometemplate('index');
	   }
}