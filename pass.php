<?php
include ('navbar.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>BusTag Pass</title>
  </head>
  <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
  }
  
  header {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }
  
  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
  }
  
  nav ul li {
    margin-right: 20px;
  }
  
  nav ul li:last-child {
    margin-right: 0;
  }
  
  nav ul li a {
    color: #333;
    text-decoration: none;
  }
  
  nav ul li a:hover {
    color: #4CAF50;
  }
  
  main {
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .banner {
    background-color:#333;
    background-size: cover;
    background-position: center;
    color: #fff;
    text-align: center;
    padding: 100px 20px;
    position: relative;
    top: 165px;
    left: 181px;
    width: 900px;
  }
  
  .banner h1 {
    font-size: 48px;
    margin-bottom: 20px;
  }
  
  .banner p {
    font-size: 24px;
    margin-bottom: 40px;
  }
  
  .button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    text-decoration: none;
  }  
  .button:hover{
    color: white;
    background-color:green;
  }
  @media screen and (max-width: 720px) {
    .banner{
      text-align: center;
    position: absolute;
    top: 294px;
    left: 22px;
    width: 347px;
    }

  }
  </style>
  <body>
    
    <main>
      <section class="banner">
        <h1>BusTag Pass</h1>
        <p>Book a trip anytime, anywhere with BusTag Pass.</p>
        <a href="step2.php" class="button">Get Started</a>
      </section>
      
    </main>
  </body>
</html>
