<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="homepage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="homepage.js"></script>
  <title>CSE 341: Lagazo'sHomepage</title>
</head>

<body>
  <h1>Welcome to Ivanro's Homepage!</h1>
  <?php include('navbar.php'); ?>
  <img src="familyPhoto.JPG" alt="Ivanro's Family Photo" class="image-class">
  <div class="intro">
    <h2>To Whom It May Concern</h2>
    <p>My name is Ivanro Lagazo and I am a Software Engineer.
      I currently live in Logan, UT with my wife, Josie, and my daughter, Aloria.
      I am a Web Quality Assurance Technician for ICON Health & Fitness. We specialize in
      the creation of affordable and innovatiove excercise equipment.
      I am excited to learn more about Backend Development and all its accompanying programming langauges/technologies.
      <br><span class="intro-text">Overall, it is nice to meet you whomever you are!</span>
    </p>
  </div>
  <div class="interest">
    <h3 class="interest-title">My Interest</h3>
    <p class="interest-text">One of my many interests is Star Wars. Star Wars is a popular franchise that is currently owned by Disney.
      Basically, if you mix the wild wild west genre with science fiction, BOOM, you get the Star Wars Universe!</p>
    <div class="button-class">
      <button id="hsButton">Enter Hyperspace?</button>
      <button id="hsExitButton">Exit Hyperspace?</button>
    </div>
  </div>
  <footer>
    <p>Disclaimer: The Star Wars animation was pulled from Google and copyrights belong to it's respective owner.<br><br>Site Links:</p>
    <div class="footer-links">
      <a href="../Week02/homepage.php">Home</a>
      <a href="https://www.linkedin.com/in/ivanro-lagazo/">LinkedIn</a>
      <a href="https://github.com/ilagazo">GitHub</a>
      <a href="../Week02/assignments.php">CSE 341 Assignments</a>
    </div>
  </footer>
</body>

</html>