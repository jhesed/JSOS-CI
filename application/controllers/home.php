<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    private $data = array();

    public function __construct(){
        parent::__construct();
		$this->load->model('praisewall_model');
		$this->load->model('prayerwall_model');
		$this->load->model('weeklybulletin_model');
		$this->load->helper('utils_helper');
		$this->load->library('loggerclass');

        $page = array('current' => 'home');

		# login credentials
		$page['sns_id'] = $this->input->cookie('sns_id', true);
        $page['display_name'] = $this->input->cookie('display_name', true);
		$page['sns_username'] = $this->input->cookie('sns_username', true);
		$page['picture'] = $this->input->cookie('picture', true);
        $page['fb_sdk'] = $this->load->view('modules/facebook_sdk', '', true);

		$this->data['header'] = $this->load->view('modules/header', $page,  true);
        $this->data['footer'] = $this->load->view('modules/footer', '', true);
        $this->data['slider'] = $this->load->view('modules/slider_galleria', '', true);

        /* smileys */
        $this->load->helper('smiley');
		$this->load->library('table');
		$image_array = get_clickable_smileys($this->config->item('static_url').'img/smileys/', 'message');
		$col_array = $this->table->make_columns($image_array, 8);
		$this->data['smiley_table'] = $this->table->generate($col_array);
     }

	public function index()
	{
		$this->loggerclass->log("home index");
        $this->load->view('home', $this->data);
	}
	public function praisewall()
	{

		$this->loggerclass->log("praise wall index");

		// $this->data['is_logged_in'] = true;  // ! TEST !
		$sns_id = $this->input->cookie('sns_id', TRUE);
		// $sns_id = 5;

		$this->data['praise_wall'] = $this->praisewall_model->get($limit=$this->config->item('wall_limit'));

		if ($this->data['praise_wall']  and count($this->data['praise_wall']) > $this->config->item('wall_limit')) {

			$this->data['praisewall_last_updated'] = $this->data['praise_wall'][$this->config->item('wall_limit')-1]['last_updated'];
        }
		else {
			$this->data['praisewall_last_updated'] = '';
		}

		$this->input->set_cookie('praisewall_last_updated',
			$this->data['praisewall_last_updated'],
			$this->config->item('cookie_expiration'));

        $this->data['praise_wall'] = $this->__process_you_amen_like($this->data['praise_wall'], $sns_id, 'PRAISEWALL');

		# loads external file for praisewall content
		$this->data['praisewall_content'] = $this->load->view('walls/praisewall_content', $this->data, true);

		$this->load->view('walls/praisewall', $this->data);
	}
	public function prayerwall()
	{

		$this->loggerclass->log("prayer wall index");

		// $this->data['is_logged_in'] = true;  // ! TEST !
		$sns_id = $this->input->cookie('sns_id', TRUE);
		// $sns_id = 5;

		$this->data['prayer_wall'] = $this->prayerwall_model->get($limit=$this->config->item('wall_limit'));

		if ($this->data['prayer_wall'] and count($this->data['prayer_wall']) > $this->config->item('wall_limit')) {

			$this->data['prayerwall_last_updated'] = $this->data['prayer_wall'][$this->config->item('wall_limit')-1]['last_updated'];
        }
		else {
			$this->data['prayerwall_last_updated'] = '';
		}

		$this->input->set_cookie('prayerwall_last_updated',
			$this->data['prayerwall_last_updated'],
			$this->config->item('cookie_expiration'));

        $this->data['prayer_wall'] = $this->__process_you_amen_like($this->data['prayer_wall'], $sns_id, 'PRAYERWALL');

		# loads external file for prayerwall content
		$this->data['prayerwall_content'] = $this->load->view('walls/prayerwall_content', $this->data, true);

		$this->load->view('walls/prayerwall', $this->data);
	}

	public function weeklybulletin($id=null)
	{
		$this->loggerclass->log("weekly bulletin index");

		$this->data['blogs'] = $this->weeklybulletin_model->get_all();
		$this->data['blog_featured'] = $this->weeklybulletin_model->get($id);
		$this->data['blog_id'] = $id;
		$this->load->view('links/weekly_bulletin', $this->data);

	}

	private function __process_you_amen_like($praise_wall, $sns_id, $type, $sns_type='FB')
	{
        if ($type == 'PRAISEWALL') {

            for ($i=0; $i<count($praise_wall); $i++) {
                $praise_wall[$i]['is_amened'] = ($this->praisewall_model->is_amened($praise_wall[$i]['user_amen_ids'], $sns_id) == 1 ? true: false);
            }
        }
        else {
            for ($i=0; $i<count($praise_wall); $i++) {
                $praise_wall[$i]['is_amened'] = ($this->prayerwall_model->is_amened($praise_wall[$i]['user_amen_ids'], $sns_id) == 1 ? true: false);
            }
        }
		return $praise_wall;
	}
}