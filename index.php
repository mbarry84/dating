<?php
	/**
	 * @author Matthew Barry
	 * @version 1.0
	 *
	 * This file displays the home page via a view default route
	 */
	//turn on error reporting
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('vendor/autoload.php');

	//fat free framework
	$f3=Base::instance();

	// turn on fet-free error reporting
	$f3->set('DEBUG',3);

	//define a default route
	$f3->route('GET /',
		function()
		{
			$view=new View;
			echo $view->render('views/home.html');
		});

	//run fat free
	$f3->run();

