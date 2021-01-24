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
  <title>Checkout Page</title>
</head>

<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <h1>Checkout</h1>
  <div class="customer-info">
    <form action="confirmationPage.php" method="POST">
      <label for="first_name">First Name:</label>
      <input type="text" id="first_name" name="first_name"><br>
      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name"><br>
      <label for="address">Street Address:</label>
      <input type="text" id="address" name="address"><br>
      <label for="city">City:</label>
      <input type="text" id="city" name="city"><br>
      <label for="state">State:</label>
      <input type="text" id="state" name="state"><br>
      <label for="zipCode">Zipcode:</label>
      <input type="text" id="zipCode" name="zipCode"><br>
      <!-- Return Button -->
      <a href="viewCart.php">Return to Cart</a>
      <!-- Submit Button -->
      <button type="submit" name="submitChecktout">Confirm Purchase</button>
    </form>
  </div>
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