<?php
include ('navbar.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Step 1</title>
    <!-- <link rel="stylesheet" href="step2.css"> -->
  </head>
  <style>
    .step{
    max-width: 1200px;
    margin: 0 auto;
    padding: 100px 20px;
    text-align: center;
}

section{
    text-align: center;
    justify-content: center;
    display: flex;
}
.feed-form {
    margin-top: 36px;
    display: flex;
    flex-direction: column;
    width: 300px;
    font-family: sans-serif;
  }
  
  .feed-form input {
    height: 54px;
    border-radius: 5px;
    background: white;
    margin-bottom: 15px;
    border: none;
    padding: 0 20px;
    font-weight: 300;
    font-size: 14px;
    color: #4B4B4B;
    border: 2px solid black;
  }
  
  .button_submit:hover, .feed-form input:hover {
    transform: scale(1.009);
    box-shadow: 0px 0px 3px 0px #212529;
  }
  
  .button {
    width: 100%;
    height: 54px;
    font-size: 30px;
    color: white;
    background: #0085ffb8;
    border-radius: 5px;
    border: none;
    font-weight: 500;
    /* text-transform: uppercase; */
    /* align-items: center; */
    text-decoration: none;
    text-align: center;
    /* justify-content: center; */
    /* padding-top: 14px; */
  }
  .button:hover{
    color: white;
    background-color:blue;
  }
  
  select{
    height: 54px;
    border-radius: 5px;
    background: white;
    margin-bottom: 15px;
    border: none;
    padding: 0 20px;
    font-weight: 300;
    font-size: 14px;
    color: #4B4B4B;
    border: 2px solid black;
  }
  
  </style>
  <body>
    <main>
      <div class="step">
        <h2>Step 1 - Personal Information</h2>
        <p>Please provide your personal information to proceed with the purchase of your pass.</p>
       
          
            <section class="section_form">
                <form id="consultation-form" class="feed-form" action="#">
                <input required placeholder="Name" type="text">
                <input name="phone" required placeholder="Phone number">
                <input name="email" required placeholder="E-mail" type="email">
                <input name="address" required placeholder="Address" type="text">
                <select id="my-select" required name="my-select">
                    <option value="" disabled selected>Select pass type</option>
                    <option value="option1">PCM pass</option>
                    <option value="option2">PCMC pass</option>
                    <option value="option3">PCM and PCMC pass</option>
                    <option value="option3">Monthly pass</option>
                </select>
                <a href="final.php" class="button">Continue</a>
                </form>
            </section>
            <!-- <label for="select pass">Select Pass Type</label> -->
          
        
        </div>
    </main>
  </body>
</html>
