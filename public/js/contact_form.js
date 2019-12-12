$(function() {
    // verify validity for firstname field
    $("#firstname").keyup(function() {
        if ($("#firstname").val() == "") { 
            $("#firstname").next(".error-message").show().text("Veuillez rentrer un nom valide.") ; 
        } else {
            $("#firstname").next(".error-message").hide().text(""); 
        }  
    });

    // verify validity for lastname field
    $("#lastname").keyup(function() {
        if ($("#lastname").val() == "") { 
            $("#lastname").next(".error-message").show().text("Veuillez rentrer un prénom valide.") ; 
        } else {
            $("#lastname").next(".error-message").hide().text(""); 
        }  
    });

    // verify validity for email field
    $("#email").keyup(function() {
        if (!$("#email").val().match(/^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/i)) { 
            $("#email").next(".error-message").show().text("Veuillez rentrer une adresse mail valide.") ; 
        } else {
            $("#email").next(".error-message").hide().text(""); 
        }
    });

    // verify validity for object field
    $("#object").keyup(function() {
        if ($("#object").val() == "") { 
            $("#object").next(".error-message").show().text("Veuillez taper le sujet de votre message.") ; 
        } else {
            $("#object").next(".error-message").hide().text(""); 
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

// send messages with Ajax
    'use strict';
    $('#contact_form').submit(function(e) {
        // stop refresh page 
        e.preventDefault();

        nom = $(this).find("#firstname").val();
        prenom = $(this).find("#lastname").val();
        email = $(this).find("#email").val();
        object = $(this).find("#object").val();
        message = $(this).find("#content").val();

        $.ajax({
            type: "POST",
            data: { 
                nom:nom, 
                prenom:prenom, 
                email:email, 
                object:object, 
                content:message,
                submit: 1
            },
            url: 'http://www.projet-5.pauline-superweb.com/index.php?action=contact',
            success: function(data) {
                $("#contact_form").hide();
                $('#msg-ok').fadeIn();  
            },
            error: function() {
                $('#msg-notok').fadeIn();
            }
        })
    });
});
