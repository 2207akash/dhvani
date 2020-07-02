<?php 
	include("includes/config.php");
	include("includes/classes/Artist.php");
	include("includes/classes/Album.php");

	//LOGOUT: session_destroy();

	if(isset($_SESSION['userLoggedIn']))
		$userLoggedIn = $_SESSION['userLoggedIn'];
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
	
</head>
<body>
	<div id="mainContainer">

		<div id="topContainer">

			<?php include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">
				
				<div id="mainContent">