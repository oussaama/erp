$(document).ready(function () {
    valide1 = false;
    valide2 = false;
    valide3 = false;
    valide4 = false;
    valide5 = false;
    valide6 = false;
    valide7 = false;

    $("#addEmployeeButton").prop('disabled', true);
    //username
    $('#erp_employee_username').keyup(function () {
        var username = $('#erp_employee_username').val();
        if (username.length < 6) {
            $("#employee_username").fadeIn(500).text("il faut saisie 6 caractere").addClass('text-danger');
            $("#erp_employee_username").css("border", "1px solid red");
            valide1 = false;
        } else {
            $.ajax({
                type: 'POST',
                url: Routing.generate('verification_username', {'username': username}),
                success: function (data) {
                    if (data.username != null) {
                        $("#employee_username").fadeIn(500).text("il faut saisie autre username").addClass('text-danger');
                        $("#erp_employee_username").css("border", "1px solid red");
                        valide1 = false;
                    } else {
                        $("#employee_username").fadeOut(500);
                        $("#erp_employee_username").css("border", "1px solid green");
                        valide1 = true;
                    }
                }
            });
        }
    });

    //nom
    $("#erp_employee_fullName").keyup(function (e) {
        var nom = $("#erp_employee_fullName").val();
        var regex = new RegExp('^[A-Za-z]{3,30}$');
        if (regex.test(nom) == false) {
            $("#employee_fullname").fadeIn().text("il faut saisir chaine alphabetique avec taille minimale de 3 caracteres").addClass('text-danger');
            $("#erp_employee_fullName").css("border", "1px solid red");
            valide2 = false;
        } else  if (regex.test(nom) == true){
            $("#employee_fullname").fadeOut(500);
            $("#erp_employee_fullName").css("border", "1px solid green");
            valide2 = true;
        }
    });

    /*ville
    $("#erp_employee_ville").keyup(function (e) {
        var ville = $("#erp_employee_ville").val();
        if (ville.empty() == true) {
            $("#employee_ville").fadeIn().text("il faut saisir votre ville").addClass('text-danger');
            $("#erp_employee_ville").css("border", "1px solid red");
            valide8 = false;
        } else {
            $("#employee_ville").fadeOut(500);
            $("#erp_employee_ville").css("border", "1px solid green");
            valide8 = true;
        }
    });*/

    //cin
    $("#erp_employee_cin").keyup(function (e) {
        var cin = $("#erp_employee_cin").val();
        var regex = new RegExp('^[0-9]{8,30}$');
        if (regex.test(cin) == false) {
            $("#employee_cin").fadeIn(500).text("il faut saisie des chiffres").addClass('text-danger');
            $("#erp_employee_cin").css("border", "1px solid red");
            valide3 = false;
        }
        if (cin.length < 8) {
            $("#employee_cin").fadeIn(500).text("minimum de 8 chiffres").addClass('text-danger');
            $("#erp_employee_cin").css("border", "1px solid red");
            valide3 = false;
        }
        else {
            $.ajax({
                type: 'POST',
                url: Routing.generate('verification_cin', {'cin': cin}),
                success: function (data) {
                    if (data.cin != null) {
                        $("#employee_cin").fadeIn(500).text("il faut saisie autre cin").addClass('text-danger');
                        $("#erp_employee_cin").css("border", "1px solid red");
                        valide3 = false;
                    } else {
                        $("#employee_cin").fadeOut(500);
                        $("#erp_employee_cin").css("border", "1px solid green");
                        valide3 = true;
                    }
                }
            });
        }
    });

    //tel
    $("#erp_employee_tel").keyup(function (e) {
        var tel = $("#erp_employee_tel").val();
        if (tel.length < 8) {
            $("#employee_tel").fadeIn(500).text("champs telephone de 8 chiffres").addClass('text-danger');
            $("#erp_employee_tel").css("border", "1px solid red");
            valide4 = false;
        }
        else {
            $("#employee_tel").fadeOut(500);
            $("#erp_employee_tel").css("border", "1px solid green")
            valide4 = true;
        }
    });
    //cp
    $("#erp_employee_cp").keyup(function (e) {
        var cp = $("#erp_employee_cp").val();
        if (cp.length < 3) {
            $("#employee_cp").fadeIn(1000).text("champs de code postal 4 chiffres minimum").addClass('text-danger');
            $("#erp_employee_cp").css("border", "1px solid red");
            valide5 = false;
        }
        else {
            $("#employee_cp").fadeOut(1000);
            $("#erp_employee_cp").css("border", "1px solid green");
            valide5 = true;
        }
    });
    //email
    $("#erp_employee_email").keydown(function (e) {
        var regex = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
        var email = $("#erp_employee_email").val();
        if (regex.test(email) == false) {
            $("#employee_email").fadeIn(500).text("format invalide").addClass('text-danger');
            $("#erp_employee_email").css("border", "1px solid red");
            valide6 = false;
        } else {
            $.ajax({
                type: 'POST',
                url: Routing.generate('verification_email', {'email': email}),
                success: function (data) {
                    if (data.email != null) {
                        $("#employee_email").fadeIn(500).text("il faut saisie autre email").addClass('text-danger');
                        $("#erp_employee_email").css("border", "1px solid red");
                        valide6 = false;
                    } else {
                        $("#employee_email").fadeOut(500);
                        $("#erp_employee_email").css("border", "1px solid green");
                        valide6 = true;
                    }
                }
            });
        }
    });
    $("#erp_employee_plainPassword_second").keyup(function (e) {
        var p2 = $("#erp_employee_plainPassword_second").val();
        var p1 = $("#erp_employee_plainPassword_first").val();
        if (p2 != p1) {
            $("#employee_p2").fadeIn(500).text("les mots de passe n'est pas identique").addClass('text-danger');
            $("#erp_employee_plainPassword_second").css("border", "1px solid red");
            valide7 = false;
        }
        else {
            $("#employee_p2").fadeOut(500);
            $("#erp_employee_plainPassword_second").css("border", "1px solid green");
            valide7 = true;
        }
    });


});
