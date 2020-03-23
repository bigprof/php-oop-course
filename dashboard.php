<?php
	session_start();
	/*
	 	there is session cookie sent from browser
	 	there is a session for user?
	 		yes:
				open existing session for user

	 		no:
	 			open new session for user
	 			send new session cookie
	 */


	if(!isset($_SESSION['user'])) {
		redirect('login-form.php');
		exit;
	}


	$user = $_SESSION['user'];

	displayDashboard($user);

