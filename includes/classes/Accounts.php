<?php
	class Account {

		private $errorArray;

		public function __construct() {
			$this->errorArray = Array();
		}

		public function register($username, $firstName, $lastName, $email, $password1, $password2, $dob, $gender) {
			$this->validateUsername($username);
			$this->validateFirstName($firstName);
			$this->validateLastName($lastName);
			$this->validateEmail($email);
			$this->validatePassword($password1, $password2);

			if(empty($this->errorArray)) {
				//TODO: Insert into DB
				return true;
			}
			else
				return false;
		}

		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}

		private function validateUsername($username) {
			$len = strlen($username);
			if($len < 6 || $len > 25) {
				array_push($this->errorArray, Constants::$usernameLengthError);
				return;
			}

			// TODO: Check if username exists
		}

		private function validateFirstName($firstName) {
			$len = strlen($firstName);
			if($len < 1 || $len > 20) {
				array_push($this->errorArray, Constants::$firstNameLengthError);
				return;
			}
		}

		private function validateLastName($lastName) {
			$len = strlen($lastName);
			if($len < 1 || $len > 20) {
				array_push($this->errorArray, Constants::$lastNameLengthError);
				return;
			}
		}

		private function validateEmail($email) {
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalidError);
				return;
			}

			// TODO: Check if username already exists
		}

		private function validatePassword($password1, $password2) {
			if($password1 != $password2) {
				array_push($this->errorArray, Constants::$passwordsMismatch);
				return;
			}
			if(preg_match('/[A-Za-z0-9?@.]/', $password1)) {
				array_push($this->errorArray, Constants::$passwordInvalidError);
				return;
			}
			$len = strlen($password1);
			if($len < 8 || $len > 25) {
				array_push($this->errorArray, Constants::$passwordLengthError);
				return;
			}
		}

	}
?>