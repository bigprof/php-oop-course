<?php
	
	/*
	function __autoload($className) {
		if(is_file('lib/' . $className . '.php'))
			require 'lib/' . $className . '.php';
	}
	*/

	spl_autoload_register(function ($className) { // 'peter\validation\Validation'
		// replace \ with /
		$className = str_replace('\\', '/', $className);
		if(is_file('lib/' . $className . '.php')) // lib/peter/validation/Validation.php
			require 'lib/' . $className . '.php';
		// echo '<br>I am first autoloader';
	});

	spl_autoload_register(function ($className) { // peter\validation\Validation
		$className = str_replace('\\', '/', $className);
		if(is_file('vendor/' . $className . '.php')) // 'vendor/peter/validation/Validation.php'
			require 'vendor/' . $className . '.php';
		// echo '<br>I am second autoloader';
	});