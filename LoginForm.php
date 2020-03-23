<?php
	include('Form.php');

	class LoginForm extends Form {
		public function __construct() {
			echo '<br>Hello .. I\'m LoginForm constructor!';
			parent::__construct();
			echo $this->validate();
		}
	}

	$myform = new LoginForm;
	$this->validate();
