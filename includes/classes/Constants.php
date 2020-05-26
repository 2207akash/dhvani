<?php
	class Constants {
		// REGISTRATION ERRORS
		public static $usernameLengthError = "Username must be between 6 and 25 characters";
		public static $usernameTaken = "Username already exists";
		
		public static $firstNameLengthError = "First name must be between 1 and 20 characters";
		
		public static $lastNameLengthError = "Username must be between 1 and 20 characters";

		public static $emailInvalidError = "Email address is invalid";
		public static $emailTaken = "Email address already in use";
		
		public static $passwordsMismatch = "Passwords do not match";
		public static $passwordInvalidError = "Password is invalid";
		public static $passwordLengthError = "Passwords must be between 8 and 25 characters";

		// LOGIN ERRORS
		public static $loginFailed = "Username or password entered is incorrect";
	}
?>