$(document).ready(function () {
    valide1 = false;
    valide2 = false;
    valide3 = false;
    valide4 = false;
    valide5 = false;
    valide6 = false;
    valide7 = false;
    valide8 = false;

    $("#addEtudiantButton").prop('disabled', true);
    //username
    $('#erp_etudiant_pre_inscription_username').keyup(function () {
        var username = $('#erp_etudiant_pre_inscription_username').val();
        if (username.length < 6) {
            $("#etudiant_username").fadeIn(500).text("il faut saisie 6 caractere").addClass('text-danger');
            $("#erp_etudiant_pre_inscription_username").css("border", "1px solid red");
            valide1 = false;
        } else {
            $.ajax({
                type: 'POST',
                url: Routing.generate('verification_username', {'username': username}),
                success: function (data) {
                    if (data.username != null) {
                        $("#etudiant_username").fadeIn(500).text("il faut saisie autre username").addClass('text-danger');
                        $("#erp_etudiant_pre_inscription_username").css("border", "1px solid red");
                        valide1 = false;
                    } else {
                        $("#etudiant_username").fadeOut(500);
                        $("#erp_etudiant_pre_inscription_username").css("border", "1px solid green");
                        valide1 = true;
                    }
                }
            });
        }
    });

    //nom
    $("#erp_etudiant_pre_inscription_nom").keyup(function (e) {
        var nom = $("#erp_etudiant_pre_inscription_nom").val();
        var regex = new RegExp('^[A-Za-z]{3,30}$');
        if (regex.test(nom) == false) {
                $("#etudiant_nom").text("il faut saisir chaine alphabetique avec taille minimale de 3 caracteres").addClass('text-danger');
                $("#erp_etudiant_pre_inscription_nom").css("border", "1px solid red");
                valide2 = false;
        } else {
            $("#etudiant_nom").fadeOut(500);
            $("#erp_etudiant_pre_inscription_nom").css("border", "1px solid green");
            valide2 = true;
        }
    });

    //prenom
    $("#erp_etudiant_pre_inscription_prenom").keyup(function (e) {
        var prenom = $("#erp_etudiant_pre_inscription_prenom").val();
        var regex = new RegExp('^[A-Za-z]{3,30}$');
        if (regex.test(prenom) == false) {
            $("#etudiant_prenom").fadeIn(500).text("il faut saisir chaine alphabetique avec taille minimale de 3 caracteres").addClass('text-danger');
            $("#erp_etudiant_pre_inscription_prenom").css("border", "1px solid red");
            valide8 = false;
        }else{
            $("#etudiant_prenom").fadeOut(500);
            $("#erp_etudiant_pre_inscription_prenom").css("border", "1px solid green");
            valide8 = true;
        }
    });

    //cin
    $("#erp_etudiant_pre_inscription_cin").keyup(function (e) {
        var cin = $("#erp_etudiant_pre_inscription_cin").val();
        var regex = new RegExp('[0-9]');
        if (regex.test(cin) == false) {
            $("#etudiant_cin").fadeIn(500).text("il faut saisie des chiffres").addClass('text-danger');
            $("#erp_etudiant_pre_inscription_cin").css("border", "1px solid red");
            valide3 = false;
        }
        if (cin.length < 8) {
            $("#etudiant_cin").fadeIn(500).text("minimum de 8 chiffres").addClass('text-danger');
            $("#erp_etudiant_pre_inscription_cin").css("border", "1px solid red");
            valide3 = false;
        }
        else {
            $.ajax({
                type: 'POST',
                url: Routing.generate('verification_cin', {'cin': cin}),
                success: function (data) {
                    if (data.cin != null) {
                        $("#etudiant_cin").fadeIn(500).text("il faut saisie autre cin").addClass('text-danger');
                        $("#erp_etudiant_pre_inscription_cin").css("border", "1px solid red");
                        valide3 = false;
                    } else {
                        $("#etudiant_cin").fadeOut(500);
                        $("#erp_etudiant_pre_inscription_cin").css("border", "1px solid green");
                        valide3 = true;
                    }
                }
            });
        }
    });

    //tel
    $("#erp_etudiant_pre_inscription_tel").keyup(function (e) {
        var tel = $("#erp_etudiant_pre_inscription_tel").val();
        if (tel.length < 8) {
            $("#etudiant_tel").fadeIn(500).text("champs telephone de 8 chiffres").addClass('text-danger');
            $("#erp_etudiant_pre_inscription_tel").css("border", "1px solid red");
            valide4 = false;
        }
        else {
            $("#etudiant_tel").fadeOut(500);
            $("#erp_etudiant_pre_inscription_tel").css("border", "1px solid green")
            valide4 = true;
        }
    });
    //cp
    $("#erp_etudiant_pre_inscription_cp").keyup(function (e) {
        var cp = $("#erp_etudiant_pre_inscription_cp").val();
        if (cp.length < 3) {
            $("#etudiant_cp").fadeIn(1000).text("champs de code postal 4 chiffres minimum").addClass('text-danger');
            $("#erp_etudiant_pre_inscription_cp").css("border", "1px solid red");
            valide5 = false;
        }
        else {
            $("#etudiant_cp").fadeOut(1000);
            $("#erp_etudiant_pre_inscription_cp").css("border", "1px solid green");
            valide5 = true;
        }
    });
    //email
    $("#erp_etudiant_pre_inscription_email").keydown(function (e) {
        var regex = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
        var email = $("#erp_etudiant_pre_inscription_email").val();
        if (regex.test(email) == false) {
            $("#etudiant_email").fadeIn(500).text("format invalide").addClass('text-danger');
            $("#erp_etudiant_pre_inscription_email").css("border", "1px solid red");
            valide6 = false;
        }
            $.ajax({
                type: 'POST',
                url: Routing.generate('verification_email', {'email': email}),
                success: function (data) {
                    if (data.email != null) {
                        $("#etudiant_email").fadeIn(500).text("il faut saisie autre email").addClass('text-danger');
                        $("#erp_etudiant_pre_inscription_email").css("border", "1px solid red");
                        valide6 = false;
                    } else {
                        $("#etudiant_email").fadeOut(500);
                        $("#erp_etudiant_pre_inscription_email").css("border", "1px solid green");
                        valide6 = true;
                    }
                }
            });
    });
    $("#erp_etudiant_pre_inscription_plainPassword_second").keyup(function (e) {
        var p2 = $("#erp_etudiant_pre_inscription_plainPassword_second").val();
        var p1 = $("#erp_etudiant_pre_inscription_plainPassword_first").val();
        if (p2 != p1) {
            $("#etudiant_p2").fadeIn(500).text("les mots de passe n'est pas identique").addClass('text-danger');
            $("#erp_etudiant_pre_inscription_plainPassword_second").css("border", "1px solid red");
            valide7 = false;
        }
        else {
            $("#etudiant_p2").fadeOut(500);
            $("#erp_etudiant_pre_inscription_plainPassword_second").css("border", "1px solid green");
            valide7 = true;
        }
    });


});
