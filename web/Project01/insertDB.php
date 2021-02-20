<?php
session_start();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = htmlspecialchars($_POST['email_input']);
$phone = $_POST['phone'];
$address_st = $_POST['address'];
$address_state = $_POST['state'];
$city = $_POST['city'];
$zipCode = $_POST['zipCode'];
$cardType = $_POST['card_type'];
$card_name = $_POST['card_name'];
$card_number = $_POST['card_number'];
$card_security = $_POST['card_security'];
$exp_month = $_POST['card_exp_month'];
$exp_year = $_POST['card_exp_year'];

$prod1_qty = $_SESSION['prod1'];
$prod1_name = "Swedish Massage Package";
$prod1_price = 125;
$prod2_qty = $_SESSION['prod2'];
$prod2_name = "Hot Stone Massage Package";
$prod2_price = 150;
$prod3_qty = $_SESSION['prod3'];
$prod3_name = "Couples Massage Package";
$prod3_price = 175;
$prod4_qty = $_SESSION['prod4'];
$prod4_name = "Prenatal Massage Package";
$prod4_price = 125;
$prod5_qty = $_SESSION['prod5'];
$prod5_name = "Aromatherapy Massage Package";
$prod5_price = 125;

// Connect to DB
include "../Project01/dbConnect.php";
$db = get_db();

try {
    // First Prepare Query Statements
    $queryCustomer = "INSERT INTO customer(first_name, last_name, email, phone_number) 
    VALUES('{$first_name}', '{$last_name}', '{$email}', '{$phone}')";

    $queryAddress = "INSERT INTO address(address_st, city, state, postal_code) 
    VALUES('{$address_st}', '{$city}', '{$address_state}', '{$zipCode}')";

    $queryPayment = "INSERT INTO payment(payment_type, card_number, security_code, exp_month, exp_year, name_on_card)
    VALUES('{$cardType}', '{$card_number}', '{$card_security}', '{$exp_month}', '{$exp_year}', '{$card_name}')";

    // Prepare each product query statment 
    if ($prod1_qty > 0) {
        $queryProd1 = "INSERT INTO product(product_name, price, quantity)
        VALUES('{$prod1_name}', '{$prod1_price}', '{$prod1_qty}')";
    }
    if ($prod2_qty > 0) {
        $queryProd2 = "INSERT INTO product(product_name, price, quantity)
        VALUES('{$prod2_name}', '{$prod2_price}', '{$prod2_qty}')";
    }
    if ($prod3_qty > 0) {
        $queryProd3 = "INSERT INTO product(product_name, price, quantity)
        VALUES('{$prod3_name}', '{$prod3_price}', '{$prod3_qty}')";
    }
    if ($prod4_qty > 0) {
        $queryProd4 = "INSERT INTO product(product_name, price, quantity)
        VALUES('{$prod4_name}', '{$prod4_price}', '{$prod4_qty}')";
    }
    if ($prod5_qty > 0) {
        $queryProd5 = "INSERT INTO product(product_name, price, quantity)
        VALUES('{$prod5_name}', '{$prod5_price}', '{$prod5_qty}')";
    }

    $queryOrder = "INSERT INTO customer_order(customer_id, payment_id, product_id, address_id) 
    VALUES (
     (SELECT customer_id from customer WHERE customer.email = '{$email}' AND customer.phone_number = '{$phone}' AND customer.last_name = '{$last_name}'),
     (SELECT payment_id from payment WHERE payment.card_number = '{$card_number}' AND payment.security_code = '{$card_security}'), 
    --  (SELECT product_id from product),
     (SELECT address_id from address WHERE address.address_st = '{$address_st}' AND address.postal_code = '{$zipCode}')
     )";

    // Prepare each query and execute
    $statement1 = $db->prepare($queryAddress);
    $statement1->execute();

    $statement2 = $db->prepare($queryCustomer);
    $statement2->execute();

    $statement3 = $db->prepare($queryPayment);
    $statement3->execute();

    // if(!empty($queryProd1)) {
    //  $statement4 = $db->prepare($queryProd1);
    //     $statement4->execute();
    // }
    // if(!empty($queryProd2)) {
    //     $statement6 = $db->prepare($queryProd2);
    //     $statement6->execute();
    // }
    // if(!empty($queryProd3)) {
    //     $statement7 = $db->prepare($queryProd3);
    //     $statement7->execute();
    // }
    // if(!empty($queryProd4)) {
    //     $statement8 = $db->prepare($queryProd4);
    //     $statement8->execute();
    // }
    // if(!empty($queryProd5)) {
    //     $statement9 = $db->prepare($queryProd5);
    //     $statement9->execute();
    // }

    $statement5 = $db->prepare($queryOrder);
    $statement5->execute();
}
catch (Exception $ex)
{
	echo "Error inserting into DB. Details: $ex";
	die();
}

// Redirect to Confirmation Page
header("Location: ../Project01/confirmationPage.php");
die();

?>