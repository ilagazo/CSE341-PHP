<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- Local CSS -->
  <link rel="stylesheet" href="project01.css">
  <title>JMSR: Checkout</title>
</head>

<body>
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <h1><a href="../Project01/homepage.php">Josie's Mountain Spa Retreat</a></h1>
  <?php include('navbar.php'); ?>
  <div class="heroImg">
    <img src="../Project01/Images/hero_checkout.jpg" alt="Josie's Mountain Spa Retreat Pool">
  </div>

  <!-- Products -->
  <div class="product_container">
    <div class="product">
      <p>Price: $100</p>
      <img src="../Project01/Images/swedishMassage.jpg" alt="Swedish Massage Package">
      <p>Swedish Massage Package<br>Quantity Ordered: <?php echo $_SESSION["item1"]; ?></p>
    </div>
    <div class="product">
      <p>Price: $150</p>
      <img src="../Project01/Images/hotStoneMassage.jpg" alt="Hot Stone Massage Package">
      <p>Hot Stone Massage<br>Quantity Ordered: <?php echo $_SESSION["item2"]; ?></p>
    </div>
    <div class="product">
      <p>Price: $175</p>
      <img src="../Project01/Images/coupleMassage.jpg" alt="Couples Massage Package">
      <p>Couples Massage Package<br>Quantity Ordered: <?php echo $_SESSION["item3"]; ?></p>
    </div>
    <div class="product">
      <p>Price: $125</p>
      <img src="../Project01/Images/prenatal.jpg" alt="Prenatal Massage Package">
      <p>Prenatal Massage Package<br>Quantity Ordered: <?php echo $_SESSION["item4"]; ?></p>
    </div>
    <div class="product">
      <p>Price: $125</p>
      <img src="../Project01/Images/aromaTherapy.jpg" alt="Aromatherapy Massage Package">
      <p>Aromatherapy Massage Package<br>Quantity Ordered: <?php echo $_SESSION["item5"]; ?></p>
    </div>
  </div>

  <!-- Customer Input -->
  <h3>Please Fill Out Your Information</h3>
  <div class="billing_info">
    <form action="../Project01/insertDB.php" method="POST">
      <div class="billing_info_seperate">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required maxlength="50">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required maxlength="50">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required maxlength="50">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required minlength="11" maxlength="11">
      </div>
      <div class="billing_info_seperate">
        <label for="address">Street Address:</label>
        <input type="text" id="address" name="address" required maxlength="50">
        <label for="state">State:</label>
        <input type="text" id="state" name="state" required maxlength="14">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required maxlength="50">
        <label for="zipCode">Zipcode:</label>
        <input type="text" id="zipCode" name="zipCode" required maxlength="10">
      </div>
      <div class="billing_info_seperate">
        <label for="card_type">Card Type:</label>
        <input type="text" id="card_type" name="card_type" required maxlength="50">
        <label for="card_name">Name on Card:</label>
        <input type="text" id="card_name" name="card_name" required maxlength="255">
        <label for="card_number">Card Number:</label>
        <input type="text" id="card_number" name="card_number" minlength="16" maxlength="16">
        <label for="card_security">Security Code:</label>
        <input type="number" id="card_security" name="card_security" minlength="3" maxlength="3">
        <label for="card_exp_month">Expiration Month:</label>
        <input type="number" id="card_exp_month" name="card_exp_month" minlength="2" maxlength="2">
        <label for="card_exp_month">Expiration Year:</label>
        <input type="number" id="card_exp_year" name="card_exp_year" minlength="2" maxlength="2">
      </div>

      <!-- Button Container -->
      <div class="button_checkout">
        <a href="../Project01/cart.php">Return to Cart</a>
        <button type="submit" name="submitChecktout">Confirm Purchase</button>
      </div>
    </form>
  </div>

  <!-- Make Session Variables for Payment Info -->
  <?php
  if (isset($_POST["first_name"])) {
    $_SESSION["first_Name"] = $_POST["first_name"];
  }
  if (isset($_POST["last_name"])) {
    $_SESSION["last_name"] = $_POST["last_name"];
  }
  if (isset($_POST["address"])) {
    $_SESSION["address"] = $_POST["address"];
  }
  if (isset($_POST["city"])) {
    $_SESSION["city"] = $_POST["city"];
  }
  if (isset($_POST["state"])) {
    $_SESSION["state"] = $_POST["state"];
  }
  if (isset($_POST["zipCode"])) {
    $_SESSION["zipCode"] = $_POST["zipCode"];
  }
  ?>

  <div class="text-section">
    <h2>Our Legacy. Our Passion.</h2>
    <p>Thank you for your order!
    </p>
  </div>
  <?php include('footer.php'); ?>
</body>

</html>