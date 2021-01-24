<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="shoppingCart.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Josie's Photography: Product List</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <header>
        <h1>Josie's Photography</h1>
    </header>
    <div class="img_container">
        <img src="centerImage.jpg" alt="Photography Center 1 Image">
    </div>

    <h2>Services Offered:</h2>
    <form action="viewCart.php" method="POST">
        <!-- Products -->
        <div class="product_container">
            <div class="product">
                <p>Price: $100</p>
                <img src="miniSession.jpg" alt="Mini Photography Session">
                <input type="number" id="prod1" name="item1" min="0" max="1" value="0">
                <br><br><label for="prod1">Mini Session (30 mins)<br></label>

            </div>
            <div class="product">
                <p>Price $200</p>
                <img src="hourSession.jpg" alt="Hour Photography Session">
                <input type="number" id="prod2" name="item2" min="0" max="1" value="0">
                <br><br><label for="prod2"> Full Session (1 hr)<br></label>
            </div>
            <div class="product">
                <p>Price $265</p>
                <img src="2HourSession.jpg" alt="2 Hour Photography Session">
                <input type="number" id="prod3" name="item3" min="0" max="1" value="0">
                <br><br><label for="prod3"> Extended Session (2 hr)<br></label>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" name="submit">Proceed to Cart</button>
    </form>
    <?php include('footer.php'); ?>
</body>

</html>

<!-- Check if items were sent via post -->
<?php
if (isset($_POST["item1"])) {
    $_SESSION["item1"] = $_POST["item1"];
}

if (isset($_POST["item2"])) {
    $_SESSION["item2"] = $_POST["item2"];
}

if (isset($_POST["item3"])) {
    $_SESSION["item3"] = $_POST["item3"];
}
?>