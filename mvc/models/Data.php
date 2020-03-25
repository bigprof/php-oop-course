<?php
	namespace models;

	class Data {
		public function __construct() {

		}

		public function getData() {
			return [
				'username' => 'Samir',
				'orders' => rand(20, 100),
				'email' => 'abc@gmail.com',
				'orderDetails' => [
					[ 'id' => 20, 'amount' => 50 ],
					[ 'id' => 24, 'amount' => 150 ],
					[ 'id' => 27, 'amount' => 560 ],
					[ 'id' => 80, 'amount' => 540 ]
				]
			];
		}
	}