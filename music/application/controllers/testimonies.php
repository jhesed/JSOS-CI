<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonies extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
		$this->load->model('testimonies_model'); 
        $this->load->library('loggerclass');
        $page = array('current' => 'testimonies');
        $this->data['headers'] = $this->load->view('web/modules/header', $page, true);
        $this->data['footer'] = $this->load->view('web/modules/footer', '', true);
        $this->data['slider'] = $this->load->view('web/modules/slider_galleria', '', true);
        $this->data['fb_like'] = $this->load->view('web/modules/facebook_like', '', true);
    }
    public function index() 
    {
        $this->loggerclass->log("testimonies index");
        $this->load->view('web/testimonies_home', $this->data);
    }
	public function salvation($id=null)
	{
        $this->loggerclass->log("testimonies salvation", $id);
        if(!$id) {
            $this->data['testimonies'] = $this->testimonies_model->get_all_salvation();
            $this->load->view('web/testimonies_salvation', $this->data);
        }
        else {
            $this->data['testimonies'] = $this->testimonies_model->get_salvation($id);
            $this->load->view('web/testimonies_salvation_individual', $this->data);   
        }
	}
    public function bursts() 
    {
        $this->loggerclass->log("testimonies bursts");
        $this->load->view('web/testimonies_praise_burst', $this->data);
    }
    public function chest() 
    {
        $this->loggerclass->log("testimonies chest");
        $this->load->view('web/testimonies_praise_chest', $this->data);
    }
    public function graffiti() 
    { 
        $this->loggerclass->log("testimonies graffiti");
        $this->load->view('web/testimonies_praise_graffiti', $this->data);
    }
}