<?php
	namespace lib;

	class View {
		public function __construct($viewName, $data) {
			$this->data = $data;
			$this->viewName = $viewName;

			$this->loadView();
		}

		protected function loadView() {
			$viewPath = 'views/' . $this->viewName . '.html';
			$view = file_get_contents($viewPath);

			// trick: how to handle orders-table?
			foreach ($this->data as $key => $value) {
				$view = str_replace("%$key%", $value, $view);
			}

			$this->finalView = $view;
		}

		public function html() {
			/*
			ob_start(); // output buffering start

			echo "<h3>Your data</h3><pre>";
			print_r($this->data);
			echo '</pre>';

			return ob_get_clean(); // return string containing buffer and clean buffer
			*/

			return $this->finalView;
		}
	}