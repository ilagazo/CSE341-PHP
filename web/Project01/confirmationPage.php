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
  <title>JMSR: Confirmation Page</title>
</head>

<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <h1><a href="../Project01/homepage.php">Josie's Mountain Spa Retreat</a></h1>
  <?php include('navbar.php'); ?>
  <div class="heroImg">
    <img src="../Project01/Images/hero_confirmation.jpg" alt="Josie's Mountain Spa Retreat Fireplace">
  </div>
  <div class="text-section">
    <h2>Confirmation Page</h2>
    <p>Thank you for your order <?php echo $_SESSION["first_name"]; ?>!<br> A member of our team will contact you shortly to schedule your visit.
      We are excited to serve you!</p>
  </div>

  <!-- Products Ordered-->
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

  <!-- Display Customer Info -->
  <div class="display_customer_info">
    <?php
    echo "<div class=\"display_container\">First Name: " . $_SESSION["first_name"] . "<br>";
    echo "Last Name: " . $_SESSION["last_name"] . "</div>";
    echo "<div class=\"display_container\">Email: " . $_SESSION["email"] . "<br>";
    echo "Phone Number: " . $_SESSION["phone"] . "</div>";
    echo "<div class=\"display_container\">Address: " . $_SESSION["address"] . "<br>";
    echo "City: " . $_SESSION["city"] . "</div>";
    echo "<div class=\"display_container\">State: " . $_SESSION["state"] . "<br>";
    echo "Zipcode: " . $_SESSION["zipCode"] . "</div>";
    ?>
  </div>
</body>

</html>