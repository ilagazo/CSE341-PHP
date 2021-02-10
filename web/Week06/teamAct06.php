<?php
include "../Week06/dbConnect.php";
$db = get_db();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Team Activity 06</title>
</head>

<body>
    <h1>GIVE ME DATA!</h1>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Form to get user input for scripture and topic -->
    <form action="" method="POST">
        <label for="book">Book:</label>
        <input type="text" id="book" name="book"><br><br>

        <label for="chapter">Chapter:</label>
        <input type="text" id="chapter" name="chapter"><br><br>

        <label for="verse">Verse:</label>
        <input type="text" id="verse" name="verse"><br><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="2" cols="50"></textarea><br><br>

        <!-- PHP to show the topic checkboxes -->
        <?php
        $statement = $db->prepare('SELECT id, topic_name FROM topic');
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $topic_name = $row['topic_name'];

            echo "<label for='topic$id'>$topic_name</label>
                <input type='checkbox' name='topic' id='topic' value='$id'><br><br>";
        }

        ?>

        <button type="submit">Submit!</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        extract($_POST);
        if (!empty($_POST['topic'])) {
            foreach ($_POST['topic'] as $topicIDs) {
                echo $topicIDs;
            }
        }
    }
    ?>

</body>

</html>