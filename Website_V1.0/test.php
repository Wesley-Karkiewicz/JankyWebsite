<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>change my lights</title>
 </head>
 <body>

 <?php

	$servername = "localhost";
	$username ="LED_boi";
	$password ="DURACELL9V";
	$dbname = "leds";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if($conn->connect_error){

		die("Connection failed: " . $conn->connect_error);
	} else {

		echo  "Succ-cessful connection to sql server on Loitering-Bot" . "<br>";

	}
	$sql_1 = "UPDATE gpio__LEDS SET STATE = 1";
	if( $conn->query($sql_1) === TRUE) {
		echo "Updated gpio__LEDS Succesfully" . "<br>";
	} else {
		echo "Error Updating: " . $conn->error . "<br>";
	}

	$sql_2 = "SELECT * FROM gpio__LEDS";
	$result =  $conn->query($sql_2);
	echo "GPIO" . " " . "STATE" . "<br>";
	while($row = $result->fetch_assoc()){
		echo $row["GPIO"] . " " . $row["STATE"] . "<br>";
	}
	$conn->close();
	?>
 </body>
 </html>
