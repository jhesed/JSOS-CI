<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Track extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
		$this->load->model('track_model');
        $page = array('current' => 'track');
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
		$this->loggerclass->log("track index");
		$this->load->view('track/index', $this->data);
	}	

	public function historicalglimpse($id=null)
	{
		$this->loggerclass->log("track historical glimpse");

		$this->data['blogs'] = $this->track_model->get_all_historical_glimpse();
		$this->data['blog_featured'] = $this->track_model->get_historical_glimpse($id);
		$this->data['blog_id'] = $id;
		$this->load->view('track/historicalglimpse', $this->data);
	}
	
}