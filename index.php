<?php 
	include("includes/config.php");

	//session_destroy();

	if(isset($_SESSION['userLoggedIn']))
		$userLoggedIn = $_SESSION['userLoggedIn'];
	else
		header("Location: register.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dhvani</title>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
	<div id="mainContainer">

		<div id="topContainer">
			<?php include("includes/navBarContainer.php"); ?>
		</div>

		<?php include("includes/nowPlayingBarContainer.php"); ?>

	</div>

</body>
</html>