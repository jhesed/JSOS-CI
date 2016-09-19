<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
		$this->load->model('news_model'); 
        $page = array('current' => 'news');
        $this->data['headers'] = $this->load->view('web/modules/header', $page, true);
        $this->data['footer'] = $this->load->view('web/modules/footer', '', true);
        $this->data['slider'] = $this->load->view('web/modules/slider', '', true);        
        $this->data['fb_like'] = $this->load->view('web/modules/facebook_like', '', true);
    }
    public function index() 
    {
        /* $this->load->view('web/news', $this->data); */
    }
	
	public function praisefest($id=null)
	{
        $this->loggerclass->log("news praisefest", $id);
        if(!$id) {
            $this->data['news'] = $this->news_model->get_all();
            $this->load->view('web/news_praisefest', $this->data);
        }
        else {
            $this->data['news'] = $this->news_model->get($id);
            $this->load->view('web/news_praisefest_individual', $this->data);   
        }
	}
	
	public function biblejam($id=null)
	{
        $this->loggerclass->log("news biblejam", $id);
        if(!$id) {
            $this->data['news'] = $this->news_model->get_all();
            $this->load->view('web/news_biblejam', $this->data);
        }
        else {
            $this->data['news'] = $this->news_model->get($id);
            $this->load->view('web/news_biblejam_individual', $this->data);   
        }
	}
}
