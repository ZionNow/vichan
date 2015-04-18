<?php

/*
 *  Instance Configuration
 *  ----------------------
 *  Edit this file and not config.php for imageboard configuration.
 *
 *  You can copy values from config.php (defaults) and paste them here.
 */



	// Database stuff
	$config['db']['type']		= 'mysql';
	$config['db']['server']		= 'localhost';
	$config['db']['user']		= '';
	$config['db']['password']	= '';
	$config['db']['database']	= '';
	
	//$config['root']				= '/';
	
	
	//.webm settings
	//Might need additions for FFmpeg
	$config['allowed_ext_files'][] = 'webm';
	$config['additional_javascript'][] = 'js/webm-settings.js';
	$config['additional_javascript'][] = 'js/expand-video.js';
	
	
?>
