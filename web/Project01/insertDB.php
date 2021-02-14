<?php
include "../Project01/dbConnect.php";
$db = get_db();

// try {
//     $queryCustomer = 'INSERT INTO customer(first_name, last_name, email, phone_number, address_id) VALUES ()'

//   }
// catch (Exception $ex)
// {
// 	// Please be aware that you don't want to output the Exception message in
// 	// a production environment
// 	echo "Error with DB. Details: $ex";
// 	die();
// }

// Redirect to Confirmation Page
header("Location: ../Project01/confirmationPage.php");
die();

?>
