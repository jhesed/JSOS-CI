<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Songs extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
        $this->load->library('loggerclass');
		$this->load->model('songs_model'); 
        $page = array('current' => 'songs');
        $this->data['headers'] = $this->load->view('web/modules/header', $page, true);
        $this->data['footer'] = $this->load->view('web/modules/footer', '', true);      
        $this->data['fb_like'] = $this->load->view('web/modules/facebook_like', '', true);
    }
    public function index() 
    {
        $this->loggerclass->log("songs index");
        $this->load->view('web/songs_original', $this->data);
    }
	public function original($id=null)
	{
        $this->loggerclass->log("songs original", $id);
        if(!$id) {
            $this->data['featured'] = $this->songs_model->get_featured();
            $this->data['songs'] = $this->songs_model->get_all();
			
            $this->load->view('web/songs_original', $this->data);
        }
        else {
            $this->data['song'] = $this->songs_model->get($id);
            $this->load->view('web/songs_original_individual', $this->data);   
        }
	}
    public function cover()
	{
        $this->loggerclass->log("songs cover");
        $this->load->view('web/songs_cover', $this->data);
	}
}
