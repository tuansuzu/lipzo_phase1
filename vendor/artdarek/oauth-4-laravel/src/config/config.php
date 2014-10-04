<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(
 		 /**
         * Facebook
         */
 		'Facebook' => array(
		    'client_id'     => 'Your Facebook client ID',
		    'client_secret' => 'Your Facebook Client Secret',
		    'scope'         => array('email','read_friendlists','user_online_presence'),
		), 
        /**
         * Google
         */
        'Google' => array(
            'client_id'     => '983951722204-hn8m680k0bl9pi3lpu38jk3ofbeke51v.apps.googleusercontent.com',
            'client_secret' => 'XsZ6wcJolVXYo4YYnR9h_zEA',
            'scope'         => array('userinfo_email', 'userinfo_profile'),
        ),
 
        /**
         * Github
         */
        'GitHub' => array(
            'client_id'     => 'd5864d1c**********',
            'client_secret' => '630485d3741bd8************'
        ),
 
        /**
         * Linkedin
         */
        'Linkedin' => array(
            'client_id'     => '77cd********',
            'client_secret' => 'IDnlp************',
            'scope'         => array('r_emailaddress', 'r_basicprofile'),
        ),
 
    )

);