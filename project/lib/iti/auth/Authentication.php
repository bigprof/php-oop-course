<?php
	// no namespace = global namespace
	
	// use our own namespace to make it easier to share our components
	// or reuse them in other projects
	
	namespace iti\auth;

	class Authentication {
		public function __construct() {
			echo 'This is our Authentication class<br>';
		}
	}