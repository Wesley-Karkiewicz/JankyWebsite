<?php
	require '../db/connect.php';
	$GPIO = $_POST['GPIO'];
	$Update_Value = $_POST['Update_Value'];

	if(1 == $Update_Value){
		
		$command_1 = "SELECT STATE FROM leds.gpio__LEDS WHERE GPIO = " . $GPIO;
		$result_1 =  $conn->query($command_1)->fetch_object()->STATE;
		if($result_1  == 1){
			$command_2 ="UPDATE leds.gpio__LEDS SET STATE = 0 WHERE GPIO = " . $GPIO;
			$conn->query($command_2);
			echo "0";
		} else if($result_1 == 0) {
			$command_3 ="UPDATE leds.gpio__LEDS SET STATE = 1 WHERE GPIO = " . $GPIO;
			$conn->query($command_3);
			echo"1";
		}
		$conn->close();
		exit();
		
	} else if(0 == $Update_Value) {
		$command_4 = "SELECT STATE FROM leds.gpio__LEDS WHERE GPIO = "		. $GPIO;
		$result_2 =  $conn->query($command_4)->fetch_object()->STATE;
		echo $result_2;
		$conn->close();
		exit();
	} 
	?>
