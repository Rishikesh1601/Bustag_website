<?php
include ('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        .products{
                width: 80%;
                margin: auto;
                text-align: center;
                padding-top: 100px;
            }
            .heading{
                font-size: 36px;
                font-weight: bold;
                text-align: center;
                position: relative;
                top: 50px;
            }
            .subhead{
                margin: 57px;
                position: relative;
                left: 50px;
                font-size: 19px;
                font-family: sans-serif;
            }
            .heading1{
                position: relative;
                top: -85px;
            }
            .subhead1{
                position: relative;
                top: -87px;
                font-size: 14px;
                font-family: sans-serif;
            }
            h1{
                font-size: 36px;
                font-weight: bold;
                text-align: center;
            }
            p{
                color:black;
                font-size: 14px;
                font-weight: 500;
                line-height: 22px;
                padding: 10px;
            }

            .row{
                margin-top: 5%;
                display: flex;
                justify-content: center;
                position: relative;
                top: -79px;
                left: 83px;
            }
            .products-col{
                flex-basis: 31%;
                /* background-image: url(bg.png); */
                background-color:#0000ff26;
                border-radius: 10px;
                margin: 5px;
                padding: 20px 12px;
                box-sizing: border-box;
                color: black;	
            }
            .products-col p{
                color: black;
            }
            h3{
                text-align: center;
                font-weight: 600;
                margin: 10px;
            }
            .products-col img{
                width: 100%;
            }
            .products-col:hover{
                box-shadow: 0 0 20px 0px rgba(0,0,0,0.5);
            }
            @media screen and (max-width: 720px) {
            .subhead{
                text-align: left;
                position: relative;
                margin: 7px;
                left: -3px;
                top: 44px;
            }
            .heading1{
                position: relative;
                top: -23px;
            }
            .subhead1{
                display:none;
            }
            .row{
                display: flex;
                flex-direction: column;
                justify-content: center;
                position: relative;
                left: 1px;
                top: -9px;
            }
        }
    </style>
</head>
<body>
    <h1 class="heading">E-Ticket System For Public Transport</h1>
    <p class="subhead">In prevailing technology, the passengers need to 
        preserve the paper tickets till the end of journey which leads to 
        the pollution and if passenger want to change the destination 
        after entering public transport, then there is no alternative. In 
        the existing traditional way of ticket booking in public 
        transport there are various loopholes present. If any 
        emergency condition occurs then there is unavailability of
        tracking system. So, our study involves the prominent and 
        effective solution for reducing those loopholes. As solution we 
        will provide a model-cum-design or can be implemented as 
        algorithm for booking ticket. It involves payment through QR 
        code scanning and manipulation in destination and refund of 
        money for untraveled path. We have an arrangement for 
        tracking the vehicles so the passengers can find the path 
        conveniently. So, we advent this as the emerging way of public 
        transport by complementing to some government schemes like 
        “Cashless India”, “Paperless Systems”. So, we have a new 
        emerging digital India.</p>
    <section class="products">
		<h1 class="heading1">Services provided by us</h1>
		<p class="subhead1">now explore all the public transport at your finger tips</p>

		<div class="row">
			<div class="products-col">
				<h3>One Step Ahead</h3>
				<img src="images/One step ahead.jpeg">
				<p>Usage of RFID scanner for automatic payment</p>
			</div>
			<div class="products-col">
				<h3>Tracking Buses</h3>
				<img src="images/Track the Bus.jpeg">
				<p>Finding the nearest public transport and bus stations</p>
			</div>
			<div class="products-col">
				<h3>Online Pass</h3>
				<img src="images/bus pass.jpeg">
				<p>Take pass online with very few steps</p>
			</div>
			<div class="products-col">
				<h3>Easy Payments</h3>
				<img src="images/images.jpeg">
				<p>Cashless Payment with inbuilt wallet or UPI apps</p>
			</div>
		</div>
		<!-- <h6>* terms and condition apply</h6> -->
	</section>
</body>
</html>