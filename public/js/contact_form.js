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
    // 'use strict';
    
    $('#contact_form').submit(function (event) {
        // Annule l'action par défaut (on ne veut pas que la page se recharge)
        event.preventDefault();
        // Envoi de la requête XHR
        $.post($(this).attr('action'), $(this).serializeArray(), function (data) {
            console.log(data);
            let $aside = $('#contact_form aside');
            // Notifications
            if (data.result) {
                $aside.addClass('alert-success').text('Le message a bien été envoyé !').removeClass('d-none');
            } else {
                $aside.addClass('alert-danger').text('Erreur lors de l\'envoi du message !').removeClass('d-none');
            }
        });
    });
  
    // $('#contact_form').submit(function() {
    //     nom = $(this).find("#firstname").val();
    //     prenom = $(this).find("#lastname").val();
    //     email = $(this).find("#email").val();
    //     object = $(this).find("#object").val();
    //     message = $(this).find("#content").val();

    //     var url = 'http://www.projet-5.pauline-superweb.com/index.php?action=contact';
        
    //     $.post(url, {
    //         nom:nom,
    //         prenom:prenom,
    //         email:email,
    //         object:object,
    //         message:message,
    //         // submit: true
    //     }, function(data) {
    //         // data = JSON.parse(data);
    //         if (data.error == 'Ok') {
    //             console.log("hello ok");
    //             $('#msg-ok').show();
    //         } else {
    //             console.log("Hello not ok");
    //             $('#msg-notok').show();
    //         }
    //     });
    //     return false;
    // });
});
