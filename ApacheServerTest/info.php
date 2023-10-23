<!DOCTYPE>
<html>
<head>
	<title>Dynamic Information</title>
	<script>
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				document.getElementById("local").innerHTML = 'Unsuported operation';
			}
		}

		function showPosition(position) {
			document.getElementById("local").innerHTML = 'Your current location: ' + '<br>Latitude: ' + position.coords.latitude + '<br>Longitude: ' + position.coords.longitude;
		}
	</script>
	<style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: #516142;
		}
		.content {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			text-align: center;
			background-color: #DFE6DA;
			color: #1B2B0C;
			width: 50vw;
			height: 50vh;
			border-radius: 10px;
			box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.8);
			padding: 2%;
		}
		h1 {
			font-size: 30px;
			font-family: Arial, sans-serif;
		}
		p {
			font-size: 18px;
			font-family: Arial, sans-serif;;
			font-weight: thin;
		}
		button {
			margin: 2%;
			padding: 10px 20px;
			border-radius: 50px;
			border: none;
			background-color: #204200;
			color: #DFE6DA;
			font-size: 15px;
			font-family: Arial, sans-serif;
			font-weight: bold;
			cursor: pointer;
			text-decoration: none;
			transition: 0.2s;
		}
		button:hover {
			border: 2px solid #204200;
			background: transparent;
			color: #204200;
			transform: scale(1.1, 1.1);
		}
		button:active {
			box-shadow: 2px 2px 2px black inset;
		}
	</style>
</head>
<body>
	<div class="content">
		<h1>Dynamic Informations</h1>
		<?php
		$userIP = $_SERVER['REMOTE_ADDR'];
		$userDate = date('d/m/Y');
		$userTime = date('H:i:s');
		echo '<p>IP ADDRESS ' .$userIP. '</p>';
		echo '<p>Date ' .$userDate. '</p>';
		echo '<p>Time ' .$userTime. '</p>';
		?>
		<p id='local'></p>
		<button onclick='getLocation()'>Get my location</button>
		<button onclick='location.reload()'>Reload</button>
	</div>
</body>
</html>
