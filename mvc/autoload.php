<?php
	/*
	spl_autoload_register(function($className) {
		// controllers
		generalAutoLoader('controllers', $className);
	});

	spl_autoload_register(function($className) {
		// models
		generalAutoLoader('models', $className);
	});

	spl_autoload_register(function($className) {
		// libs
		generalAutoLoader('lib', $className);
	});
	
	spl_autoload_register(function($className) {
		// vendor
		generalAutoLoader('vendor', $className);
	});

	.
	..

	*/

	spl_autoload_register(function($className) { // = 'models\\Test'
		$className = str_replace('\\', '/', $className); // 'models/Test'

		if(is_file("$className.php")) { // 'models/Test.php'
			include "$className.php";
		}
	});

	/*
	function generalAutoLoader($folder, $className) { // '.',  'models\Test'
		$className = str_replace('\\', '/', $className); // 'models/Test'

		if(is_file("$folder/$className.php")) { // './models/Test.php'
			include "$folder/$className.php";
		}
	}
	*/