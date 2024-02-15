// Get elements
const balanceEl = document.getElementById('balance');
const upiDetailsEl = document.getElementById('upi-details');
const cardDetailsEl = document.getElementById('card-details');
const upiRadioEl = document.getElementById('upi-radio');
const cardRadioEl = document.getElementById('card-radio');
const amountInputEl = document.getElementById('amount-input');
const upiInputEl = document.getElementById('upi-input');
const cardNumberInputEl = document.getElementById('card-number-input');
const cardExpiryInputEl = document.getElementById('card-expiry-input');
const cvvInputEl = document.getElementById('cvv-input');
const submitBtnEl = document.getElementById('submit-btn');

// Add event listeners
upiRadioEl.addEventListener('change', togglePaymentMethod);
cardRadioEl.addEventListener('change', togglePaymentMethod);
submitBtnEl.addEventListener('click', handleSubmit);

// Toggle payment method based on radio selection
function togglePaymentMethod() {
  if (upiRadioEl.checked) {
    upiDetailsEl.classList.add('show');
    cardDetailsEl.classList.remove('show');
  } else if (cardRadioEl.checked) {
    cardDetailsEl.classList.add('show');
    upiDetailsEl.classList.remove('show');
  }
}

// Handle form submission
function handleSubmit(event) {
  event.preventDefault();
  const amount = amountInputEl.value;
  if (upiRadioEl.checked) {
    const upi = upiInputEl.value;
    if (validateUpi(upi) && validateAmount(amount)) {
      // Send payment request to server
      sendPaymentRequest('upi', amount, upi);
    }
  } else if (cardRadioEl.checked) {
    const cardNumber = cardNumberInputEl.value;
    const expiry = cardExpiryInputEl.value;
    const cvv = cvvInputEl.value;
    if (validateCard(cardNumber, expiry, cvv) && validateAmount(amount)) {
      // Send payment request to server
      sendPaymentRequest('card', amount, cardNumber);
    }
  }
}

// Validate UPI ID
function validateUpi(upi) {
  if (!upi) {
    alert('Please enter UPI ID');
    return false;
  }
  // Validate UPI ID format
  const regex = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/;
  if (!regex.test(upi)) {
    alert('Invalid UPI ID');
    return false;
  }
  return true;
}

// Validate card details
function validateCard(cardNumber, expiry, cvv) {
  // Validate card number
  if (!cardNumber) {
    alert('Please enter card number');
    return false;
  }
  // Validate expiry date
  if (!expiry) {
    alert('Please enter expiry date');
    return false;
  }
  // Validate CVV
  if (!cvv) {
    alert('Please enter CVV');
    return false;
  }
  return true;
}

// Validate amount
function validateAmount(amount) {
  if (!amount || amount <= 0) {
    alert('Please enter a valid amount');
    return false;
  }
  return true;
}

// Send payment request to server
function sendPaymentRequest(paymentMethod, amount, details) {
  fetch('process_payment.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      paymentMethod,
      amount,
      details
    })
  })
    .then(response => response.json())
    .then(data => {
      // Update balance and show success message
    balanceEl.innerText = data.balance;
    alert('Payment successful!');
    // Clear form inputs
    amountInputEl.value = '';
    upiInputEl.value = '';
    cardNumberInputEl.value = '';
    cardExpiryInputEl.value = '';
    cvvInputEl.value = '';
    // Reset payment method to UPI
    upiRadioEl.checked = true;
    cardDetailsEl.classList.remove('show');
    upiDetailsEl.classList.add('show');
    })
    .catch(error => {
    console.error('Error processing payment:', error);
    alert('Error processing payment');
    });
    }
     
