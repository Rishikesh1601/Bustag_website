<?php
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Bus</title>
    <style>
        *{
  margin:0;
  padding:0;
}

.container{
    margin: 20px auto;
    height: 599px;
    width: 82%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    background: url(https://cldup.com/Vl8C-VKQJ6-2000x2000.png);
    background-size: cover;
}

.pointer{
  display: inline-block;
  width:10px;
  height:10px;
  border-radius:100%;
  position:relative;
  animation-name:position-bus;
  animation-duration: 35s;
  animation-direction: alternate;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  cursor:pointer;
}

.animation{
  z-index:2;
  display: inline-block;

  position:absolute;

  width:inherit;
  height:inherit;

  border-radius:100%;

  transform-origin: center;

  animation-name:radar-animation;
  animation-duration: 2s;
  animation-timing-function:linear;
  animation-iteration-count: infinite;
}

.danger{
  background:#c0392b;
}

.normal{
  background:#27ae60;
}

.alert{
  background:#f39c12;
}

@keyframes position-bus{
  0%{
    position:relative;
    top:0;
    left:0;
  }

  100%{
    position:relative;
    top:200px;
    left:100px;

  }
}
@keyframes radar-animation{
  0%{
    background:inherit;
    transform:scale(0);
    opacity: 0.5;
  }

  100%{
    opacity:1;
    transform:scale(5);
  }
}
    </style>
</head>
<body>
    
<div class="container">

<span class="pointer danger">
  <span class="animation"></span>
</span>	

<span class="pointer normal">
  <span class="animation"></span>
</span>		

<span class="pointer alert">
  <span class="animation"></span>
</span>		

</div>
</body>
</html>