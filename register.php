<?php
	include("includes/config.php");
	include("includes/classes/Accounts.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);
	
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Listen to your heart - Dhvani</title>

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&display=swap" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	
</head>
<body>
	<div id="background">
		<div id="loginContainer">
			<div id="inputContainer">
				<!-- LOGIN FORM -->
				<form class="form-group" id="loginForm" action="register.php" method="POST">
					<h2 class="heading2">To continue, log in to Dhvani</h2>
					<p>
						<input class="form-control input-edit" id="loginUsername" name="loginUsername" type="text" placeholder="Email address or username" required></input>
					</p>
					<p>
						<input class="form-control input-edit" id="loginPassword" name="loginPassword" type="password" placeholder="Password" required></input>
					</p>

					<?php echo $account->getError(Constants::$loginFailed) ?>
					<button class="btn btn-danger button two" type="submit" name="loginButton">LOG IN</button>
				</form>
				
				<!-- REGISTER FORM -->
				<form class="form-group" id="registerForm" action="register.php" method="POST">
					<h2 class="heading2">Sign up with your email address</h2>
					<p>
						<input class="form-control input-edit" id="registerFirstName" name="registerFirstName" type="text" placeholder="First name" required></input>

						<?php echo $account->getError(Constants::$firstNameLengthError) ?>
					</p>
					<p>
						<input class="form-control input-edit" id="registerLastName" name="registerLastName" type="text" placeholder="Last name" required></input>
						
						<?php echo $account->getError(Constants::$lastNameLengthError) ?>
					</p>
					<p>
						<input class="form-control input-edit" id="registerUsername" name="registerUsername" type="text" placeholder="Username" required></input>
						
						<?php echo $account->getError(Constants::$usernameLengthError) ?>
						<?php echo $account->getError(Constants::$usernameTaken) ?>
					</p>
					<p>
						<input class="form-control input-edit" id="registerEmail" name="registerEmail" type="email" placeholder="Email address" required></input>
						
						<?php echo $account->getError(Constants::$emailInvalidError) ?>
						<?php echo $account->getError(Constants::$emailTaken) ?>
					</p>
					<p>
						<input class="form-control input-edit" id="registerPassword" name="registerPassword" type="password" placeholder="Password" required></input>
						
						<?php echo $account->getError(Constants::$passwordLengthError) ?>
						<?php echo $account->getError(Constants::$passwordInvalidError) ?>
						<?php echo $account->getError(Constants::$passwordsMismatch) ?>
					</p>
					<p>
						<input class="form-control input-edit" id="registerConfirmPassword" name="registerConfirmPassword" type="password" placeholder="Confirm password" required></input>
					</p>
					<p>
						<label for="registerDOB">Date of birth:</label><br>
						<input class="form-control input-edit" id="registerDOB" name="registerDOB" type="date" required></input>
					</p>
					<p>
						<label for="registerGender">Gender:</label><br>
						<input id="genderMale" name="registerGender" type="radio" value="M">Male</input>
						<input id="genderFemale" name="registerGender" type="radio" value="F">Female</input>
						<input id="genderOther" name="registerGender" type="radio" value="O">Other</input>
					</p>
					<button class="btn btn-danger text-dark button two" type="submit" name="registerButton">SIGN UP</button>
				</form>

			</div>
		</div>
	</div>
</body>
</html>