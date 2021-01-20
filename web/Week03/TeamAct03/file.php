<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <title>03 Teach: Team Activity</title>
  </head>
  <body>
    <h1>03 Teach: Team Activity</h1>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>

    <form action="team03.php" method="POST">
      <!-- Name & Email -->
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name"/><br />
      <label for="email">Email:</label>
      <input type="text" id="email" name="email"/><br />

      <!-- Major Radio Buttons -->
      <div>
        <p>Major:</p>
        <!-- <input type="radio" id="CS" name="major[]" value="Computer Science"/>
        <label for="CS">Computer Science</label><br />
        <input type="radio" id="WDD" name="major[]" value="Web Design and Development"/>
        <label for="WDD">Web Design and Development</label><br />
        <input type="radio" id="CIT" name="major[]" value="Computer Information Technology"/>
        <label for="CIT">Computer Information Technology</label><br />
        <input type="radio" id="CE" name="major[]" value="Computer Engineering"/>
        <label for="CE">Computer Engineering</label> -->
        <?php 
          $majors = array("Computer Science", "Web Design Development","Computer Information Technology", "Computer Engineering");
          $classID = array("CS", "WDD", "CIT", "CE");
          // $classID = array_values($classID);
           $i = 0;
          foreach($majors as $major) {
            echo "<input type=\"radio\"  name=". $majors . "\" value=" . $major . "\" id=" . $classID[$i] . "\" />";
            echo "<label for=\"" . $classID[$i] . "\"/>" . $major . "</label><br>";
            $i++;
          }
        ?>
      </div>

      <!-- Comments -->
      <label for="comments">Comments:</label><br />
      <textarea id="comments" name="comments"></textarea><br />

      <!-- Checklist box -->
      <div>
        <p>What Continents have you visted?</p>
        <input type="checkbox" id="NA" name="location[]" value="North America"/>
        <label for="NA">North America</label><br />
        <input type="checkbox" id="SA" name="location[]" value="South America"/>
        <label for="SA">South America</label><br />
        <input type="checkbox" id="EU" name="location[]" value="Europe"/>
        <label for="EU">Europe</label><br />
        <input type="checkbox" id="AS" name="location[]" value="Asia"/>
        <label for="AS">Asia</label><br />
        <input type="checkbox" id="AU" name="location[]" value="Australia"/>
        <label for="AU">Australia</label><br />
        <input type="checkbox" id="AFR" name="location[]" value="Africa"/>
        <label for="AFR">Africa</label><br />
        <input type="checkbox" id="ANT" name="location[]" value="Antartica"/>
        <label for="ANT">Antartica</label>
      </div>

      <!-- Submit Button-->
      <input type="submit">
    </form>
  </body>
</html>
