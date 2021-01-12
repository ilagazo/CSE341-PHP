function clickAlert() {
    alert("Hey, you clicked the button!");
}

function changeColor() {
    var textbox_id = "colorInput";
	var textbox = document.getElementById(textbox_id);

	var div_id = "div1";
	var div = document.getElementById(div_id);

    var color = textbox.value;
   div.style.backgroundColor = color;
}

// Changes visibility using jQuery
$(document).ready(function(){
    $("#hideButton").click(function(){
      $("#div3").fadeOut();
      $("#div3").fadeOut("slow");
      $("#div3").fadeOut(3000);
    });
  });
$(document).ready(function(){
    $("#hideButton").click(function(){
      $("#div3").fadeIn();
      $("#div3").fadeIn("slow");
      $("#div3").fadeIn(3000);
    });
  });

  // Changes color using jQuery
  $(document).ready(function(){
    $("#colorButton").click(function(){
      $("#div1").css("background-color", $("#colorInput").val());
    });
  });