<?php
	include('autoload.php');

	use peter\queries as Q;
	use peter\validation\Validation;  // C:\xampp\htdocs


	$auth = new abbas\Authentication; // vendor\abbas\Authentication.php

	// autoloader will search for lib/Authentication.php then vendor/Authentication.php
	$myAuth = new Authentication; // global namespace 

	// lib/peter\validation\Validation.php then vendor/peter/validation\Validation.php
	$v = new peter\validation\Validation;
	$i = new Q\Index; // peter\queries\Index


	$g = new Q\Group;

	$v2 = new Validation; // peter\validation\Validation

	// qualified class name: 
	// fully qualified class name: 
	// unqualified class name
	// 
	


