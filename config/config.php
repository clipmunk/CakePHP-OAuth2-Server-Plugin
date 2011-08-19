<?php

$config['OAuth2Server'] = array(
	'access_token_lifetime'		=> 60*2, // minutes
	'auth_code_lifetime' 		=> 60*2, // minutes
	'refresh_token_lifetime'	=> 60*4, // minutes

// 	'access_token_lifetime'		=> 60*60*12, // 12 hours
// 	'auth_code_lifetime' 		=> 60*60*12, // 12 hours
// 	'refresh_token_lifetime'	=> 60*60*24*7*2, // 2 weeks

	'Auth' => array(
		'className' => 'ClipmunkAuth',
		'fields' => array(
			'username' => 'username',
			'password' => 'password'
		)
	)
);