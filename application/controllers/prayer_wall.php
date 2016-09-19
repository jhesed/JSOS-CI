<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Praise_wall extends CI_Controller {
    private $data = array();
    
    public function __construct(){
		parent::__construct();		
		$this->load->model('praisewall_model');	
		$this->load->model('facebook_model');	
		$this->load->helper('utils_helper');
		$this->load->library('loggerclass');
	}
	
	public function post() 
	{
		// $user_info = array();
		// $user_info['id'] = $author_sns_id;
		// $user_info['username'] = $author
		$this->loggerclass->log("prayer wall posting");

		$sns_type = ($this->input->cookie('fb_access_token', TRUE)? 'FB' : '');  
		
		if ($sns_type) {
			$author_sns_id = $this->input->post('author_id');
			$author = $this->input->post('author', TRUE); 
			$title = $this->input->post('wall_title');
			$message = $this->input->post('message');
			$picture = $this->input->post('profile_pic');
			
			$link = $this->input->post('link');
			$caption = $this->input->post('caption');
			$description = $this->input->post('description');
		
            $response = array();
			$feed_id = $this->praisewall_model->save($sns_type, $author_sns_id, $author, $title,
				$message, $picture, $link, $caption, $description);
            
            // $response['feedId'] = $feed_id;
            // $response['baseUrl'] = $this->config->item('base_url');
           
     
            /* Post with Facebook */
            if ($this->input->post('post_with_fb') == 'yes') {
		
				$this->loggerclass->log("prayer wall posting with facebook");

				$message .= "\n#www.jsoscc.com";
                $this->post_with_fb($author_sns_id, $message);
            }
        
			return $this->generate_content_single(date("Y-m-d H:i:s"), $picture, $title, $author, $message, $feed_id);
		}
	}

	private function generate_content_single($date_created, $picture, $wall_title, $author, $message, $id) {
		
		$praisewall_data = array();
		$praisewall_data['date_created'] = $date_created;
		$praisewall_data['picture'] = $picture;
		$praisewall_data['wall_title'] = $wall_title;
		$praisewall_data['author'] = $author;
		$praisewall_data['message'] = $message;
		$praisewall_data['id'] = $id;
		$praisewall_data['is_amened'] = false;
		$praisewall_data['amen_count'] = 0;
		
		$this->load->view('walls/praisewall_content_single', $praisewall_data);
		
	}

	public function amen() 
	{
		// $user_info = array();
		// $user_info['id'] = $author_sns_id;
		// $user_info['username'] = $author
		$this->loggerclass->log("prayer wall amen");

		$feed_id = $this->input->post('post_id');
		$current_user_id = $this->input->post('author_id');
		$author = $this->input->post('author');
		$picture = $this->input->post('picture');
		
		// $current_user_id = $this->input->post('current_user_id');
		// $current_user_id = 5; // ! TEST !
		
		$this->praisewall_model->amen($feed_id, $current_user_id, $picture, $author);
	}
    
	public function get_ameners()
	{
		$data = $this->praisewall_model->get_ameners($this->input->get('pw_id'));
		print_r($data);
		$response = '';
		for ($i=0; $i<count($data); $i++) {
			$response .= "<img src='{$data[$i]['picture']}' title='{$data[$i]['name']}'></img>";
		}
		echo $response;
	}
	
	private function __process_you_amen_like($praise_wall, $sns_id, $sns_type='FB')
	{
		for ($i=0; $i<count($praise_wall); $i++) {
			$praise_wall[$i]['is_amened'] = ($this->praisewall_model->is_amened($praise_wall[$i]['user_amen_ids'], $sns_id) == 1 ? true: false);			
		}
		return $praise_wall;
	}
	
    public function get_praise_wall_ajax() 
    {
        $feeds = $this->praisewall_model->get_by_date($this->input->get('praisewall_last_updated'));
        echo json_encode($this->__feeds_to_string($feeds));    
	}
    
    public function get_prayer_wall_ajax() 
    {
        $feeds = $this->prayerwall_model->get_by_date($this->input->get('prayerwall_last_updated'));
        echo json_encode($this->__feeds_to_string($feeds));    
	}
    
    private function __feeds_to_string($feeds) {
       
        $response = array();
        $response['content'] = '';
		if ($feeds) {
            $response['praisewall_last_updated'] = $feeds[(count($feeds)-1)]['last_updated'];
			for ($i=0; $i<count($feeds); $i++) {
				$praisewall_data = array();
				$praisewall_data['date_created'] = $feeds[$i]['date_created'];
				$praisewall_data['picture'] = $feeds[$i]['picture'];
				$praisewall_data['wall_title'] = $feeds[$i]['wall_title'];
				$praisewall_data['author'] = $feeds[$i]['author'];
				$praisewall_data['message'] = $feeds[$i]['message'];
				$praisewall_data['id'] = $feeds[$i]['id'];
				$praisewall_data['amen_count'] = $feeds[$i]['amen_count'];
				$praisewall_data['is_amened'] = ($this->praisewall_model->is_amened($feeds[$i]['user_amen_ids'], $this->input->cookie('sns_id', TRUE)) == 1 ? true: false);
               
				$response['content'] .= $this->load->view('walls/praisewall_content_single', $praisewall_data, TRUE);	
			}
		}
        else {
            $response['praisewall_last_updated'] = "REAPED_LAST";
        }
        return $response;
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