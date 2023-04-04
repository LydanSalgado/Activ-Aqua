$(document).ready(function () {
    $(".activityList li").click(function () {
      var texte = $(this).children("p");
      $(".activityList li p").slideUp();
      if (texte.is(":hidden")) {
        texte.slideDown(900);
      }
    });			
			});
