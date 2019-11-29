$(function() {
    // verify validity for pseudo field
    $("#pseudo").keyup(function() {
        if ($("#pseudo").val() == "") { 
            $("#pseudo").next(".error-message").show().text("Veuillez rentrer un pseudo valide.") ; 
        } else {
            $("#pseudo").next(".error-message").hide().text(""); 
        }  
    });

    // verify validity for email field
    $("#mail").keyup(function() {
        if (!$("#mail").val().match(/^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/i)) { 
            $("#mail").next(".error-message").show().text("Veuillez rentrer une adresse mail valide.") ; 
        } else {
            $("#mail").next(".error-message").hide().text(""); 
        }
    });

    // verify validity for content field
    $("#content").keyup(function() {
        if ($("#content").val() == "") { 
            $("#content").next(".error-message").show().text("Veuillez taper votre message.") ; 
        } else {
            $("#content").next(".error-message").hide().text(""); 
        }
    });
}) ;

