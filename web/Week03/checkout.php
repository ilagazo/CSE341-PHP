<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="shoppingCart.css">
  <title>Josie's Photography: Checkout Page</title>
</head>

<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <header>
    <h1>Josie's Photography</h1>
  </header>
  <div class="img_container">
    <img src="centerImage3.jpg" alt="Photography Center 3 Image">
  </div>

  <!-- Products -->
  <h2>Order Summary:</h2>
  <div class="product_container">
    <div class="product">
      <p>Price: $100</p>
      <img src="miniSession.jpg" alt="Mini Photography Session">
      <p>Mini Session<br>Quantity Ordered: <?php echo $_SESSION["item1"]; ?></p>
    </div>
    <div class="product">
      <p>Price: $200</p>
      <img src="hourSession.jpg" alt="Hour Photography Session">
      <p>Full Session<br>Quantity Ordered: <?php echo $_SESSION["item2"]; ?></p>
    </div>
    <div class="product">
      <p>Price: $265</p>
      <img src="2HourSession.jpg" alt="2 Hour Photography Session">
      <p>Extended Session<br>Quantity Ordered: <?php echo $_SESSION["item3"]; ?></p>
    </div>
  </div>

  <!-- Customer Input -->
  <h3>Please Fill Out Your Information</h3>
  <div class="customer-info">
    <form action="confirmationPage.php" method="POST">
      <label for="first_name">First Name:</label>
      <input type="text" id="first_name" name="first_name">
      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name"><br>
      <label for="address">Street Address:</label>
      <input type="text" id="address" name="address">
      <label for="city">City:</label>
      <input type="text" id="city" name="city"><br>
      <label for="state">State:</label>
      <input type="text" id="state" name="state">
      <label for="zipCode">Zipcode:</label>
      <input type="text" id="zipCode" name="zipCode"><br>
      <!-- Submit Button -->
      <button type="submit" name="submitChecktout">Confirm Purchase</button>
    </form>
    <!-- Return Button -->
    <form action="viewCart.php">
      <button type="submit">Return To Cart</button>
    </form>
  </div>
  <?php include('footer.php'); ?>
</body>

</html>

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