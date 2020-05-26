<?php
	include("includes/config.php");
	include("includes/classes/Accounts.php");
	include("includes/classes/Constants.php");

	$account = new Account();
	
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Dhvani</title>

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>To continue, log in to Dhvani</h2>
			<p>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="Email address or username" required></input>
			</p>
			<p>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="Password" required></input>
			</p>
			<button type="submit" name="loginButton">LOG IN</button>
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Sign up with your email address</h2>
			<p>
				<input id="registerFirstName" name="registerFirstName" type="text" placeholder="First name" required></input>

				<?php echo $account->getError(Constants::$firstNameLengthError) ?>
			</p>
			<p>
				<input id="registerLastName" name="registerLastName" type="text" placeholder="Last name" required></input>
				
				<?php echo $account->getError(Constants::$lastNameLengthError) ?>
			</p>
			<p>
				<input id="registerUsername" name="registerUsername" type="text" placeholder="Username" required></input>
				
				<?php echo $account->getError(Constants::$usernameLengthError) ?>
			</p>
			<p>
				<input id="registerEmail" name="registerEmail" type="email" placeholder="Email address" required></input>
				
				<?php echo $account->getError(Constants::$emailInvalidError) ?>
			</p>
			<p>
				<input id="registerPassword" name="registerPassword" type="password" placeholder="Password" required></input>
				
				<?php echo $account->getError(Constants::$passwordLengthError) ?>
				<?php echo $account->getError(Constants::$passwordInvalidError) ?>
				<?php echo $account->getError(Constants::$passwordsMismatch) ?>
			</p>
			<p>
				<input id="registerConfirmPassword" name="registerConfirmPassword" type="password" placeholder="Confirm password" required></input>
			</p>
			<p>
				<label for="registerDOB">Date of birth:</label><br>
				<input id="registerDOB" name="registerDOB" type="date" required></input>
			</p>
			<p>
				<label for="registerGender">Gender:</label><br>
				<input id="genderMale" name="registerGender" type="radio" value="M">Male</input>
				<input id="genderFemale" name="registerGender" type="radio" value="F">Female</input>
				<input id="genderOther" name="registerGender" type="radio" value="O">Other</input>
			</p>
			<button type="submit" name="registerButton">SIGN UP</button>
		</form>
	</div>

</body>
</html>