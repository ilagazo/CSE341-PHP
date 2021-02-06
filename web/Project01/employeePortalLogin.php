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
    <img src="hero_empLogin.jpg" alt="Josie's Mountain Spa Retreat Pool">
  </div>
  <h2>Employee Login:</h2>
  <div class="emp_login">
    <form action="employeePortalDashboard.php" method="POST">
      <label for="emp_username">Username:</label>
      <input type="text" name="emp_username" id="emp_username"><br><br>
      <label for="emp_password">Password:</label>
      <input type="text" name="emp_password" id="emp_password"><br><br>
      <!-- Submit Button -->
      <button type="submit" name="submit">Login</button>
    </form>
  </div>

  <div class="text-section">
    <h3>Not An Employee?</h3>
    <p>Call Customer Services and ask about current job openings at Josie's Mountain Spa Retreat or send your resume to
      our Email. We are excited for your interest in joining this amazing family. We do our best to hire the best, because we
      know that only the best can bring the greatest satisfaction to our customers.<br><br><b>JOIN US TODAY!</b>
    </p>
  </div>

  <?php include('footer.php'); ?>
</body>

</html>