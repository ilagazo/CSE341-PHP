<?php
include "../Project01/dbConnect.php";
$db = get_db();

$id = $_GET['order_id'];
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
        <img src="../Project01/Images/hero_editOrders.jpg" alt="Josie's Mountain Spa Retreat Edit Orders">
    </div>
    <h2>Customer Order Information:</h2>

    <?php
    // Retrieve data from each column and table
    $statement = $db->query('SELECT customer_order.order_id, customer.first_name, customer.last_name, customer.email, customer.phone_number, 
    product.product_name, product.price, product.quantity,
    address.address_st, address.city, address.postal_code,
    payment.payment_type, payment.card_number, payment.name_on_card
     FROM customer_order 
     INNER JOIN customer ON customer_order.customer_id = customer.customer_id
     INNER JOIN payment ON customer_order.payment_id = payment.payment_id
     INNER JOIN address ON customer.address_id = address.address_id
     INNER JOIN product ON customer_order.product_id = product.product_id 
     WHERE customer_order.order_id = $id');
    $statement->execute();

    echo "<table><tr><th>Order Number:</th><th>Customer's First Name</th><th>Last Name</th><th>Email</th><th>Phone #</th>
    <th>Product</th><th>Price</th><th>Quantity Ordered</th><th>Total:</th>
    <th>Address:</th>
    <th>Payment Type:</th><th>Card Number:</th><th>Name On Card:</th></tr>";
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $order_id = $row['order_id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $phone = $row['phone_number'];
        $prod_name = $row['product_name'];
        $price = $row['price'];
        $prod_qty = $row['quantity'];
        $total = $price * $prod_qty;
        $add_st = $row['address_st'];
        $city = $row['city'];
        $postal_code = $row['postal_code'];
        $pay_type = $row['payment_type'];
        $pay_num = $row['card_number'];
        $pay_name = $row['name_on_card'];

        echo "<tr><td>$order_id</td><td>$first_name</td><td>$last_name</td><td>$email</td><td>$phone</td>
        <td>$prod_name</td><td>$price</td><td>$prod_qty</td><td>$total</td>
        <td>$add_st, $city, $postal_code</td>
        <td>$pay_type</td><td>$pay_num</td><td>$pay_name</td></tr>";
    }
    echo "</table>";

    ?>
    <?php include('footer.php'); ?>
</body>

</html>