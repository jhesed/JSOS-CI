<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Fb extends CI_Controller {
    private $FB;
	
    public function __construct(){
        parent::__construct();
		$this->load->helper('url');
		require './application/controllers/lib/fb/facebook.php';
		
		$fbconfig = array(
			'appId'  => '532451446826037', 
			'secret' => '909b86981ffabf78e0b6e37ce5dd3345',  
			'cookie' => true,	
		);
		
		$this->FB = new Facebook($fbconfig);
    }
    
	public function index()
	{
	}
    
    public function login() 
    {
		
		$user = $this->FB->getUser();
		if ($user) {	
			try {
				$user_profile = $this->FB->api('/me');
				$fbid = $user_profile['id'];               
				$fbuname = $user_profile['username'];  
				$fbfullname = $user_profile['name']; 
				$femail = $user_profile['email'];   
			//       checkuser($fbid,$fbuname,$fbfullname,$femail);    // To update local DB
		 
			} catch (FacebookApiException $e) {
				error_log($e);
				$user = null;
			}
		}	
		else {
			$login_url = $this->FB->getLoginUrl(array(
				'scope'		=> 
					'publish_stream', 'email', 'publish_actions',
				'redirect_uri'  => 'http://localhost/jsos.com',
			));
			redirect($login_url, 'refresh');
		}
	}
	function getAccessTokenDetails($code)
	{
		$token_url = "https://graph.facebook.com/oauth/access_token?"
		  . "client_id=" . $this->fbconfig['appId'] . "&redirect_uri=" . $this->config->item('base_url').'home/praisewall'
		  . "&client_secret=" . $this->fbconfig['secret'] . "&code=" . $code;
	 
		$response = file_get_contents($token_url);
		$params = null;
		parse_str($response, $params); //parse name value pair
	 
		return $params;
	}
}