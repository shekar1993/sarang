<?php

defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('display_errors', 1);

class Welcome extends CI_Controller {

    protected $_enable_log_output = TRUE;
	
    function __construct() {
        parent::__construct();


        $this->load->library('form_validation');
        $this->load->model('welcome_model');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('breadcrumbs');
        $this->load->library('facebook');
        $this->load->library('google');
        $this->load->model('user');
         $this->load->helper(['jwt', 'authorization']);   

        $config['upload_path'] = 'public/assets/avatar'; //core folder (if you like upload to application folder use APPPATH)
        $config['allowed_types'] = 'gif|jpg|png'; //allowed MIME types
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        //creates uniuque filename this is mainly for security reason
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
 
        
        $this->breadcrumbs->push('Home', '/admin');
        $this->breadcrumbs->push('Dashboard', '/admin/dashboard');
        $data['breadcrumb'] = $this->breadcrumbs->show();
        $data['title'] = "Home";
        $data['isloggedin'] = $this->session->userdata('isloggedin');
        $this->load->hometemplate('index', $data);
    }

    public function logout() {
        $this->session->unset_userdata('isloggedin');
        $this->session->unset_userdata('userData');
        redirect('welcome/login');
    }

    public function login() {
        // Prepare the response
        $data['authURL'] = $this->facebook->login_url();
        $data['loginURL'] = $this->google->loginURL();
        $data['login_result'] = $this->session->userdata('result');
        $this->session->unset_userdata('result');
		
        $this->load->hometemplate('login', $data);
    }

    public function signup() {
        $data['result'] = $this->session->userdata('result');
        $this->session->unset_userdata('result');
        $data['authURL'] = $this->facebook->login_url();
        $data['loginURL'] = $this->google->loginURL();
        $this->load->hometemplate('signup', $data);
    }

    public function saranglogin() {
        $userData['email'] = !empty($this->input->post('email')) ? $this->input->post('email') : '';
        $userData['password'] = !empty($this->input->post('password')) ? $this->input->post('password') : '';


        $this->form_validation->set_rules('email', "Email", 'trim|required');
        $this->form_validation->set_rules('password', "Password", 'trim|required');


        if ($this->form_validation->run() == true) {
            //die("check for username and password");
        }

        $loginStatus = $this->user->validateUser($userData);

        if ($loginStatus['result'] === 'success') {
            $this->session->set_userdata('userData', $userData);
            $this->session->set_userdata('result', $loginStatus);
            $this->session->set_userdata('isloggedin', 'true');
          //  $this->redirectPage($loginStatus['userID']);
        } else if ($loginStatus['result'] == 'pending') {

            $data['userData'] = array();
            $this->session->set_userdata('result', 'warning');
        } else if ($loginStatus['result'] == 'failed') {
            $this->session->set_userdata('result', 'error');
        }

        redirect('welcome/login');
    }

    public function sarangSignup() {

        $userData = array();
        $userData['oauth_provider'] = 'sarang';
        $userData['oauth_uid'] = '';
        $userData['first_name'] = !empty($this->input->post('username')) ? $this->input->post('username') : '';
        $userData['last_name'] = !empty($this->input->post('lastname')) ? $this->input->post('lastname') : '';
        $userData['email'] = !empty($this->input->post('email')) ? $this->input->post('email') : '';
        $userData['gender'] = !empty($this->input->post('gender')) ? $this->input->post('gender') : '';
        $userData['country'] = !empty($this->input->post('country')) ? $this->input->post('country') : '';
        $userData['timezone'] = !empty($this->input->post('timezone')) ? $this->input->post('timezone') : '';
        $userData['picture'] = !empty($fileInfo) ? $fileInfo : '';
        $userData['link'] = '';
       $userData['user_type'] = 'student';
        $userData['password'] = !empty($this->input->post('password')) ? $this->input->post('password') : '';


        $userID = $this->user->checkUser($userData);

       if($userID >=0) {
            $data['userData'] = $userData;
            $this->session->set_userdata('userData', $userData);
            $this->session->set_userdata('result', 'success');
            $this->redirectPage($userID);
        }
        else if($userID<0){
                        $data['userData'] = array();
            $this->session->set_userdata('result', 'warning');
            redirect('welcome/signup');
        }
    }

    public function fblogin() {
        $userData = array();
        if ($this->facebook->is_authenticated()) {

            // Get user facebook profile details
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture');

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = !empty($fbUser['id']) ? $fbUser['id'] : '';
            $userData['first_name'] = !empty($fbUser['first_name']) ? $fbUser['first_name'] : '';
            $userData['last_name'] = !empty($fbUser['last_name']) ? $fbUser['last_name'] : '';
            $userData['email'] = !empty($fbUser['email']) ? $fbUser['email'] : '';
            $userData['gender'] = !empty($fbUser['gender']) ? $fbUser['gender'] : '';
            $userData['picture'] = !empty($fbUser['picture']['data']['url']) ? $fbUser['picture']['data']['url'] : '';
            $userData['link'] = !empty($fbUser['link']) ? $fbUser['link'] : '';
            $userData['user_type'] = 'student';
            $userData['timezone'] = $this->session->userdata('timezone');

            // Insert or update user data
            $userID = $this->user->checkUser($userData);
            if ($userID > 0) {
                $data['logoutURL'] = $this->facebook->logout_url();
                $this->session->set_userdata('userData', $userData);
                $this->session->set_userdata('isloggedin', 'true');
            } 

            $this->redirectPage($userID);
            
         
        }
    }

