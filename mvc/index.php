<?php
	include('autoload.php');

	// namespaces

	// get URI
	$uri = $_SERVER['REQUEST_URI'];

	// localhost/mvc/index.php?controller=user/dashboard
	// localhost/mvc/?controller=user/dashboard
	
	// /php-oop/mvc/index.php/user/dashboard
	// modrewrite -- .htaccess ?????????
	
	//$m = [];
	//preg_match('/\/php-oop\/mvc\/index.php\/(.*)/', $uri, $m);
	//$controller = $m[1];

	// determine controller name
	$controller = str_replace('/php-oop/mvc/index.php/', '', $uri);
	$controller = str_replace('/', '\\', $controller);
	$controller = "controllers\\$controller";
	//echo $controller;

	// call controller
	new $controller; // new controllers\user\dashboard

	// just testing autoloader
	//$test = new controllers\Test;