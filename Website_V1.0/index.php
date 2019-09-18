<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		<title>LED control</title>
		<link rel="stylesheet" href="css/Style_1.css">
	</head>
	<body>
		<img src="{{ url_for('video_feed') }}">
		<div>
		<input type="button" id="RED_Input" value="">
		<input type="button" id="BLUE_Input" value="">
		<input type="button" id="GREEN_Input" value="">
		</div>
		<div id="ResponseR"></div>
		<div id="ResponseB"></div>
		<div id="ResponseG"></div>
		<script src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>
		<script src="js/global.js"></script>
	</body>
</html>