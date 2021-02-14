<?php
// Initialize and Declare PHP variables from Form
$id = $_POST['id'];
$cust_id = $_POST['cust_id'];
$pay_id = $_POST['pay_id'];
$prod_id = $_POST['prod_id'];
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
    // First Prepare Query Statements
    $queryCustomer = "UPDATE customer SET first_name='{$first_name}', last_name='{$last_name}', email='{$email}', phone_number='{$phone}' 
    WHERE customer_id='{$cust_id}'";

    // TASL: Need to update address
    // $queryAddress = "UPDATE address SET address_st='{$address_st}', city='{$city}', state='{$adress_state}, 'postal_code='{$zipCode}' 
    // WHERE address_id='{}'";

    $queryPayment = "UPDATE payment SET payment_type='{$cardType}', card_number='{$card_number}', security_code='{$card_security}', exp_month='{$exp_month}', exp_year='{$exp_year}', name_on_card='{$card_name}'
    WHERE payment_id='{$pay_id}'";

    // TASK: ADD Product Update

    // Prepare each query and execute
    // $statement1 = $db->prepare($queryAddress);
    // $statement1->execute();

    $statement2 = $db->prepare($queryCustomer);
    $statement2->execute();

    $statement3 = $db->prepare($queryPayment);
    $statement3->execute();
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// Redirect to Confirmation Page
header("Location: ../Project01/employeePortalDashboard.php");
die();

?>