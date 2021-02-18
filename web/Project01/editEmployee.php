<?php
// Connect to db
include "../Project01/dbConnect.php";
$db = get_db();

$emp_id = $_GET['emp_id'];
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
  <title>JMSR:Employee Portal Login</title>
</head>

<body>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <h1><a href="../Project01/homepage.php">Josie's Mountain Spa Retreat</a></h1>
  <?php include('navbar.php'); ?>
  <div class="heroImg">
    <img src="../Project01/Images/hero_empInfo.jpg" alt="Josie's Mountain Spa Happy Employee #2">
  </div>
  <h2>Employee Information:</h2>
 
  <!-- Display Employee Data -->
<?php
$employee_statement = $db->query("SELECT employee.first_name, employee.last_name, employee.occupation, employee.phone_number, employee.email, employee.employee_password, employee.username
FROM employee WHERE employee.employee_id = '{$emp_id}'");
$employee_statement->execute();

echo "<div class=\"order_container\"><table><tr><th>Name</th><th>Occupation</th></tr>";
while ($row = $employee_statement->fetch(PDO::FETCH_ASSOC)) {
    $emp_firstName = $row['first_name'];
    $emp_lastName = $row['last_name'];
    $emp_occup = $row['occupation'];
    $emp_phone = $row['phone_number'];
    $emp_email = $row['email'];
    $emp_pw = $row['employee_password'];
    $emp_un = $row['username'];

    echo "<tr><td>$emp_firstName $emp_lastName</td><td>$emp_occup</td></tr></table></div>";
    echo "<div class=\"order_container\"><table><tr><th>Phone</th><th>Email</th></tr>";
    echo "<tr><td>$emp_phone</td><td>$emp_email</td></tr></table></div>";
    echo "<div class=\"order_container\"><table><tr><th>Username</th><th>Password</th></tr>";
    echo "<tr><td>$emp_un</td><td>$emp_pw</td></tr></table></div>";
}
?>

 <!-- Change Data Form -->
 <h4>Edit Employee Data Form:</h4>
    <div class="billing_info">
        <form action="../Project01/updateData.php" method="POST">
            <div class="billing_info_seperate">
                <label for="emp_fn">First Name:</label>
                <input type="text" id="emp_fn" name="emp_fn" required maxlength="50">
                <label for="emp_ln">Last Name:</label>
                <input type="text" id="emp_ln" name="emp_ln" required maxlength="50">
                <label for="emp_phone">Phone:</label>
                <input type="text" id="emp_phone" name="emp_phone" required maxlength="11">
                <label for="emp_email">Email:</label>
                <input type="text" id="emp_email" name="emp_email" required maxlength="50">
                <label for="emp_username">Username:</label>
                <input type="text" id="emp_username" name="emp_username" required maxlength="50">
                <label for="emp_pw">Password:</label>
                <input type="text" id="emp_pw" name="emp_pw" required maxlength="50">
                <input type="hidden" id="transfer_id" name="transfer_id" value="<?= $emp_id ?>"/>
            </div>

            <!-- Button Container -->
            <div class="button_checkout">
                <button type="submit" name="change" value="change_employee">Confirm Changes</button>
            </div>
        </form>
    </div>

  <?php include('footer.php'); ?>
</body>

</html>