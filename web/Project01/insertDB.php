<?php
// Initialize and Declare PHP variables from Form
 // NOTE: Will be switching to $_POST instead of Session
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = htmlspecialchars($_POST['email']);
$phone = $_POST['phone'];
$address_st = $_POST['address'];
$adress_state = $_POST['state'];
$city = $_POST['city'];
$zipCode = $_POST['zipCode'];
$cardType = $_POST['card_type'];
$card_name = $_POST['card_name'];
$card_number = $_POST['card_number'];
$card_security = $_POST['card_security'];
$exp_month = $_POST['card_exp_month'];
$exp_year = $_POST['card_exp_year'];

// Connect to DB
include "../Project01/dbConnect.php";
$db = get_db();

try {
    // First Prepare Query Statements
    $queryCustomer = 'INSERT INTO customer(first_name, last_name, email, phone_number, address_id) 
    VALUES($first_name, $last_name, $email, $phone, (SELECT address_id FROM address))';

    $queryAddress = 'INSERT INTO address(address_st, city, state, postal_code) 
    VALUES($address_st, $city, $address_state, $zipCode)';

    $queryPayment = 'INSERT INTO payment(payment_type, card_number, security_code, exp_month, exp_year, name_on_card)
    VALUES($cardType, $card_number, $card_security, $exp_month, $exp_year, $card_name)';

    // TASK: ADD Product Insert. More complicated then I thought

    // Task: Add address ID
    $query = 'INSERT INTO customer_order(customer_id, payment_id, product_id) 
    VALUES ((SELECT customer_id from customer), (SELECT payment_id from payment), (SELECT product_id from product))';

    // Prepare each query and execute
    $statement1 = $db->prepare($queryAddress);
    $statement1->execute();

    $statement2 = $db->prepare($queryCustomer);
    $statement2->execute();

    $statement3 = $db->prepare($queryPayment);
    $statement3->execute();
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
