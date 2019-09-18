setInterval(function() { Main_Loop() }, 200);
var counter = 0;
Main_Loop();
function Main_Loop() {
	counter = counter + 1;
	console.log(counter);
	Reset_Listeners();
	Listen();
	Passive_Update();
	//if(!Listen() && ((counter % 100) == 0)) {
		///console.log("passive_Update");
		//setTimeout(Passive_Update(), 50);
	//};
}

function Reset_Listeners(){
	$('input#RED_Input').off();
	$('input#BLUE_Input').off();
	$('input#GREEN_Input').off();
}

function Listen() {
	var clicked = false;
	$('input#RED_Input').on('click',function(){ setTimeout(function() {
		$.post('ajax/LEDs.php' , {GPIO:2, Update_Value:1} , function(data) {
			//$('div#ResponseR').text(data);
		});
		clicked = true;
	} , 50)});
	
	$('input#BLUE_Input').on('click', function(){ setTimeout(function() {
		$.post('ajax/LEDs.php' , {GPIO:3, Update_Value:1}, function(data) {
			//$('div#ResponseB').text(data);
		});
		clicked = true;
		document.getElementById("BLUE_Input").style.backgroundColor = "Blue";
	}, 50)});
	
	$('input#GREEN_Input').on('click', function(){ setTimeout(function() {
		$.post('ajax/LEDs.php' ,{GPIO:4, Update_Value:1}, function(data) {
			//$('div#ResponseG').text(data);
		});
		clicked = true; 
		document.getElementById("GREEN_Input").style.backgroundColor = "Green";
	}, 50)});
	return clicked;
}

function Passive_Update() {
	$.post('ajax/LEDs.php' ,{GPIO:2 , Update_Value:0}, function(data) {
			if(data == 1){
				document.getElementById("RED_Input").style.backgroundColor = "Red";
			} else {
				document.getElementById("RED_Input").style.backgroundColor = "Gray";
			}
			//$('div#ResponseR').text(data);
	}) ;
	$.post('ajax/LEDs.php' ,{GPIO:3 , Update_Value:0}, function(data) {
			if(data == 1){
				document.getElementById("BLUE_Input").style.backgroundColor = "Blue";
			} else {
				document.getElementById("BLUE_Input").style.backgroundColor = "Gray";
			}
			//$('div#ResponseB').text(data);
	});
	
	$.post('ajax/LEDs.php' ,{GPIO:4 , Update_Value:0}, function(data) {
			if(data == 1){
				document.getElementById("GREEN_Input").style.backgroundColor = "Green";
			} else {
				document.getElementById("GREEN_Input").style.backgroundColor = "Gray";
			}
			//$('div#ResponseG').text(data);
	});
		
}
	