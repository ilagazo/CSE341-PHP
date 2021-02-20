<?php
session_start();

if($_SESSION["prod1"] >= 1 || $_SESSION["prod2"] >= 1 || $_SESSION["prod3"] >= 1 || $_SESSION["prod4"] >= 1 || $_SESSION["prod5"] >= 1) {
    // Redirect to Confirmation Page
header("Location: ../Project01/checkout.php");
die();
}
else {
// Redirect to Confirmation Page
$error_msg = "Cart is Empty!";
header("Location: ../Project01/cart.php?error=$error_msg");
die();
}
?>
