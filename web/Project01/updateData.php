<?php
// Decides whether to delete or update
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['change'])){
    updateOrder();
}
elseif ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['delete'])) {
    deleteOrder();
}
elseif($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['employeeData'])) {
    updateEmployee();
}

// Updates the order
function updateOrder() {
try {
    // Initialize and Declare PHP variables from Form
    $cust_id = $_POST['cust_id'];
    $pay_id = $_POST['pay_id'];
    $prod_id = $_POST['prod_id'];
    $add_id = $_POST['add_id'];
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
    $emp_id = $_POST['transfer'];

    // Connect to DB
    include "../Project01/dbConnect.php";
    $db = get_db();

    // First Prepare Query Statements
    $queryCustomer = "UPDATE customer SET first_name='{$first_name}', last_name='{$last_name}', email='{$email}', phone_number='{$phone}' 
    WHERE customer_id='{$cust_id}'";

    $queryAddress = "UPDATE address SET address_st='{$address_st}', city='{$city}', state='{$adress_state}', postal_code='{$zipCode}' 
    WHERE address_id='{$add_id}'";

    $queryPayment = "UPDATE payment SET payment_type='{$cardType}', card_number='{$card_number}', security_code='{$card_security}', exp_month='{$exp_month}', exp_year='{$exp_year}', name_on_card='{$card_name}'
    WHERE payment_id='{$pay_id}'";

    // TASK: ADD Product Update

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
	echo "Error with DB. Data did not update!";
	die();
}

// Redirect to Confirmation Page
header("Location: ../Project01/employeePortalDashboard.php?employee_id=".$emp_id);
die();

}

// Deletes the order
function deleteOrder() {
    // Initialize and Declare PHP variables from Form
    $id = $_POST['id'];
    $cust_id = $_POST['cust_id'];
    $pay_id = $_POST['pay_id'];
    $prod_id = $_POST['prod_id'];
    $add_id = $_POST['add_id'];
    $emp_id = $_POST['transfer'];

    // Connect to DB
    include "../Project01/dbConnect.php";
    $db = get_db();

    try {
        // First Prepare Query Statements
        $queryCustomerOrder = "DELETE FROM customer_order WHERE order_id='{$id}'";
        $queryCustomer = "DELETE FROM customer WHERE customer_id='{$cust_id}'";
        $queryPayment = "DELETE FROM payment WHERE payment_id='{$pay_id}'";
        $queryAddress = "DELETE FROM address WHERE address_id='{$add_id}'";
        $queryProduct = "DELETE FROM product WHERE product_id='{$prod_id}'";


        $statement1 = $db->prepare($queryCustomerOrder);
        $statement1->execute();

        $statement2 = $db->prepare($queryCustomer);
        $statement2->execute();

        $statement3 = $db->prepare($queryPayment);
        $statement3->execute();

        $statement4 = $db->prepare($queryAddress);
        $statement4->execute();

        $statement5 = $db->prepare($queryProduct);
        $statement5->execute();
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Data did not delete!";
        die();
    }

    // Redirect to Confirmation Page
    header("Location: ../Project01/employeePortalDashboard.php?employee_id=".$emp_id);
    die();
    }

    // Updates Employee
function updateEmployee() {
    try {
        // Initialize and Declare PHP variables from Form
        $emp_fn = $_POST['emp_fn'];
        $emp_ln = $_POST['emp_ln'];
        $emp_phone = $_POST['emp_phone'];
        $emp_email = $_POST['emp_email'];
        $emp_username = $_POST['emp_username'];
        $emp_pw = $_POST['emp_pw'];
        $emp_id = $_POST['transfer_id'];

        // Connect to DB
        include "../Project01/dbConnect.php";
        $db = get_db();
    
        // First Prepare Query Statements
        $queryEmployee = "UPDATE employee SET username='{$emp_username}', employee_password='{$emp_pw}', email='{$emp_email}', 
        first_name='{$emp_fn}', last_name='{$emp_ln}', phone_number='{$emp_phone}'
        WHERE employee_id='{$emp_id}'";

        // Prepare each query and execute
        $statement = $db->prepare($queryEmployee);
        $statement->execute();
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Employee data did not update!";
        die();
    }
    
    // Redirect to Confirmation Page
    header("Location: ../Project01/employeePortalDashboard.php?employee_id=".$emp_id);
    die();
    
    }
?>