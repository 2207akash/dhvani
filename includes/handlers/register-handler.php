<?php

	function filterFormName($inputText) {
		$inputText = strip_tags($inputText);
		$inputText = ucfirst(strtolower($inputText));
		return $inputText;
	}

	function filterFormUsername($inputText) {
		$inputText = strip_tags($inputText);
		return $inputText;
	}

	function filterFormPassword($inputText) {
		$inputText = strip_tags($inputText);
		return $inputText;
	}

	if(isset($_POST['registerButton'])) {
		// Register button pressed

		$username = filterFormUsername($_POST['registerUsername']);
		$firstName = filterFormName($_POST['registerFirstName']);
		$lastName = filterFormName($_POST['registerLastName']);
		$email = $_POST['registerEmail'];
		$password = filterFormPassword($_POST['registerPassword']);
		$confirmPassword = filterFormPassword($_POST['registerConfirmPassword']);
		$dob = $_POST['registerDOB'];
		$gender = $_POST['registerGender'];

		$registrationSuccessful = $account->register($username, $firstName, $lastName, $email, $password, $confirmPassword, $dob, $gender);

		if($registrationSuccessful)
			header("Location: index.php");
	}

?>