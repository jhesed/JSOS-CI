<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
        $this->load->library('loggerclass');
        $page = array('current' => 'home');
        $this->data['headers'] = $this->load->view('web/modules/header', $page,  true);
        $this->data['footer'] = $this->load->view('web/modules/footer', '', true);
        $this->data['slider'] = $this->load->view('web/modules/slider', '', true);
        $this->data['fb_like'] = $this->load->view('web/modules/facebook_like', '', true);
    }
    
	public function index()
	{
        $this->loggerclass->log("home index");
        $this->load->view('web/home', $this->data);
	}
	public function give()
	{
        $this->loggerclass->log("home give");
        $this->load->view('web/home_give', $this->data);
	}
}