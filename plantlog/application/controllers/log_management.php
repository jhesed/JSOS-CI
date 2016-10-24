
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log_management extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();

        $page = array('current' => 'log_management');

        /* Load View Modules */
		$this->data['header'] = $this->load->view('modules/header', $page,  true);
        $this->data['footer'] = $this->load->view('modules/footer', '', true);
      
    }

    public function index()
    {
        /* same with all */
        $this->load->view('log_management/all', $this->data);
    }
    public function all()
	{
        $this->load->view('log_management/all', $this->data);
	}
    public function chiller()
    {
        $this->load->view('log_management/chiller', $this->data);
    }
}