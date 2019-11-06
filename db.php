	<?php
	$servername = "http://triosdevelopers.com";
	$username = "R.Razmgir";
	$password = "eJutF5wH";
	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	mysqli_select_db($conn,"rrazmgirdb");
	?>