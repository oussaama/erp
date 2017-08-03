$(document).ready(function(){
    //$("#addEntrepriseButton").prop('disabled', true);
    valide1,valide2,valide3,valide4,valide5,valide6,valide7,valide8 = false;


    //fullname
    $("#erp_entreprise_fullName").keyup(function(e){
        var fullname =$("#erp_entreprise_fullName").val();
        if(fullname.length < 6) {
            $("#entreprise_fullName").fadeIn(1000).text("Minimum de 6 caractères").addClass('text-danger');
            $("#erp_entreprise_fullName").css("border","1px solid red");
            valide1 = false ;
        }else{
            $("#entreprise_fullName").fadeOut(1000);
            $("#erp_entreprise_fullName").css("border","1px solid green");
            valide1 = true ;
        }
    });

    //username
    $("#erp_entreprise_username").keyup(function(e) {
        var username = $("#erp_entreprise_username").val();
        if(username.length < 6) {
            $("#entreprise_username").fadeIn(1000).text("Minimum de 6 caractères").addClass('text-danger');
            $("#erp_entreprise_username").css("border","1px solid red");
            valide2 = false;
        }else{
            $.ajax({
                type: 'POST',
                url: Routing.generate('verification_username',{'username':username}),
                success:function(data) {
                    if (data.username != null) {
                        $("#entreprise_username").fadeIn(1000).text("il faut saisie autre username").addClass('text-danger');
                        $("#erp_entreprise_username").css("border", "1px solid red");
                        valide2 = false;
                    } else {
                        $("#entreprise_username").fadeOut(1000);
                        $("#erp_entreprise_username").css("border", "1px solid green");
                        valide2 = true;
                    }
                }
            });
        }
    });

    //cin
    $("#erp_entreprise_cin").keyup(function(e){
        var cin =$("#erp_entreprise_cin").val();
        if( cin.length != 8 ) {
            $("#entreprise_cin").fadeIn(500).text("taille de 8 chiffres").addClass('text-danger');
            $("#erp_entreprise_cin").css("border", "1px solid red");
            valide3 = false;
        } else {
            $.ajax({
                type: 'POST',
                url: Routing.generate('verification_cin',{'cin':cin}),
                success:function(data) {
                    if (data.cin != null) {
                        $("#entreprise_cin").fadeIn(1000).text("il faut saisie autre cin").addClass('text-danger');
                        $("#erp_entreprise_cin").css("border", "1px solid red");
                        valide3 = false;
                    }else{
                        $("#entreprise_cin").fadeOut(1000);
                        $("#erp_entreprise_cin").css("border", "1px solid green");
                        valide3 = true;
                    }
                }
            });
        }
    });

    ///tel
    $("#erp_entreprise_tel").keyup(function(e){
        var tel =$("#erp_entreprise_tel").val();
        if(tel.length != 8) {
            $("#entreprise_tel").fadeIn(1000).text("champs telephone de 8 chiffres").addClass('text-danger');
            $("#erp_entreprise_tel").css("border", "1px solid red");
            valide4 = false;
        }else{
            $("#entreprise_tel").fadeOut(1000);
            $("#erp_entreprise_tel").css("border","1px solid green")
            valide4 = true;
        }
    });
    //cp
    $("#erp_entreprise_cp").keyup(function(e){
        var cp =$("#erp_entreprise_cp").val();
        if(cp.length != 4) {
            $("#entreprise_cp").fadeIn(1000).text("champs de code postal 4 chiffres").addClass('text-danger');
            $("#erp_entreprise_cp").css("border", "1px solid red");
            valide5 = false;
        }
        if(cp.length == 3){
            $("#entreprise_cp").fadeOut(1000);
            $("#erp_entreprise_cp").css("border","1px solid green");
            valide5 = true;
        }
    });
    //poste
    $("#erp_entreprise_poste").keyup(function(e){
        var regex = new RegExp('[A-Za-z]{5,30}');
        var poste =$("#erp_entreprise_poste").val();
        if(regex.test(poste)==false) {
            $("#entreprise_poste").fadeIn(1000).text("il faut saisie un chaine alphabetique").addClass('text-danger');
            $("#erp_entreprise_poste").css("border", "1px solid red");
            valide6 = false;
        }
        if(poste.length == 5){
            $("#entreprise_poste").fadeOut(1000);
            $("#erp_entreprise_poste").css("border","1px solid green");
            valide6 = true;
        }
    });


    //email
    $("#erp_entreprise_email").keyup(function(e){
        var regex = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
        var email =$("#erp_entreprise_email").val();
        if(regex.test(email)==false){
            $("#entreprise_email").fadeIn(1000).text("format invalide").addClass('text-danger');
            $("#erp_entreprise_email").css("border", "1px solid red");
            valide7 = false;
        }
        else{
            $.ajax({
                type: 'POST',
                url: Routing.generate('verification_email',{'email':email}),
                success:function(data) {
                    if (data.email != null) {
                        $("#entreprise_email").fadeIn(1000).text("il faut saisie autre email").addClass('text-danger');
                        $("#erp_entreprise_email").css("border", "1px solid red");
                        valide7 = false;
                    }else{
                        $("#entreprise_email").fadeOut(1000);
                        $("#erp_entreprise_email").css("border", "1px solid green");
                        valide7 = true;
                    }
                },
                complete: function(data) {

                }
            });  
        }
    });
    $("#erp_entreprise_plainPassword_first").focus(function(e){
        var p1 =$("#erp_entreprise_plainPassword_first").val();
        if(isEmpty(p1)){
            $("#entreprise_p1").fadeIn(1000).text("il faut saisie un mot de passe").addClass('text-danger');
            $("#erp_entreprise_plainPassword_first").css("border", "1px solid red");
        }
        else{
            $("#entreprise_p1").fadeOut(1000);
            $("#erp_entreprise_plainPassword_first").css("border","1px solid green");
            valide=valide+1;
        }
    });
    $("#erp_entreprise_plainPassword_second").keyup(function(e){
        var p2 =$("#erp_entreprise_plainPassword_second").val();
        var p1 =$("#erp_entreprise_plainPassword_first").val();
        if(p2 != p1){
            $("#entreprise_p2").fadeIn(1000).text("les mots de passe n'est pas identique").addClass('text-danger');
            $("#erp_entreprise_plainPassword_second").css("border", "1px solid red");
            valide8 = false;
        }
        else{
            $("#entreprise_p2").fadeOut(1000);
            $("#erp_entreprise_password_second").css("border","1px solid green");
            valide8 = true ;
        }
    });

    function validation() {
        if(valide1 && valide2 && valide3 && valide4 && valide5 && valide6 && valide7 && valide8){
            $('#addEtudiantButton').prop('disabled', false);
        }
    }
    setInterval(validation(),1000);
});/**
 * Created by oussama on 18/06/2017.
 */
