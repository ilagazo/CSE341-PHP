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
  <title>Cart Summary</title>
</head>

<body>
  <h1>Cart Summary</h1>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <h2>Please Verify Your Order</h2>
  <!-- Products -->
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
  <!-- Links to Other PHP Pages -->
  <a href="browseItems.php">Continue Shopping</a>
  <a href="checkout.php">Proceed to Checkout</a>
</body>

</html>