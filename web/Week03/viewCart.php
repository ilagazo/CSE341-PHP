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
  <title>Josie's Photography: Cart Summary</title>
</head>

<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <header>
    <h1>Josie's Photography</h1>
  </header>
  <div class="img_container">
    <img src="centerImage2.jpg" alt="Photography Center 2 Image">
  </div>
  <h2>Please Review Your Order</h2>

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
  <div class="button_container">
    <form action="browseItems.php">
      <button type="submit">Continue Shopping</button>
    </form>
    <form action="checkout.php">
      <button type="submit">Proceed to Checkout</button>
    </form>
  </div>
  <?php include('footer.php'); ?>
</body>

</html>