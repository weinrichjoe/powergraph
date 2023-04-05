<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Jay Abraham's Power of Exponential Growth Calculator</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Jay Abraham's Power of Exponential Growth Calculator</h1>
  <form>
    <div>
      <label for="num-clients">Number of Clients:</label>
      <input type="number" id="num-clients" name="num-clients" required>
    </div>
    <div>
      <label for="avg-transaction-value">Average Transaction Value:</label>
      <input type="number" id="avg-transaction-value" name="avg-transaction-value" required>
    </div>
    <div>
      <label for="repurchase-frequency">Repurchase Frequency:</label>
      <input type="number" id="repurchase-frequency" name="repurchase-frequency" required>
    </div>
    <div>
      <button type="submit" id="calculate-btn">Calculate</button>
    </div>
  </form>
  <div id="result-container">
    <p id="initial-revenue"></p>
    <p id="new-revenue"></p>
    <p id="growth-rate"></p>
  </div>
</body>
</html>
