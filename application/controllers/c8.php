<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C8 extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
	    $page = array('current' => 'c8');
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
		$this->loggerclass->log("c8 index");
		$this->load->view('c8/index', $this->data);
	}	
	public function description() 
	{
		$this->loggerclass->log("c8 description");
		$this->load->view('c8/description', $this->data);
	}
	public function cmeaning() 
	{
		$this->loggerclass->log("c8 meaning");
		$this->load->view('c8/c_meaning', $this->data);
	}	
	public function goals() 
	{
		$this->loggerclass->log("c8 goals");

		// $this->data['goals_general'] = $this->load->view('c8/goals_general');
		// $this->data['goals_worship'] = $this->load->view('c8/goals_worship');
		// $this->data['goals_evangelism'] = $this->load->view('c8/goals_evangelism');
		// $this->data['goals_discipleship'] = $this->load->view('c8/goals_discipleship');
		// $this->data['goals_fellowship'] = $this->load->view('c8/goals_fellowship');
		// $this->data['goals_intercession'] = $this->load->view('c8/goals_intercession');
		// $this->data['goals_healing'] = $this->load->view('c8/goals_healing');
		// $this->data['goals_temporal'] = $this->load->view('c8/goals_temporal');
		// $this->data['goals_outreach'] = $this->load->view('c8/goals_outreach');
		$this->load->view('c8/goals', $this->data);
	}	
}