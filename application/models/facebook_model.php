<?php class Facebook_model extends CI_Model{	public function __construct()	{		$this->load->database();        $this->load->library('loggerclass');	}	public function save($user, $access_token, $expiration) 	{		if($user) {			// $access_token = $user->access_token;			// $expiration = $user['expiration'];						$sns_id = $user->id;			$email = $user->email;			$first_name = $user->first_name;			$last_name = $user->last_name;			$profile_url = $user->link;			$displayname = $user->name;			$username = $user->username;						$sex = $user->gender;			// $hometown = (array_key_exists('hometown', $user) ? $user['hometown']['name'] : '');			$hometown = (property_exists($user, 'hometown') ? $user->hometown->name : '');						$query = "INSERT INTO sns_facebook (access_token,				expiration, sns_id, email, first_name, 				last_name, profile_url, displayname, username, sex,				hometown) VALUES('$access_token',				'$expiration', '$sns_id', '$email', '$first_name', 				'$last_name', '$profile_url', '$displayname', '$username', '$sex',				'$hometown') ON DUPLICATE KEY UPDATE				access_token=VALUES(access_token),				expiration=VALUES(expiration),				first_name=VALUES(first_name),				last_name=VALUES(last_name),				profile_url=VALUES(profile_url),				displayname=VALUES(displayname),				username=VALUES(username),				hometown=VALUES(hometown)";						return $this->db->query($query);		}	}            public function post_page($type, $data)    {        $URL = 'https://graph.facebook.com/';        if($type == 'post_feed') {            $URL = $URL . $data['sns_id'] . '/feed';        }             $ch = curl_init();        curl_setopt($ch, CURLOPT_URL, $URL);        curl_setopt($ch, CURLOPT_POST, 1);        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);                $return = curl_exec($ch);        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);        $this->loggerclass->log("facebook post: ".$return. "code: ". $http_code);        if ($http_code === 200) {            curl_close($ch);            return $return;        }        else {            // store the error. I may want to return this instead of FALSE later            $error = curl_error($ch);            curl_close($ch);            return FALSE;        }    }}