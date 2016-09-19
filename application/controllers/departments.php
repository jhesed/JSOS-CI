<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departments extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
        $page = array('current' => 'departments');
		$this->load->library('loggerclass');
        
		# login credentials
		$page['sns_id'] = $this->input->cookie('sns_id', true);
        $page['display_name'] = $this->input->cookie('display_name', true);
		$page['sns_username'] = $this->input->cookie('sns_username', true);
        $page['picture'] = $this->input->cookie('picture', true);
       	$page['fb_sdk'] = $this->load->view('modules/facebook_sdk', '', true);		
			
        $this->data['header'] = $this->load->view('modules/header', $page,  true);
        $this->data['footer'] = $this->load->view('modules/footer', '', true);
        $this->data['slider'] = $this->load->view('modules/slider_galleria', '', true);
        
    }
    
	public function index()
	{
		$this->loggerclass->log("departments index");
        $this->load->view('departments/index', $this->data);
	}
	
	public function children()
	{
		$this->loggerclass->log("departments children");
        $this->load->view('departments/children', $this->data);
	}
	
	public function youngpeople()
	{
		$this->loggerclass->log("departments young people");
        $this->load->view('departments/youngpeople', $this->data);
	}
	
	public function youngadult()
	{
		$this->loggerclass->log("departments young adult");
        $this->load->view('departments/youngadult', $this->data);
	}
	
	public function wam()
	{
		$this->loggerclass->log("departments wam");
        $this->load->view('departments/wam', $this->data);
	}
	
	public function dad()
	{
		$this->loggerclass->log("departments dad");
        $this->load->view('departments/dad', $this->data);
	}
	
	public function prayer()
	{
		$this->loggerclass->log("departments prayer");
        $this->load->view('departments/prayer', $this->data);
	}
	
	public function ushering()
	{
		$this->loggerclass->log("departments ushering");
        $this->load->view('departments/ushering', $this->data);
	}
	
	public function bod()
	{
		$this->loggerclass->log("departments bod");
        $this->load->view('departments/bod', $this->data);
	}
    
	public function media()
	{
		$this->loggerclass->log("departments media");
        $this->load->view('departments/media', $this->data);
	}
    
	public function office()
	{
		$this->loggerclass->log("departments office");
        $this->load->view('departments/office', $this->data);
	}
}