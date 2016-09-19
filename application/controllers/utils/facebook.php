<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	class Facebook extends CI_Controller {
 
		public $appid;
		public $apisecret;
	 
		public function __construct()
		{
			parent::__construct();		
            $this->load->helper('cookie');
			$this->load->model('facebook_model');
			$this->appid = '532451446826037';
			$this->apisecret = '909b86981ffabf78e0b6e37ce5dd3345';
            $this->load->library('loggerclass');
		}
	 
		/**
		 * if you have a Facebook login button on your site, link it here
		 */
		public function login($from)
		{
            $this->loggerclass->log("logging user via facebook...");
			$callback = $this->config->item('base_url')."utils/facebook/confirm/$from";
			$url = "https://graph.facebook.com/oauth/authorize?client_id={$this->appid}&redirect_uri={$callback}&scope=email,publish_stream,publish_actions,status_update";
			redirect($url);
		}
	 
		/**
		 * Get tokens from FB then exchanges them for the User login tokens
		 */
		public function confirm($from)
		{
			// get the code from the querystring
			$redirect = $this->config->item('base_url')."utils/facebook/confirm/$from";
			$code = $this->input->get('code');
			$expiration = $this->input->get('expires');
			if ($code) {
				// now to get the auth token. '__getpage' is just a CURL method
				$gettoken = "https://graph.facebook.com/oauth/access_token?client_id={$this->appid}&redirect_uri={$redirect}&client_secret={$this->apisecret}&code={$code}";
				$return = $this->__getpage($gettoken);
				// if CURL didn't return a valid 200 http code, die
				if (!$return)
					die('Error getting token');
				// put the token into the $access_token variable
				parse_str($return);
				// now you can save the token to a database, and use it to access the user's graph
				// for example, this will return all their basic info.  check the FB Dev docs for more.
				$infourl = "https://graph.facebook.com/me?access_token=$access_token";
				$return = $this->__getpage($infourl);
				if (!$return)
					die('Error getting info');
				$info = json_decode($return);
                
                if ($info) {
                
                    /* save user to DB */
                    $this->facebook_model->save($info, $access_token, $expiration);
                
                    /* saves user to cookie */
                    $this->__save_to_cookie($info, $access_token, $expiration);
              
                }
			}
			redirect($this->config->item('base_url')."home/$from");
		}
	 
        public function post_fb($message, $feed)
        {
            /**
                @param $feed (array):
                    - message (required)
                    - picture
                    - link
                    - caption
                    - description
            */
            if ($this->input->cookie('fb_access_token', TRUE)) {
                $feed['access_token'] = $this->input->cookie('fb_access_token', TRUE);
                $post_url = 'https://graph.facebook.com/'.$this->input->cookie('sns_id').'/feed';
                $return = $this->__postpage($post_url, $feed);       
            }
        }
        
		/**
		 * CURL method to interface with FB API
		 * @param string $url
		 * @return json
		 */
		private function __getpage($url)
		{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
			$return = curl_exec($ch);
			$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            
            $this->loggerclass->log("facebook response: ".$return);
			if ($http_code === 200) {
				curl_close($ch);
				return $return;
			}
			else {
				// store the error. I may want to return this instead of FALSE later
				$error = curl_error($ch);
				curl_close($ch);
				return FALSE;
			}
		}
                
        private function __save_to_cookie($info, $access_token, $expiration) 
        {
			$EXPIRE = 86400;  // 1 day 
            $this->input->set_cookie('fb_access_token', $access_token, $EXPIRE);
            $this->input->set_cookie('fb_token_expiration', $expiration, $EXPIRE);
            $this->input->set_cookie('sns_id', $info->id, $EXPIRE);
            $this->input->set_cookie('display_name', $info->name, $EXPIRE);
            $this->input->set_cookie('sns_username', $info->username, $EXPIRE);
            $this->input->set_cookie('picture', $this->generate_image_url($info->username), $EXPIRE);
			
        }
		
		public function generate_image_url($username)
		{
			return "http://graph.facebook.com/$username/picture";
		}
        
        public function logout()
        {
            delete_cookie('fb_access_token');
            delete_cookie('fb_token_expiration');
            delete_cookie('sns_id');
            delete_cookie('display_name');
            delete_cookie('sns_username');
            delete_cookie('picture');
            
            redirect($this->config->item('base_url'));
        }
}