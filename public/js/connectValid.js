



$(document).ready(function () {
    $(".btn-connect").click(function () {
      valid = true;
  
      var idEmpty = "";
      var passEmpty = "";


      // ID validation
      if ($("#logAdmin").val() == "") {
        valid = false;
        idEmpty = "Identifiant vide ou incorrect.";
        $("#IdConnectEmpty").html(idEmpty);
      } else {
        $("#IdConnectEmpty").hide();
      }

  
    
      // Password validation
      if ($("#passAdmin").val() == "") {
        valid = false;
        passEmpty = "Mot de passe vide ou incorrect.";
        $("#passConnectEmpty").html(passEmpty);
      } else {
        $("#passConnectEmpty").hide();
      }

  
      return valid;
    });
  });
  
  

