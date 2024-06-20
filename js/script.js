/*hide nav options*/ 
function ulVisibility(x) {
  if (x.matches) { // If media query matches
    $("#ul-nav").hide();
  } else {
    $("#ul-nav").show();
    $(".nav-left").css("visibility", "visible");
    $("nav").css("background", "rgba(0,0,0,0.6)");
  }
}

var x = window.matchMedia("(max-width: 1280px)")
ulVisibility(x) // Call listener function at run time
x.addListener(ulVisibility) // Attach listener function on state changes


// tablette or phone menu manager

$("#check").change(function() {
  if(this.checked) { 
    $("#ul-nav").fadeIn(200);
    $(".nav-left").css("visibility", "hidden"); /* hiding logo */
    $("nav").css("background", "rgba(0,0,0,0.0)"); /* hiding filter */

  } else {
    $("#ul-nav").fadeOut(200);
    $(".nav-left").css("visibility", "visible");
    $("nav").css("background", "rgba(0,0,0,0.6)");
  }
});


$("#agreement-checkbox").change(function() {
  if(this.checked) {
    $("#agreement-text").css("color", "#777777");
    $("#submit-button").css("background-color", "#78aeba");
    $("#submit-button").css("cursor", "pointer");
    $("#submit-button").css("pointer-events", "auto");

    $("#submit-button").hover(function(){
      $(this).css("background-color", "#6c9ca7");
      }, function(){
      $(this).css("background-color", "#78aeba");
    });

    $("#submit-button").click(function(){
        $(this).css("background-color", "#93bec7");
    });


  } else {
    $("#agreement-text").css("color", "#77777799");
    $("#submit-button").css("cursor", "default");
    $("#submit-button").css("background-color", "rgb(126 166 189 / 65%)");
    $("#submit-button").css("pointer-events", "none");

  }
});

