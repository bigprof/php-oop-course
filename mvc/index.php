<?php
	include('autoload.php');

	// namespaces

	// get URI
	$uri = $_SERVER['REQUEST_URI'];

	// localhost/mvc/index.php?controller=user/dashboard
	// localhost/mvc/?controller=user/dashboard >> user\Dashboard
	
	// /php-oop/mvc/index.php/user/dashboard
	// modrewrite -- .htaccess ?????????
	
	//$m = [];
	//preg_match('/\/php-oop\/mvc\/index.php\/(.*)/', $uri, $m);
	//$controller = $m[1];
	//



	// determine controller name
	$controller = str_replace('/php-oop/mvc/index.php/', '', $uri); // user/dashboard, home

	$components = explode('/', $controller); // ['user', 'dashbaord'], ['home']
	array_unshift($components, 'controllers'); // ['controllers', user', 'dashbaord']
	$components[count($components) - 1] = ucfirst($components[count($components) - 1]);
	// ucfirst('abc') => 'Abc'
	// ['controllers', user', 'Dashbaord']
	$path = implode('/', $components) . '.php'; // controllers/user/Dashbaord.php

	$controller = implode('\\', $components); // controllers\user\Dashbaord

	// check if controller exists
	if(!is_file($path)) {
		$controller = 'controllers\\PageNotFound';
	}

	// call controller
	new $controller; // new controllers\user\dashboard

	// just testing autoloader
	//$test = new controllers\Test;