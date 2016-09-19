<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();

        $this->load->library('loggerclass');
        $page = array('current' => 'aboutus');
        $this->data['headers'] = $this->load->view('web/modules/header', $page, true);
        $this->data['footer'] = $this->load->view('web/modules/footer', '', true);
		$this->data['slider'] = $this->load->view('web/modules/slider_galleria', '', true);
    
    }
    public function index() 
    {
        $this->loggerclass->log("aboutus index");
        $this->load->view('web/about_us', $this->data);
    }
}
