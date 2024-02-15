<?php
include ('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Disclaimer - Bus Ticketing System</title>
	<style>
		/* body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			background-color: #f5f5f5;
		} */
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: relative;
            top: 100px;
            left: 100px;
		}
        .copyright{
            position: relative;
            top: 153px;
            left: 500px;"
        }
		h1 {
			font-size: 28px;
			margin-top: 0;
			text-align: center;
			overflow: hidden;
		}
		h1 span {
			display: inline-block;
			animation: marquee 20s linear infinite;
            transform-origin: 0% 100%;
		}
		@keyframes marquee {
        0% {
            transform: translateY(100%);
        }
        100% {
            transform: translateY(-100%);
        }
        }
		p {
			margin-bottom: 1em;
		}
        @media screen and (max-width: 720px) {
            .copyright{
                position: relative;
                top: 153px;
                left: 10px;
            }
            .container{
                position:relative;
                top:100px;
                left:22px;
            }
        }
	</style>
</head>
<body>
    <h1 style="
    position: relative;
    top: 63px;
    font-size: 40px;
    font-weight: bold;
">Disclaimer</h1>
	<div class="container">
		<h1><span>This Bus Ticketing System is provided as is, without warranty of any kind, either express or implied, including but not limited to the implied warranties of merchantability and fitness for a particular purpose. The entire risk as to the quality and performance of the system is with you, the user. In no event shall the developers or contributors to this system be liable for any damages whatsoever, including direct, indirect, incidental, consequential, loss of business profits, or special damages, even if the developers or contributors have been advised of the possibility of such damages. By using this Bus Ticketing System, you agree to the terms of this disclaimer. If you do not agree with these terms, please do not use the system.</span></h1>
	</div>
    <p class="copyright">All rights reserved. &copy; 2022</p>
</body>
</html>
