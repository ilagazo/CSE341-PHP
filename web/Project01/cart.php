<?php
session_start();

$error_msg = $_GET['error'];

// For debugging
var_dump($_SESSION);

// Use unset or decrement to remove the item from the cart
// Use action=""
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
  <title>JMSR: Cart</title>
</head>

<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <h1><a href="../Project01/homepage.php">Josie's Mountain Spa Retreat</a></h1>
  <?php include('navbar.php'); ?>
  <div class="heroImg">
    <img src="../Project01/Images/hero_cart.jpg" alt="Josie's Mountain Spa Retreat Fireplace">
  </div>
  <h2>Cart</h2>
  <div class="text-section">
    <h2>Your Satisfaction is Our Guarantee</h2>
    <p><b>Remember, all packages come with access to the pool and patio, and a complimentary meal.</b><br>
    <?php echo $error_msg; ?></p>
  </div>
  <!-- Products -->
  <div class="product_container">
    <div class="product">
      <p>Price: $100</p>
      <img src="../Project01/Images/swedishMassage.jpg" alt="Swedish Massage Package">
      <p>Swedish Massage Package<br>Quantity Ordered: <?php echo $_SESSION["prod1"]; ?></p>
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

  <!-- Button Container -->
  <div class="button_checkout">
    <a class="btn btn-outline-primary" href="../Project01/isProductThere.php">Continue Shopping</a>
    <a class="btn btn-outline-primary" href="../Project01/checkout.php">Proceed to Checkout</a>
  </div>

  <?php include('footer.php'); ?>
</body>

</html>