    public function oauth2callback() {

        if (isset($_GET['code'])) {

            // Authenticate user with google
            if ($this->google->getAuthenticate()) {

                // Get user info from google
                $gpInfo = $this->google->getUserInfo();

                // Preparing data for database insertion
                $userData['oauth_provider'] = 'google';
                $userData['oauth_uid'] = $gpInfo['id'];
                $userData['first_name'] = $gpInfo['given_name'];
                $userData['last_name'] = $gpInfo['family_name'];
                $userData['email'] = $gpInfo['email'];
                $userData['gender'] = !empty($gpInfo['gender']) ? $gpInfo['gender'] : '';
                $userData['locale'] = !empty($gpInfo['locale']) ? $gpInfo['locale'] : '';
                $userData['link'] = !empty($gpInfo['link']) ? $gpInfo['link'] : '';
                $userData['picture'] = !empty($gpInfo['picture']) ? $gpInfo['picture'] : '';
                $userData['user_type'] = 'student';
                $userData['timezone'] = $this->session->userdata('timezone');

                // Insert or update user data to the database
                $userID = $this->user->checkUser($userData);
                if ($userID > 0) {
                    $this->session->set_userdata('userData', $userData);
                    $this->session->set_userdata('isloggedin', 'true');
                }
                $this->redirectPage($userID);
            }
        }
    }
 
    public function redirectPage($userID) {

        switch ($userID) {
            case 0:
                    $this->session->set_userdata('result', 'warning'); 
                    redirect('welcome/login');
                break;

            case 1:
                redirect('admin/index');
                break;
            case 2:
                redirect('instructor/index');
                break;
            case 3:
                redirect('student/index');
                break;
        }

        $this->session->unset_userdata('usertype');
        $this->session->unset_userdata('timezone');
    }
    private function verify_request()
    {
        // Get all the headers
        $headers = $this->input->request_headers();

        // Extract the token
        $token = $headers['Authorization'];

        // Use try-catch
        // JWT library throws exception if the token is not valid
        try {
            // Validate the token
            // Successfull validation will return the decoded user data else returns false
            $data = AUTHORIZATION::validateToken($token);
            if ($data === false) {
                $status = parent::HTTP_UNAUTHORIZED;
                $response = ['status' => $status, 'msg' => 'Unauthorized Access!'];
                $this->response($response, $status);

                exit();
            } else {
                return $data;
            }
        } catch (Exception $e) {
            // Token is invalid
            // Send the unathorized access message
            $status = parent::HTTP_UNAUTHORIZED;
            $response = ['status' => $status, 'msg' => 'Unauthorized Access! '];
            $this->response($response, $status);
        }
    }
    public function storeutype() {

        $usertype = $this->input->post('usertype');
        $this->session->set_userdata('usertype', $usertype);
    }
    
    	public function cashfree()
	{
		$secretKey = "723d03fd1b9754283412067313eb4b90ebdda7fc";
		$postData = array(
		"appId" => $this->input->post('appId'),
		"orderId" =>$this->input->post('orderId'),
		"orderAmount" => $this->input->post('orderAmount'),
		"orderCurrency" => $this->input->post('orderCurrency'),
		"orderNote" => $this->input->post('orderNote'),
		"customerName" => $this->input->post('customerName'),
		"customerPhone" => $this->input->post('customerPhone'),
		"customerEmail" => $this->input->post('customerEmail'),
		"returnUrl" => $this->input->post('returnUrl'),
		"notifyUrl" => $this->input->post('notifyUrl'),
		);
		// get secret key from your config
		ksort($postData);
		$signatureData = "";
		foreach ($postData as $key => $value) {
			$signatureData .= $key.$value;
		}
		$signature = hash_hmac('sha256', $signatureData, $secretKey,true);
		$signature = base64_encode($signature);
		
	echo $signature;
	}

        public function payment(){
             $this->load->hometemplate('payment');
            
        }
    public function getTimeZone() {
        $timezone_offset_minutes = $_POST["offset"];
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes * 60, false);
        $this->session->set_userdata('timezone', $timezone_name);
        echo $timezone_name;
    }

    public function course() {
        $data['title'] = "Course";
        $this->load->hometemplate('courses', $data);
        
    }

    public function course_details() {
        $data['title'] = "Course Details";
        $this->load->hometemplate('coursedetails', $data);
    }

    public function contact_us() {
        $data['title'] = "Contact us";
        $this->load->hometemplate('contact', $data);
    }

    public function productdetails() {
        $data['title'] = "Product details";
        $this->load->producttemplate('productdetails');
    }

    public function viewcart() {
        $data['title'] = "viewcart";
        $this->load->producttemplate('viewcart');
    }

    public function checkout() {
        $data['title'] = "viewcart";
        $this->load->carttemplate('checkout');
    }

}
