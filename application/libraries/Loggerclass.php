<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Loggerclass {

	protected $CI;

	public function __construct()
	{
	    // Assign the CodeIgniter super-object
	    $this->CI =& get_instance();
	    $this->CI->load->helper('utils_helper');
	}

	public function log($message, $data='') {

	    /* 
	    logs it as an error even though its not
	    to avoid codeigniter access logs 
	    */

	    $sns_id = $this->CI->input->cookie('sns_id', true);
        $display_name = $this->CI->input->cookie('display_name', true);
		$sns_username = $this->CI->input->cookie('sns_username', true);

	    $message = 'IP: '.get_client_ip().' --- '.$sns_id.' --- '.$display_name.' --- '.$sns_username.' --- '.$message.' --- '.$data;
	    log_message('error', $message);        
	}

}

/* End of file Someclass.php */