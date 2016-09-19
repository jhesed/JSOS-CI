<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
		$this->load->library('loggerclass');
        $page = array('current' => 'aboutus');
        
		# login credentials
		$page['sns_id'] = $this->input->cookie('sns_id', true);
        $page['display_name'] = $this->input->cookie('display_name', true);
		$page['sns_username'] = $this->input->cookie('sns_username', true);
        $page['picture'] = $this->input->cookie('picture', true);
        $page['fb_sdk'] = $this->load->view('modules/facebook_sdk', '', true);		
		
        $this->data['header'] = $this->load->view('modules/header', $page,  true);
        $this->data['footer'] = $this->load->view('modules/footer', '', true);
        // $this->data['slider'] = $this->load->view('modules/slider_galleria', '', true);
        
	}
    
	public function index()
	{
		$this->loggerclass->log("home index");
		// $this->loggerclass->log("about us index");
        $this->load->view('aboutus/index', $this->data);
	}
	public function location()
	{
		$this->loggerclass->log("about us location");
	    $this->load->view('aboutus/location', $this->data);
	}
	public function history()
	{
		$this->loggerclass->log("about us history");
	    $this->load->view('aboutus/history', $this->data);
	}
	public function truth()
	{
		$this->loggerclass->log("about us truth");
    	$this->load->view('aboutus/truth', $this->data);
	}
	public function mission()
	{
		$this->loggerclass->log("about us mission");
	    $this->load->view('aboutus/mission', $this->data);
	}
	public function mo()
	{
		$this->loggerclass->log("about us mo");
	    $this->load->view('aboutus/mo', $this->data);
	}
	public function doctrinal()
	{
		$this->loggerclass->log("about us doctrinal");
	    $this->load->view('aboutus/doctrinal', $this->data);
	}
	public function themesong()
	{
		$this->loggerclass->log("about us theme song");
	    $this->load->view('aboutus/themesong', $this->data);
	}
	public function standards()
	{
		$this->loggerclass->log("about us standards");
	    $this->load->view('aboutus/standards', $this->data);
	}
}