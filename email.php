<?php
include ('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<style>
    form{
        margin-top: 36px;
    display: flex;
    flex-direction: column;
    width: 300px;
    font-family: sans-serif;
    /* position: relative; */
    justify-content: center;
    /* align-items: center; */
    position: relative;
    top: 101px;
    left: 422px;

    }
    form input,textarea{
    height: 54px;
    border-radius: 5px;
    background: white;
    margin-bottom: 15px;
    border: none;
    padding: 0 20px;
    font-weight: 300;
    font-size: 14px;
    color: #4B4B4B;
    border: 1px solid black;
    text-align: left;
    padding: 14px;
    }
    .button {
    /* width: 100%; */
    /* height: 54px; */
    /* font-size: 30px; */
    color: white;
    background: #0085ffb8;
    border-radius: 5px;
    border: none;
    /* font-weight: 500; */
    /* text-transform: uppercase; */
    /* align-items: center; */
    text-decoration: none;
    text-align: center;
    /* justify-content: center; */
    /* padding-top: 14px; */
    font-size: 28px;
    padding: 0px;
  }
  @media screen and (max-width: 720px) {
    form{
        position:relative;
        left:30px;
    }

  }
</style>
<body>
    <h1 style="font-size: 32px; color: #202224; font-weight: 600;position:relative;top:50px;left:50px;">Contact Us</h1>
	<form action="mailto:0910vaishu@gmail.com" method="post" enctype="text/plain">
		<!-- <label for="name">Name:</label><br> -->
		<input type="text" id="name" placeholder="Name" name="name"><br>
		<!-- <label for="email">Email:</label><br> -->
		<input type="email" id="email" placeholder="E-mail" name="email"><br>
		<!-- <label for="message">Message:</label><br> -->
		<textarea id="message" placeholder="Message" name="message"></textarea><br>
		<input class="button" type="submit" value="Submit">
	</form>
</body>
</html>
