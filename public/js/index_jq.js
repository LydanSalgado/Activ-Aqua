$(document).ready(function () {
  $(".sos").click(function () {
    $(".sos_com1").fadeIn();
  });

  $(".answer_yes").click(function () {
    $(".sos_com2").fadeIn();
    $(".sos_com1").fadeOut();
  });

  $(".answer_no").click(function () {
    $(".sos_com1").fadeOut();
  });

  $(".close").click(function (){
    $(".sos_com2").fadeOut();
  })
});


