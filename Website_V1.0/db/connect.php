<?php 
	$servername = "localhost";
	$username = "LED_boi";
	$password = "DURACELL9V";
	$dbname = "leds";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if($conn->connect_error){

		die("Connection failed: " . $conn->connect_error);
	} 
?>