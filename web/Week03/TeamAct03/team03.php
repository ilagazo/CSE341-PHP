<?php
$email = $_POST["email"];
$_POST['key'] = $major;
?>

<!DOCTYPE html>
<html>
<body>
<h1>User Entered:</h1>
<p>Full Name: <?php echo $_POST["name"]; ?><p>
<p>Email Address: <a href="mailto:<?=$email ?>"><?=$email ?></a></p>
<p>Major: <?php echo $_POST['key']; ?></p>

<p>Continents Visited:</p>
<?php
$checkboxes = isset($_POST['location']) ? $_POST['location'] : array();
foreach($checkboxes as $value) {
    echo $value; 
    echo "<br>";
}
?>
<p>Comments: <?php echo $_POST["comments"]; ?></p>
</body>
</html>