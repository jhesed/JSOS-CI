<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactus extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
        $this->load->library('loggerclass');
        $page = array('current' => 'contact us');
        $this->data['headers'] = $this->load->view('web/modules/header', $page, true);
        $this->data['footer'] = $this->load->view('web/modules/footer', '', true);
    }
    public function index() 
    {
        $this->loggerclass->log("contactus index");
        $this->load->view('web/contact_us', $this->data);
    }
}
