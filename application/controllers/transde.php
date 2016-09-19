<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transde extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
		$this->load->model('videos_model');
		$this->load->library('loggerclass');
		
        $page = array('current' => 'transde');
        
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
		$this->loggerclass->log("transde index");
        $this->load->view('transde/index', $this->data);
	}
	 
	public function jaf()
	{		
		$this->loggerclass->log("transde jaf");
        $this->data['videos'] = $this->videos_model->get_by_category('JAF');
        $this->load->view('transde/jaf', $this->data);
	}
    
	public function ribaf()
	{
		$this->loggerclass->log("transde ribaf");
        $this->data['videos'] = $this->videos_model->get_by_category('RiBAF');
        $this->load->view('transde/ribaf', $this->data);
	}
}