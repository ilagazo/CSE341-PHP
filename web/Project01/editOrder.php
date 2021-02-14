<?php
include "../Project01/dbConnect.php";
$db = get_db();

$order_id = $_GET['order_id'];
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
    <h2>More Information:</h2>

    <?php
        echo $order_id;
    ?>
</body>

</html>