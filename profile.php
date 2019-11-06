<?php 
session_start();
//include 'db.php';

if ( isset( $_POST["submit"] ) ) {
	$fn = $_POST["fname"];
	$ln = $_POST["lname"];
	$em = $_POST["email"];
	$pass = $_POST["pass"];



	$servername = "http://triosdevelopers.com";
	$username = "R.Razmgir";
	$password = "eJutF5wH";
	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	mysqli_select_db($conn,"rrazmgirdb");
	


	$sqlInsert = "INSERT INTO users (id, fname, lname, email, pwd)
		VALUES (null, '$fn', '$ln', '$em', '$pass')";

		if ($conn->query($sqlInsert) === TRUE) {
			echo "successful insert";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}

	$conn->close();




















	//$sqlSelect = "SELECT email FROM users where email = '{$_SESSION["em"]}'";
	//$result = $conn->query($sqlSelect);
	//if ($result->num_rows > 0) {
	//		$_SESSION["er"] = "Email already exists. Please try a different email address.";
	//		header("Location: signup.php");
	//} else {
	//	$sqlInsert = "INSERT INTO users (id, fname, lname, email, pwd)
	//	VALUES (null, '$fn', '$ln', '$em', '$pass')";
	//
	//	if ($conn->query($sqlInsert) === TRUE) {
	//		echo "successful insert";
	//	} else {
	//		echo "Error: " . $sql . "<br>" . $conn->error;
	//	}
	////}
	//$sqlSelect2 = "SELECT * FROM users where email = '{$_SESSION["em"]}'";
	//$result2 = $conn->query($sqlSelect2);
	//if ($result2->num_rows > 0) {
	//		while($row = $result2->fetch_assoc()) {
	//			$_SESSION["id"] = $row["userid"];
	//		}
	//} 
//}
//$sqlSelect3 = "SELECT * FROM details where userid = '{$_SESSION["id"]}'";
//	$result2 = $conn->query($sqlSelect3);
//	if ($result3->num_rows > 0) {
//			while($row = $result3->fetch_assoc()) {
//				$_SESSION["gender"] = $row["gender"];
//				$_SESSION["dob"] = $row["dob"];
//				$_SESSION["country"] = $row["country"];
//				$_SESSION["city"] = $row["city"];
//				$_SESSION["address"] = $row["address"];
//				$_SESSION["tel"] = $row["tel"];
//				$_SESSION["photo"] = $row["photo"];
//			}
//	} 
//$conn->close();

//if (!isset($_SESSION["ln"]) || $_SESSION["ln"] == null){
//	$_SESSION["err"] = "Keep calm and log in first!!!";
//	header("Location: login.php");
//}
?>