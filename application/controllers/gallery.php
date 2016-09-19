<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
        $page = array('current' => 'gallery');
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
        $this->loggerclass->log("gallery index");
        $this->load->view('gallery/index', $this->data);
	}
}