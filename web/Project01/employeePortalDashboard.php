<?php
include "../Project01/dbConnect.php";
$db = get_db();

$emp_id = $_GET['emp_id'];
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
    <img src="../Project01/Images/hero_empDashboard.jpg" alt="Josie's Mountain Spa Retreat Pool">
  </div>
  <h2>Employee Portal Dashboard:</h2>
  <?php
    echo $emp_id;
    $employee_statement = $db->query("SELECT employee.first_name, employee.last_name, employee.employee_id 
    FROM employee WHERE employee.employee_id = '{$emp_id}'");
    $employee_statement->execute();
    echo "here";
    $empFromDB = $employee_statement->fetch(PDO::FETCH_ASSOC);
    echo "here2";
    $emp_firstName = $empFromDB['first_name'];
    $emp_lastName = $empFromDB['last_name'];

    echo "<h3>Welcome\" . $emp_firstName . $emp_lastName</h3>";
  ?>
  <div class="order_container">
    <?php
    // Retrieve data from each column and table
    $customerOrder_statement = $db->query('SELECT customer_order.order_id, customer.first_name, customer.last_name, customer.email, customer.phone_number, product.product_name, product.price, product.quantity
     FROM customer_order 
     INNER JOIN customer ON customer_order.customer_id = customer.customer_id
     INNER JOIN product ON customer_order.product_id = product.product_id ');
    $customerOrder_statement->execute();

    // Retrieve and display data per row
    echo "<table><tr><th>Order Number:</th><th>Customer's First Name</th><th>Last Name</th><th>Email</th><th>Phone #</th><th>Product</th><th>Price</th><th>Quantity Ordered</th><th>Total:</th><th>Options:</th></tr>";
    while ($customerInfo_row = $customerOrder_statement->fetch(PDO::FETCH_ASSOC)) {
      $order_id = $customerInfo_row['order_id'];
      $customer_first_name = $customerInfo_row['first_name'];
      $customer_last_name = $customerInfo_row['last_name'];
      $customer_email = $customerInfo_row['email'];
      $customer_phone_number = $customerInfo_row['phone_number'];
      $product_name = $customerInfo_row['product_name'];
      $product_price = $customerInfo_row['price'];
      $product_quantity = $customerInfo_row['quantity'];
      $total = $product_price * $product_quantity;

      echo "<tr><td>$order_id</td><td>$customer_first_name</td><td>$customer_last_name</td><td>$customer_email</td><td>$customer_phone_number</td><td>$product_name</td><td>$product_price</td><td>$product_quantity</td>
      <td>$total</td><td><a href=\"../Project01/editOrder.php?order_id=$order_id\">More Info</a></td></tr>";
    }
    echo "</table>";
    ?>
  </div>
  <?php include('footer.php'); ?>
</body>

</html>