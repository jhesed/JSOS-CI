<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Links extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
		$this->load->model('pastorsblog_model');
        $page = array('current' => 'home');
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
    
	public function latestnews()
	{
		$this->loggerclass->log("links latest news");
        $this->load->view('links/latestnews', $this->data);
	}
	public function pastorsblog($id=null)
	{
		$this->loggerclass->log("links pastorsblog");
		$this->data['blogs'] = $this->pastorsblog_model->get_all();
		$this->data['blog_featured'] = $this->pastorsblog_model->get($id);
		$this->data['blog_id'] = $id;
		$this->load->view('links/pastorsblog', $this->data);
		
	}
	public function featured()
	{
		$this->loggerclass->log("links featured");
        $this->load->view('links/featured', $this->data);
	}

	public function give()
	{
		$this->loggerclass->log("links give");
        $this->load->view('links/give', $this->data);
	}
}