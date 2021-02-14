<?php
// Initialize and Declare PHP variables from Form
 // NOTE: Will be switching to $_POST instead of Session
$id = $_POST['submit'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
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
    echo $id;
    // FirstL Prepare Query Statements
    // $queryCustomer = "UPDATE customer SET first_name='{$first_name}', last_name='{$last_name}', email='{$email}', phone_number='{$phone}' WHERE customer_id='{$id}'";

    // NOTE: Need to Add state to DB
    // $queryAddress = "";

    // $queryPayment = "";

    // // TASK: ADD Product Insert. More complicated then I thought

    // $query = 'INSERT INTO customer_order(customer_id, payment_id, product_id) 
    // VALUES ((SELECT customer_id from customer), (SELECT payment_id from payment), (SELECT product_id from product))';

    // // Prepare each query and execute
    // $statement1 = $db->prepare($queryAddress);
    // $statement1->execute();

    // $statement2 = $db->prepare($queryCustomer);
    // $statement2->execute();

    // $statement3 = $db->prepare($queryPayment);
    // $statement3->execute();
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// Redirect to Confirmation Page
header("Location: ../Project01/editOrder.php");
die();

?>