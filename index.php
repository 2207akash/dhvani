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
	<div id="nowPlayingBarContainer">
		<div id="nowPlayingBar">
			<div id="nowPlayingLeft">
				
			</div>

			<div id="nowPlayingCenter">
				<div class="content playerControls">
					<div class="buttons">
						<button class="controlButton shuffle" title="Shuffle">
							<img src="assets/images/icons/shuffle.png" alt="Shuffle">
						</button>

						<button class="controlButton prev" title="Previous">
							<img src="assets/images/icons/prev.png" alt="Previous">
						</button>

						<button class="controlButton play" title="Play">
							<img src="assets/images/icons/play.png" alt="Play">
						</button>

						<button class="controlButton pause" title="Pause" style="display: none">
							<img src="assets/images/icons/pause.png" alt="Pause">
						</button>

						<button class="controlButton next" title="Next">
							<img src="assets/images/icons/next.png" alt="Next">
						</button>

						<button class="controlButton repeat" title="Repeat">
							<img src="assets/images/icons/repeat.png" alt="Repeat">
						</button>
					</div>
				</div>
			</div>

			<div id="nowPlayingRight">
				
			</div>
		</div>	
	</div>
</body>
</html>