<?php
	
	/*
	function __autoload($className) {
		if(is_file('lib/' . $className . '.php'))
			require 'lib/' . $className . '.php';
	}
	*/

	spl_autoload_register(function ($className) {
		// replace \ with /
		// echo "autoload1: $className<br>";
		$className = str_replace('\\', '/', $className);
		if(is_file('lib/' . $className . '.php')) 
			require 'lib/' . $className . '.php';
		// echo '<br>I am first autoloader';
	});

	spl_autoload_register(function ($className) { 
		// echo "autoload2: $className<br>";
		$className = str_replace('\\', '/', $className);
		if(is_file('vendor/' . $className . '.php')) 
			require 'vendor/' . $className . '.php';
		// echo '<br>I am second autoloader';
	});