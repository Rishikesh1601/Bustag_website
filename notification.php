<?php
include ('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notification Settings</title>
	<style>
		/* body {
			margin: 0;
			padding: 0;
			background-color: #f7f7f7;
		} */
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            position:relative;
            top:140px;
		}
		h1 {
			font-size: 28px;
			margin-bottom: 20px;
			color: #333;
			text-align: center;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: stretch;
		}
		label {
			font-size: 18px;
			margin-bottom: 10px;
			color: #333;
		}
		input[type="checkbox"] {
			margin-bottom: 20px;
            position: relative;
            top: -27px;
		}
		button {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			font-size: 18px;
			cursor: pointer;
			margin-top: 20px;
		}
		button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Notification Settings</h1>
		<form>
			<label for="email">Email Notifications</label>
			<input type="checkbox" id="email" name="email" checked>
			<label for="push">Push Notifications</label>
			<input type="checkbox" id="push" name="push">
			<button type="submit">Save Changes</button>
		</form>
	</div>
</body>
</html>
