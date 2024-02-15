<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Our Achievements</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            position:relative;
            top:122px;
		}

		h1 {
			font-size: 36px;
			color: #333;
			margin-bottom: 30px;
			text-align: center;
		}

		ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		li {
			margin-bottom: 20px;
		}

		li span {
			display: inline-block;
			width: 150px;
			font-weight: bold;
			color: #666;
			margin-right: 10px;
		}

		li p {
			display: inline-block;
			margin: 0;
			color: #333;
		}

		/* Responsive styles */
		@media (max-width: 768px) {
			.container {
				padding: 10px;
			}

			h1 {
				font-size: 30px;
				margin-bottom: 20px;
			}

			li span {
				width: 100px;
			}
            span{
                position:relative;
                top:5px;
            }
		}

		@media (max-width: 480px) {
			h1 {
				font-size: 24px;
				margin-bottom: 15px;
			}

			li span {
				display: block;
				width: 100%;
				margin-bottom: 5px;
			}

			li p {
				display: block;
				margin: 0;
				margin-left: 160px;
			}
			.span{
				position:relative;
				top:36px;
			}
			.container{
				padding: 10px;
    			width: 378px;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Our Achievements</h1>
		<ul>
			<li>
				<span class="span">2021:</span>
				<p>IEEE paper published in 2021</p>
			</li>
			<li>
				<span class="span">2021:</span>
				<p>IJRAR paper published in 2021</p>
			</li>
			<li>
				<span class="span">2022:</span>
				<p>IJATEE paper published in 2022</p>
			</li>
			<li>
				<span class="span">2022:</span>
				<p>Done copyright</p>
			</li>
			<li>
				<span class="span">2023:</span>
				<p>Copyright of the year in D Y Patil College of Engineering</p>
			</li>
		</ul>
	</div>
</body>
</html>
