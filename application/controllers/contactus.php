<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactus extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
        $page = array('current' => 'contactus');
        $this->load->helper('utils_helper');
        $this->load->library('loggerclass');
		
		# login credentials
		$page['sns_id'] = $this->input->cookie('sns_id', true);
        $page['display_name'] = $this->input->cookie('display_name', true);
		$page['sns_username'] = $this->input->cookie('sns_username', true);
        $page['picture'] = $this->input->cookie('picture', true);
   	    $page['fb_sdk'] = $this->load->view('modules/facebook_sdk', '', true);		
		
        $this->data['header'] = $this->load->view('modules/header', $page,  true);
        $this->data['footer'] = $this->load->view('modules/footer', '', true);
        
	}
    
	public function index()
	{
        $this->loggerclass->log("contact us index");
        $this->load->view('contactus/index', $this->data);
	}
	
	public function mail() 
	{
        $this->loggerclass->log("contact us mail");

        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $subject = $this->input->post('subject');
        $content = $this->input->post('message');

        $status = 200;
        try {
            contact_us_mail($email, $name, $address, $subject, $content);
        }
	    catch(exception $e) {
            $status = 500;
            $this->loggerclass->log("error sending email");
        }

        return $status;
    }
}