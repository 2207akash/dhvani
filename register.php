<?php
	include("includes/config.php");
	include("includes/classes/Accounts.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);
	
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($input) {
		if(isset($_POST[$input]))
			echo $_POST[$input];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Listen to your heart - Dhvani</title>

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&family=Cantarell&display=swap" rel="stylesheet">

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
						<input class="form-control input-edit" id="loginUsername" name="loginUsername" type="text" placeholder="Email address or username" value="<?php getInputValue('loginUsername') ?>" required></input>
					</p>
					<p>
						<input class="form-control input-edit" id="loginPassword" name="loginPassword" type="password" placeholder="Password" required></input>
					</p>

					<span class="errorMessage">
						<?php echo $account->getError(Constants::$loginFailed) ?>
					</span>

					<button class="btn btn-danger button two" type="submit" name="loginButton">LOG IN</button>

					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Sign up here</span>
					</div>
				</form>
				
				<!-- REGISTER FORM -->
				<form class="form-group" id="registerForm" action="register.php" method="POST">
					<h2 class="heading2">Sign up with your email address</h2>
					<p>
						<input class="form-control input-edit" id="registerFirstName" name="registerFirstName" type="text" placeholder="First name" value="<?php getInputValue('registerFirstName') ?>" required></input>

						<span class="errorMessage">
							<?php echo $account->getError(Constants::$firstNameLengthError) ?>
						</span>
					</p>
					<p>
						<input class="form-control input-edit" id="registerLastName" name="registerLastName" type="text" placeholder="Last name" value="<?php getInputValue('registerLastName') ?>" required></input>
						<span class="errorMessage">
							<?php echo $account->getError(Constants::$lastNameLengthError) ?>
						</span>
					</p>
					<p>
						<input class="form-control input-edit" id="registerUsername" name="registerUsername" type="text" placeholder="Username" value="<?php getInputValue('registerUsername') ?>" required></input>
						<span class="errorMessage">
							<?php echo $account->getError(Constants::$usernameLengthError) ?>
							<?php echo $account->getError(Constants::$usernameTaken) ?>
						</span>
					</p>
					<p>
						<input class="form-control input-edit" id="registerEmail" name="registerEmail" type="email" placeholder="Email address" value="<?php getInputValue('registerEmail') ?>" required></input>
						<span class="errorMessage">
							<?php echo $account->getError(Constants::$emailInvalidError) ?>
							<?php echo $account->getError(Constants::$emailTaken) ?>
						</span>
					</p>
					<p>
						<input class="form-control input-edit" id="registerPassword" name="registerPassword" type="password" placeholder="Password" required></input>
						<span class="errorMessage">
							<?php echo $account->getError(Constants::$passwordLengthError) ?>
							<?php echo $account->getError(Constants::$passwordInvalidError) ?>
							<?php echo $account->getError(Constants::$passwordsMismatch) ?>
						</span>
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

					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Login here</span>
					</div>
				</form>
			</div>
			<div id="rightText">
				<h1>Get great music, right now</h1>
				<h2>Millions of songs. No credit card needed.</h2>
				<ul>
					<li>Discover music you'll fall in love with</li>
					<li>Enjoy personalized playlists made just for you</li>
					<li>Follow your favorite artists</li>
					<li>Listen to non-stop music and stay streamed</li>
				</ul>
			</div>
		</div>
		
		<div class="icons8">
			<a target="_blank" href="https://icons8.com/">Icons by Icons8</a>
		</div>
	</div>

	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<!-- CUSTOM JS -->
	<script src="assets/js/register.js"></script>
	<?php 
		if(isset($_POST['registerButton'])) {
			echo '<script>
					$(document).ready(function() {
						$("#loginForm").hide();
						$("#registerForm").show();
					})
				</script>';
		}
		else {
			echo '<script>
					$(document).ready(function() {
						$("#loginForm").show();
						$("#registerForm").hide();
					})
				</script>';
		}
	?>
	
</body>
</html>