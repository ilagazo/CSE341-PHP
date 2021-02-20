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
    <img src="../Project01/Images/hero_checkout.jpg" alt="Josie's Mountain Spa Retreat Lounge">
  </div>
  <h2>Please Review Your Order</h2>
  <!-- Products -->
  <div class="product_container">
    <div class="product">
      <p>Price: $100</p>
      <img src="../Project01/Images/swedishMassage.jpg" alt="Swedish Massage Package">
      <?php echo "<p>Swedish Massage Package<br>Quantity Ordered:" . $_SESSION['prod1'] . "</p>"; ?>
    </div>
    <div class="product">
      <p>Price: $150</p>
      <img src="../Project01/Images/hotStoneMassage.jpg" alt="Hot Stone Massage Package">
      <p>Hot Stone Massage<br>Quantity Ordered: <?php echo $_SESSION["prod2"]; ?></p>
    </div>
    <div class="product">
      <p>Price: $175</p>
      <img src="../Project01/Images/coupleMassage.jpg" alt="Couples Massage Package">
      <p>Couples Massage Package<br>Quantity Ordered: <?php echo $_SESSION["prod3"]; ?></p>
    </div>
    <div class="product">
      <p>Price: $125</p>
      <img src="../Project01/Images/prenatal.jpg" alt="Prenatal Massage Package">
      <p>Prenatal Massage Package<br>Quantity Ordered: <?php echo $_SESSION["prod4"]; ?></p>
    </div>
    <div class="product">
      <p>Price: $125</p>
      <img src="../Project01/Images/aromaTherapy.jpg" alt="Aromatherapy Massage Package">
      <p>Aromatherapy Massage Package<br>Quantity Ordered: <?php echo $_SESSION["prod5"]; ?></p>
    </div>
  </div>

  <!-- Customer Input -->
  <h3>Please Fill Out Your Information</h3>
  <form action="../Project01/insertDB.php" method="POST">
    <div class="billing_info">
      <div class="billing_info_seperate">
        <div class="form-group">
          <label for="first_name">First Name:</label><br>
          <input type="text" id="first_name" name="first_name" required maxlength="50" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name:</label><br>
          <input type="text" id="last_name" name="last_name" required maxlength="50" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="email_input">Email:</label><br>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="email" id="email_input" name="email_input" class="form-control" placeholder="name@example.com">
          </div>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label><br>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">#</span>
            </div>
            <input type="text" id="phone" name="phone" required minlength="11" maxlength="11" placeholder="19511111111">
          </div>
        </div>
      </div>

      <div class="billing_info_seperate">
        <div class="form-group">
          <label for="address">Street Address:</label><br>
          <input type="text" id="address" name="address" required maxlength="50" placeholder="Address">
        </div>
        <div class="form-group">
          <label for="state">State:</label><br>
          <input type="text" id="state" name="state" required maxlength="14" placeholder="State (i.e. UT)">
        </div>
        <div class="form-group">
          <label for="city">City:</label><br>
          <input type="text" id="city" name="city" required maxlength="50" placeholder="City">
        </div>
        <div class="form-group">
          <label for="zipCode">Zipcode:</label><br>
          <input type="text" id="zipCode" name="zipCode" required maxlength="10" placeholder="Zip Code">
        </div>
      </div>

      <div class="billing_info_seperate">
        <!-- Radio Buttons -->
        <div class="form-check form-check-inline">
          <input type="radio" id="card_type_visa" name="card_type" value="Visa" class="form-check-input">
          <label for="card_type_visa" class="form-check-label">Visa</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" id="card_type_mc" name="card_type" value="Mastercard" class="form-check-input">
          <label for="card_type_mc" class="form-check-label">Mastercard</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" id="card_type_dis" name="card_type" value="Discover" class="form-check-input">
          <label for="card_type_dis" class="form-check-label">Discover</label>
        </div>
        <!-- <label for="card_type">Card Type:</label>
        <input type="text" id="card_type" name="card_type" required maxlength="50" placeholder="Card Type"> -->
        <div class="form-group">
          <label for="card_name">Name on Card:</label><br>
          <input type="text" id="card_name" name="card_name" required maxlength="255" placeholder="Name on Card">
        </div>
        <div class="form-group">
          <label for="card_number">Card Number:</label><br>
          <input type="text" id="card_number" name="card_number" minlength="16" maxlength="16" placeholder="Card Number">
        </div>
        <div class="form-group">
          <label for="card_security">Security Code:</label><br>
          <input type="number" id="card_security" name="card_security" minlength="3" maxlength="3" placeholder="Security Code">
        </div>
        <div class="form-group">
          <label for="card_exp_month">Expiration Month:</label><br>
          <input type="number" id="card_exp_month" name="card_exp_month" min="0" minlength="2" maxlength="2" placeholder="Exp. Month">
        </div>
        <div class="form-group">
          <label for="card_exp_month">Expiration Year:</label><br>
          <input type="number" id="card_exp_year" name="card_exp_year" min="0" minlength="2" maxlength="2" placeholder="Exp. Year">
        </div>
      </div>
    </div>
    <!-- Button Container -->
    <div class="button_checkout">
      <a class="btn btn-outline-primary" href="../Project01/cart.php">Return to Cart</a>
      <button class="btn btn-outline-primary" type="submit" name="submitChecktout">Confirm Purchase</button>
    </div>
  </form>


  <!-- Fix this -->
  <!-- Make Session Variables for Payment Info -->
  <?php
  if (isset($_POST["first_name"])) {
    $_SESSION["first_Name"] = $_POST["first_name"];
  }
  if (isset($_POST["last_name"])) {
    $_SESSION["last_name"] = $_POST["last_name"];
  }
  if (isset($_POST["email_input"])) {
    $_SESSION["email_input"] = $_POST["email_input"];
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