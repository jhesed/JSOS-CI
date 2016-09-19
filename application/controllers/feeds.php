<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feeds extends CI_Controller {
    private $data = array();

    public function __construct(){
		parent::__construct();		
		$this->load->model('feeds_model');	
		$this->load->model('facebook_model');	
		$this->load->library('loggerclass');
	}
	
	public function post() 
	{
		$author_sns_id = $this->input->post('author_id');
		$author = $this->input->post('author', TRUE); 
		$message = $this->input->post('message');
		$picture = $this->input->post('profile_pic');

		// $user_info = array();
		// $user_info['id'] = $author_sns_id;
		// $user_info['username'] = $author;
		$this->loggerclass->log("feeds posting");
				
		$sns_type = ($this->input->cookie('fb_access_token', TRUE)? 'FB' : '');  
		
		if ($sns_type) {
			
			$link = $this->input->post('link');
			$caption = $this->input->post('caption');
			$description = $this->input->post('description');
		
            $response = array();
			$feed_id = $this->feeds_model->save($sns_type, $author_sns_id, $author,
				$message, $picture, $link, $caption, $description);
            
            $response['feedId'] = $feed_id;
            $response['baseUrl'] = $this->config->item('base_url');
           
     
            /* Post with Facebook */
            if ($this->input->post('post_with_fb') == 'yes') {

				$this->loggerclass->log("feeds posting with facebook");

				$message += "\n#www.jsos.com";
                $this->post_with_fb($author_sns_id, $message);
            }
        
            echo json_encode($response);
		}
	}

	public function amen() 
	{

		$feed_id = $this->input->post('post_id');
		$current_user_id = $this->input->post('author_id');

		// $user_info = array();
		// $user_info['id'] = $current_user_id;
		$this->loggerclass->log("feeds amen");
		
		// $current_user_id = $this->input->post('current_user_id');
		// $current_user_id = 5; // ! TEST !
		
		$this->feeds_model->amen($feed_id, $current_user_id);
	}
    
    public function get_feeds_ajax() 
    {
        // $last_updated = ($this->input->cookie('praisewall_last_updated', TRUE));
        $last_updated = ($this->input->post('praisewall_last_updated', TRUE));
        
        $feeds = $this->feeds_model->get_by_date($last_updated=$last_updated);
        
        $feeds[count($feeds)]['baseUrl'] = $this->config->item('base_url');
        
        echo json_encode($feeds);
        
    }
    
    public function post_with_fb($author_id, $message) {
        
        $data =  array(
            'access_token'  => $this->input->cookie('fb_access_token', TRUE),
            'message'       => $message,
            'sns_id'        => $author_id
        );
        
        $this->facebook_model->post_page('post_feed', $data);
            
    }
}