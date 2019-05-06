var logIn = $("#login");
var signUp = $("#signup");
var menu = $("#menu ul");

$("#log").on("click", function(e) {

  e.preventDefault();

  //Set active link
  $(this).addClass("active a");
  $("#sign").removeClass("active a");

  //Set animation
  logIn.toggleClass("active");
  signUp.toggleClass("active");
  menu.toggleClass("nextBox");
});

$("#sign").on("click", function(e) {

  e.preventDefault();
  //Set active link
  $(this).addClass("active a");
  $("#log").removeClass("active a");

  //Set animation
  signUp.toggleClass("active");
  logIn.toggleClass("active");
  menu.toggleClass("nextBox");
});