<?php
	namespace controllers\user;

	class Dashboard {
		function __construct() {
			$model = new \models\Data;
			$data = $model->getData();

			// print_r($data);
			$table = new \lib\View('orders-table', $data['orderDetails']);
			$data['table'] = $table->html();
			
			$view = new \lib\View('dashboard', $data);
			echo $view->html();
		}
	}