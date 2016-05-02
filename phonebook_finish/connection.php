<?php 

	$host = "";
	$user = "";
	$pass ="";
	$db   = "";

	$conn = new mysqli($host, $user, $pass, $db);


	if ($conn->error) {
		die("Could not connect to the database!");
	}


 ?>