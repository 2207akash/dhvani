<?php
	class Account {

		public function __construct() {

		}

		public function register() {
			$this->validateUsername($username);
			$this->validateName($firstName, $lastName);
			$this->validateEmail($email);
			$this->validatePassword($password1, $password2);
		}

		private function validateUsername($username) {

		}

		private function validateName($firstName, $lastName) {

		}

		private function validateEmail($email) {

		}

		private function validatePassword($password1, $password2) {
			
		}

	}
?>