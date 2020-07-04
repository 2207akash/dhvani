<?php 
	include("includes/config.php");
	include("includes/classes/Artist.php");
	include("includes/classes/Album.php");
	include("includes/classes/Song.php");

	//LOGOUT: session_destroy();

	if(isset($_SESSION['userLoggedIn'])) {
		$userLoggedIn = $_SESSION['userLoggedIn'];
		echo "<script>userLoggedIn = '$userLoggedIn';</script>";
	}
	else
		header("Location: register.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dhvani</title>
	
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- CUSTOM JS -->
	<script src="assets/js/script.js"></script>
</head>
<body>
	<div id="mainContainer">

		<div id="topContainer">

			<?php include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">
				
				<div id="mainContent">