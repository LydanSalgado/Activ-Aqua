function validateEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function validatePhone(phone) {
  var regex = /^((\+)33|0|0033)[1-9](\d{2}){4}$/;
  return regex.test(phone);
}

function validateAge(age) {
  var regex = /^[1-9]?[0-9]{1}$|^100$/;
  return regex.test(age);
}






$(document).ready(function () {
  $(".btn-control").click(function () {
    valid = true;

    var activityForm = "";
    var nameForm = "";
    var ageForm = "";
    var numberForm = "";
    var emailForm = "";
    var adressForm = "";
    var levelForm = "";
    var goalForm = "";
    var availableForm = "";
    var checkForm = "";

    var nameErrorMessage = "";
    var ageErrorMessage = "";
    var phoneErrorMessage = "";
    var emailErrorMessage = "";
    var adressErrorMessage = "";
    var levelErrorMessage = "";
    var goalErrorMessage = "";
    var availableErrorMessage = "";

    // Activity validation
    if ($("select#activity").val() == "") {
      valid = false;
      activityForm = "Veuillez renseigner quel cours vous intéresses.";
      $("#activityFormEmpty").html(activityForm);
    } else {
      $("#activityFormEmpty").hide();
    }

  
    // Name validation
    if ($("#name").val() == "") {
      valid = false;
      nameForm = "Veuillez renseigner vos noms et prénoms.";
      $("#nameFormEmpty").html(nameForm);
    } else {
      $("#nameFormEmpty").hide();
    }

    // Age validation
    if ($("#age").val() == "") {
      valid = false;
      ageForm = "Veuillez renseigner vôtre âge.";
      $("#ageFormEmpty").html(ageForm);
    } else {
      $("#ageFormEmpty").hide();
    }

    if (validateAge($("#age").val()) == false) {
      valid = false;
      ageErrorMessage = "Votre âge doit etre compris en 0-100 ans.";
      $("#ageFormError").html(ageErrorMessage);
    } else {
      $("#ageFormError").hide();
    }

    if (ageForm != "") {
      $("#ageFormEmpty").show();
      $("#ageFormError").hide();
    } else if (ageErrorMessage != "") {
      $("#ageFormEmpty").hide();
      $("#ageFormError").show();
    } 

    // Phone Number validation
    if ($("#phone_number").val() == "") {
      valid = false;
      numberForm = "Veuillez renseigner un numéro de téléphone.";
      $("#phoneFormEmpty").html(numberForm);
    } else {
      $("#phoneFormEmpty").hide();
    }

    if (validatePhone($("#phone_number").val()) == false) {
      valid = false;
      phoneErrorMessage = "Votre numéro est incorrect.";
      $("#phoneFormError").html(phoneErrorMessage);
    } else {
      $("#phoneFormError").hide();
    }

    if (numberForm != "") {
      $("#phoneFormEmpty").show();
      $("#phoneFormError").hide();
    } else if (phoneErrorMessage != "") {
      $("#phoneFormEmpty").hide();
      $("#phoneFormError").show();
    } 

    // Mail validation
    if ($("#mail").val() == "") {
      valid = false;
      emailForm = "Veuillez renseigner une adresse mail.";
      $("#emailFormEmpty").html(emailForm);
    } else {
      $("#emailFormEmpty").hide();
    }

    if (validateEmail($("#mail").val()) == false) {
      valid = false;
      emailErrorMessage = "Votre adresse mail est invalide";
      $("#emailFormError").html(emailErrorMessage);
    } else {
      $("#emailFormError").hide();
    }

    if (emailForm != "") {
      $("#emailFormEmpty").show();
      $("#emailFormError").hide();
    } else if (emailErrorMessage != "") {
      $("#emailFormEmpty").hide();
      $("#emailFormError").show();
    } 

    // Adress validation
    if ($("#adress").val() == "") {
      valid = false;
      adressForm = "Veuillez renseigner une adresse complète.";
      $("#adressFormEmpty").html(adressForm);
    } else {
      $("#adressFormEmpty").hide();
    }


    // Level validation
    if ($("#level").val() == "") {
      valid = false;
      levelForm = "Savoir vôtre niveau m'es essentiel.";
      $("#levelFormEmpty").html(levelForm);
    } else {
      $("#levelFormEmpty").hide();
    }

    // Goal validation
    if ($("#goal").val() == "") {
      valid = false;
      goalForm = "Quel est votre objectif en quelques mots?";
      $("#goalFormEmpty").html(goalForm);
    } else {
      $("#goalFormEmpty").hide();
    }

    // Available validation
    if ($("#available").val() == "") {
      valid = false;
      availableForm =
        "Renseigner vos disponibilité pour convenir la date et l'heure du cours.";
      $("#availableFormEmpty").html(availableForm);
    } else {
      $("#availableFormEmpty").hide();
    }

    // Check validation

    if ($('input[type="checkbox"]').prop("checked") == false) {
      valid = false;
      checkForm = "Veuillez cocher pour accepter les conditions générales de vente";
      $("#checkFormEmpty").html(checkForm);
    } else if ($('input[type="checkbox"]').prop("checked") == true) {
      $("#checkFormEmpty").hide();
    }


    return valid;
  });
});

