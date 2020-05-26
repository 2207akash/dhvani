<?php 
	ob_start();

	$timezone = date_default_timezone_set("Asia/Kolkata");

	//Parameters: (Server, Admin, Password, Database)
	$con = mysqli_connect("localhost", "root", "", "dhvani");

	if(mysqli_connect_errno())
		echo "Failed to connect: " . mysqli_connect_errno();
?>