// This JQUERY function will activate hyperspace
$(document).ready(function () {
  $("#hsButton").click(function () {
    $(".interest-title").fadeOut();
    $(".interest-title").fadeOut("slow");
    $(".interest-title").fadeOut(3000);
    $(".interest-text").fadeOut();
    $(".interest-text").fadeOut("slow");
    $(".interest-text").fadeOut(3000);
    $(".interest").css("background-image", "url('starWars.gif')");
  });
});

// This JQUERY function will exit hyperspace
$(document).ready(function () {
  $("#hsExitButton").click(function () {
    $(".interest-title").fadeIn();
    $(".interest-title").fadeIn("slow");
    $(".interest-title").fadeIn(3000);
    $(".interest-text").fadeIn();
    $(".interest-text").fadeIn("slow");
    $(".interest-text").fadeIn(5000);
    $(".interest").css("background-image", "none");
  });
});
