<?php
  include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bustag Wallet</title>
  <link rel="stylesheet" href="payment.css">
</head>
<body>
  <div class="container">
    <h2>BusTag Wallet</h2>
    <div class="balance" id="balance">
      <?php
        $balance = 0; // replace with actual balance fetched from database
        echo "Your BusTag Wallet balance: ₹" . $balance;
      ?>
    </div>
    <form id="add-money-form" action="add-money.php" method="POST">
      <label for="amount">Enter amount to add:</label>
      <input type="number" id="amount-input" name="amount" required>
      <fieldset>
        <legend>Select payment method:</legend>
        <label>
          <input type="radio" id="upi-radio" name="payment-method" value="upi" checked>
          UPI
        </label>
        <label>
          <input type="radio" id="card-radio" name="payment-method" value="card">
          Credit/Debit Card
        </label>
      </fieldset>
      <div id="upi-details">
        <label for="upi-id">Enter UPI ID:</label>
        <input type="text" id="upi-id" name="upi-input" required>
      </div>
      <div id="card-details">
        <label for="card-number">Enter card number:</label>
        <input type="text" id="card-number" name="card-number" required>
        <label for="expiry">Expiry date:</label>
        <input type="text" id="card-expiry" name="expiry" placeholder="MM/YY" required>
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv-input" name="cvv" required>
      </div>
      <input type="submit" id="submit-btn" value="Add Money">
    </form>
  </div>
  <img class="image" src="images/payments.png" alt="" style="
    width: 32%;
    position: absolute;
    top: 107px;
    right: -13px;
">
  <script src="payment.js"></script>
</body>
</html>


<?php

include ('billing.php');
?>