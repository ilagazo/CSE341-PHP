<?php
// require "dbConnect.php";
include "../Project01/dbConnect.php";
$db = get_db();
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
  <title>JMSR:Employee Portal Dashboard</title>
</head>

<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <h1><a href="../Project01/homepage.php">Josie's Mountain Spa Retreat</a></h1>
  <?php include('navbar.php'); ?>
  <div class="heroImg">
    <img src="hero_empDashboard.jpg" alt="Josie's Mountain Spa Retreat Pool">
  </div>
  <h2>Employee Dashboard:</h2>
  <!-- <div class="view_order_container">
  
  </div> -->
  <?php
    $statement = $db->query('SELECT order_id, customer_id, payment_id, product_id FROM customer_order');
    $statement->execute();

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $order_id = $row['order_id'];
      $customer_id = $row['customer_id'];
      $payment_id = $row['payment_id'];
      $product_id = $row['product_id'];

      echo "<p>$order_id, $customer_id, $payment_id, $product_id</p>";
    }
    ?>

 <?php include('footer.php'); ?>
</body>

</html>