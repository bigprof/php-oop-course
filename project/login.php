<?php
	include('autoload.php');

	// our own namespace comes first, with an alias (example: me)
	use iti\auth as me;

	use peter\queries as pq;
	use peter\validation as pv;  // as peter\validation\Validation
	use abbas as ab;


	// \abbas\Authentication
	// \peter\validation\Validation\abbas\Authentication
	// \iti\auth\abbas\Authentication
	$auth = new ab\Authentication; // vendor\abbas\Authentication.php

	// autoloader will search for lib/Authentication.php then vendor/Authentication.php
	$myAuth = new me\Authentication; 
	// global namespace, peter\validation\Validation\Authentication, iti\auth\Authentication

	// lib/peter\validation\Validation.php then vendor/peter/validation\Validation.php
	$v = new pv\Validation;
	$i = new pq\Index; // peter\queries\Index


	$g = new pq\Group;

	$v2 = new pv\Validation; // peter\validation\Validation

	// qualified class name: 
	// fully qualified class name: 
	// unqualified class name
	// 
	


