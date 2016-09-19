<?php
require 'facebook.php';  // Include facebook SDK file
//require 'functions.php';  // Include functions
$FB_CONFIG = new Facebook(array(
    'appId'  => '532451446826037', 
    'secret' => '909b86981ffabf78e0b6e37ce5dd3345',  
    'cookie' => true,	
));
/*
$user = $facebook->getUser();
if ($user) {
    try {
        $user_profile = $facebook->api('/me');
  	    $fbid = $user_profile['id'];                 // To Get Facebook ID
 	    $fbuname = $user_profile['username'];  // To Get Facebook Username
 	    $fbfullname = $user_profile['name']; // To Get Facebook full name
	    $femail = $user_profile['email'];    // To Get Facebook email ID
    //       checkuser($fbid,$fbuname,$fbfullname,$femail);    // To update local DB
 
        echo $user_profile;
        echo $fbid;
        echo $fbuname;
        
        
    } catch (FacebookApiException $e) {
        error_log($e);
        $user = null;
    }
}

if ($user) {
    $logoutUrl = $facebook->getLogoutUrl(array(
		 'next' => 'http://demos.krizna.com/logout.php',  // Logout URL full path
	));
} else {
 $loginUrl = $facebook->getLoginUrl(array(
		'scope'		=> 'email', // Permissions to request from the user
		));
}
*/
?>