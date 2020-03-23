<?php
	class Form {
		public function __construct($option = []) {
			echo '<br>Hello .. I\'m Form constructor!';
		}

		private function validate() {
			echo '<br>Form::validate';
		}

		public function textbox($options = []) {

		}

		public function select($options = []) {

		}

		public function email($options = []) {

		}

		public function html() {
			return '';
		}
	}