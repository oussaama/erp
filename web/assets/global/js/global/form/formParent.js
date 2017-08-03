$(document).ready(function(){
    //fullname
    //$("#addParentButton").prop('disabled', true);
    var valide = 0;
    if(this.valide === 4){
        console.log(valide);
        $('#addParentButton').prop('disabled', false);
    }
    //nomPere
    $("#erp_parent_nomPere").keyup(function(e){
        var fullname =$("#erp_parent_nomPere").val();
        if(fullname.length<5 || (fullname.length<7 && e.keyCode==8 )) {
            $("#parent_nomPere").fadeIn(1000).text("Minimum de 6 caractères").addClass('text-danger');
            $("#erp_parent_nomPere").css("border","1px solid red");
        }else if(fullname.length>=5){
            $("#parent_nomPere").fadeOut(1000);
            $("#erp_parent_nomPere").css("border","1px solid green");
            valide=valide+1;
        }
    });
    //nomMere
    $("#erp_parent_nomMere").keyup(function(e){
        var fullname =$("#erp_parent_nomMere").val();
        if(fullname.length<5 || (fullname.length<7 && e.keyCode==8 )) {
            $("#parent_nomMere").fadeIn(1000).text("Minimum de 6 caractères").addClass('text-danger');
            $("#erp_parent_nomMere").css("border","1px solid red");
        }else if(fullname.length>=5){
            $("#parent_nomMere").fadeOut(1000);
            $("#erp_parent_nomMere").css("border","1px solid green");
            valide=valide+1;
        }
    });
    //username
    $("#erp_parent_username").keyup(function(e) {
        var username = $("#erp_parent_username").val();
        if(username.length<5 || (username.length<7 && e.keyCode==8 )) {
            $("#parent_username").fadeIn(1000).text("Minimum de 6 caractères").addClass('text-danger');
            $("#erp_parent_username").css("border","1px solid red");
        }
        $.ajax({
            type: 'POST',
            url: Routing.generate('admin_verification_username',{'username':username}),
            success:function(data) {
                if (data.username != null) {
                    $("#parent_username").fadeIn(1000).text("il faut saisie autre username").addClass('text-danger');
                    $("#erp_parent_username").css("border", "1px solid red");
                }else{
                    $("#parent_username").fadeOut(1000);
                    $("#erp_parent_username").css("border", "1px solid green");
                    valide = valide + 1;
                }
            },
            complete: function(data) {

            }
        });
    });

    //cinPere
    $("#erp_parent_cin").keyup(function(e){
        var cin =$("#erp_parent_cin").val();
        cinl = cin.length;
        if( cinl<6 || cinl>6 ) {
            $("#parent_cin").fadeIn(1000).text("taille de 8 chiffres").addClass('text-danger');
            $("#parent_cin").removeClass('glyphicon-ok').addClass('glyphicon-remove');
            $("#erp_parent_cin").css("border", "1px solid red");
            console.log(cin.length);
        }
        if(cinl == 7){
            $("#parent_cin").fadeOut(1000);
            $("#erp_parent_cin").css("border","1px solid green");
            valide=valide+1;
        }
    });
    //cinMere
    $("#erp_parent_cin").keyup(function(e){
        var cin =$("#erp_parent_cin").val();
        cinl = cin.length;
        if( cinl<6 || cinl>6 ) {
            $("#parent_cin").fadeIn(1000).text("taille de 8 chiffres").addClass('text-danger');
            $("#parent_cin").removeClass('glyphicon-ok').addClass('glyphicon-remove');
            $("#erp_parent_cin").css("border", "1px solid red");
            console.log(cin.length);
        }
        if(cinl == 7){
            $("#parent_cin").fadeOut(1000);
            $("#erp_parent_cin").css("border","1px solid green");
            valide=valide+1;
        }
    });
    //telPere
    $("#erp_parent_telPere").keyup(function(e){
        var tel =$("#erp_parent_telPere").val();
        if(tel.length<7 || tel.length>7 || (tel.length<8 && e.keyCode==8 )) {
            $("#parent_telPere").fadeIn(1000).text("champs telephone de 8 chiffres").addClass('text-danger');
            $("#erp_parent_telPere").css("border", "1px solid red");
        }
        if(tel.length == 7 ){
            $("#parent_tel").fadeOut(1000);
            $("#erp_parent_tel").css("border","1px solid green")
            valide=valide+1;
        }
    });
    //telMere
    $("#erp_parent_telMere").keyup(function(e){
        var tel =$("#erp_parent_telMere").val();
        if(tel.length<7 || tel.length>7 || (tel.length<8 && e.keyCode==8 )) {
            $("#parent_telMere").fadeIn(1000).text("champs telephone de 8 chiffres").addClass('text-danger');
            $("#erp_parent_telMere").css("border", "1px solid red");
        }
        if(tel.length == 7 ){
            $("#parent_telMere").fadeOut(1000);
            $("#erp_parent_telMere").css("border","1px solid green")
            valide=valide+1;
        }
    });

    //email
    $("#erp_parent_email").keyup(function(e){
        var regex = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
        var email =$("#erp_parent_email").val();
        if(regex.test(email)==false){
            $("#parent_email").fadeIn(1000).text("format invalide").addClass('text-danger');
            $("#erp_parent_email").css("border", "1px solid red");
        }
        else{
            $("#parent_email").fadeOut(1000);
            $("#erp_parent_email").css("border","1px solid green");
            valide=valide+1;
        }
    });
    //password
    $("#erp_parent_plainPassword_first").focus(function(e){
        var p1 =$("#erp_parent_plainPassword_first").val();
        if(isEmpty(p1)){
            $("#parent_p1").fadeIn(1000).text("il faut saisie un mot de passe").addClass('text-danger');
            $("#erp_parent_plainPassword_first").css("border", "1px solid red");
        }
        else{
            $("#parent_p1").fadeOut(1000);
            $("#erp_parent_plainPassword_first").css("border","1px solid green");
            valide=valide+1;
        }
    });
    $("#erp_parent_plainPassword_second").keyup(function(e){
        var p2 =$("#erp_parent_plainPassword_second").val();
        var p1 =$("#erp_parent_plainPassword_first").val();
        if(p2 != p1){
            $("#parent_p2").fadeIn(1000).text("les mots de passe n'est pas identique").addClass('text-danger');
            $("#erp_parent_plainPassword_second").css("border", "1px solid red");
        }
        else{
            $("#parent_p2").fadeOut(1000);
            $("#erp_parent_password_second").css("border","1px solid green");
            valide=valide+1;
        }
    });
});/**
 * Created by oussama on 18/06/2017.
 */
