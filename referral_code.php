<?php
include ('navbar.php');
$currentUser = $_SESSION['name'];
   $query = "select * from `users` where `name` = '$currentUser' ";
    $result = mysqli_query($conn, $query); // Use curly braces to access array members inside strings
    if($result->num_rows > 0){ 
      while($row = $result->fetch_assoc()){
        $name = $row['name'];
        $email = $row['email'];
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Referral Code</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			/* background-color: #f2f2f2; */
			margin: 0;
			padding: 0;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
		}

		.container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            position: relative;
            top: 175px;
            left: 110px;
		}

		label {
			display: block;
			margin-top: 20px;
		}

		input[type=text] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			margin-top: 5px;
		}

		button[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			margin-top: 20px;
			cursor: pointer;
		}

		.referral-code {
			display: block;
			margin-top: 20px;
			font-size: 20px;
			font-weight: bold;
			text-align: center;
		}
		@media screen and (max-width: 720px) {
			.container{
				width: 372px;
				position: absolute;
				top: 300px;
				left: 6px;
			}


		}

	</style>
</head>
<body>
	
	<div class="container">
		<form>
			<label for="name">Your Name:</label>
			<input disabled type="text" id="name" name="name" value="<?php echo $name ?>" placeholder="Enter your name" required>

			<label for="email">Your Email:</label>
			<input disabled type="email" id="email" name="email" value="<?php echo $email ?>" placeholder="Enter your email" required>
<br>
			<button type="submit">Generate Referral Code</button>
		</form>

		<span class="referral-code">Your Referral Code: <span id="referral-code"></span></span>
	</div>

	<script>
		// Generate random referral code
		function generateCode() {
			let chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			let code = "";
			for (let i = 0; i < 8; i++) {
				code += chars.charAt(Math.floor(Math.random() * chars.length));
			}
			return code;
		}

		// Update referral code on form submit
		document.querySelector("form").addEventListener("submit", function(event) {
			event.preventDefault();
			let name = document.querySelector("#name").value;
			let email = document.querySelector("#email").value;
			let code = generateCode();
            document.querySelector("#referral-code").textContent = `${name.slice(0,3).toUpperCase()}${code}${email.slice(-3).toUpperCase()}`;
});
</script>

</body>
</html>

