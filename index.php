<?php
include ('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
.button {
  position: relative;
  overflow: hidden;
  height: 3rem;
  padding: 0 2rem;
  border-radius: 1.5rem;
  background: #3d3a4e;
  background-size: 400%;
  color: #fff;
  width: 239px;
}

.button:hover::before {
  transform: scaleX(1);
}

.button-content {
  position: relative;
  z-index: 1;
}

.button::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  transform: scaleX(0);
  transform-origin: 0 50%;
  width: 100%;
  height: inherit;
  border-radius: inherit;
  background: linear-gradient(
    82.3deg,
    rgba(150, 93, 233, 1) 10.8%,
    rgba(99, 88, 238, 1) 94.3%
  );
  transition: all 0.475s;
}
.btnee{
    display: flex;
    flex-direction: row;
    gap: 5rem;
    position: relative;
    top: 327px;
    left: 291px;
}
.heading{
    font-weight: bold;
    position: relative;
    top: 192px;
    left: 95px;
    font-size: 62px;
}
.subhead{
    font-size: 20px;
    position: absolute;
    top: 381px;
    left: 547px;
}
@media only screen and (max-width: 767px) {
    .heading{
        font-size: 22px;
        position: absolute;
        left: 20px;
        top: 293px;
        text-align: center;
    }
    .subhead{
        font-size: 13px;
    position: relative;
    top: 191px;
    left: 8px;
    text-align: center;
    }
    .btnee{
        display: flex;
    flex-direction: column;
    position: relative;
    left: 79px;
    top: 236px;
    gap: 2rem;
    }

}
    </style>
</head>
<body>
    <h1 class="heading">E-Ticket System For Public Transport</h1>
    <p class="subhead">The journey of thousand miles begins with a single step</p>
    <div class="btnee">
        <button id="entrance" class="button">
            <span class="button-content">Scan at Entrance </span>
        </button>
        <button id="exit" class="button">
            <span class="button-content">Scan at Exit </span>
        </button>
    </div>
    
</body>
</html>