<?php
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	$remember = $_REQUEST['remember'];

	if(!validUser($user, $pass)) {
		echo 'Invlaid user';
		redirect('login-form.php');
		exit;
	}

	session_start();
	if($remember) {
		$COOKIE['remember'] = get_rememberme_cookie($user); // ksjdfhklsdjfoweijoij
	}
	/*
	 there is no session cookie sent from browser
	 there is no session for user
	 >>
	 create a new session for user
	 send session cookie to browser > woeiruo2i4uo8jroweijow389je
	 */
	$_SESSION['user'] = $user;

	redirect('dashboard.php');