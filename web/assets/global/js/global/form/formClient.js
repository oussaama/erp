$(document).ready(function(){
    $("#addClientButton").prop('disabled', true);

    valide1,valide2,valide3,valide4 = false;
    //fullname
    $("#type_client_fullName").keyup(function(e){
        var fullname =$("#type_client_fullName").val();
        if(fullname.length<6) {
            $("#client_fullName").fadeIn(1000).text("Minimum de 6 caractères").addClass('text-danger');
            $("#type_client_fullName").css("border","1px solid red");
            valide1 = false;
        }else{
            $("#client_fullName").fadeOut(1000);
            $("#type_client_fullName").css("border","1px solid green");
            valide1 = true;
        }
    });
    //cin
    $("#type_client_cin").keyup(function(e){
        var cin =$("#type_client_cin").val();
        if( cin.length!=8 ) {
            $("#client_cin").fadeIn(1000).text("taille de 8 chiffres").addClass('text-danger');
            $("#type_client_cin").css("border", "1px solid red");
            valide2 =false
        }else{
            $.ajax({
                type: 'POST',
                url: Routing.generate('verification_cin',{'cin':cin}),
                success:function(data) {
                    if (data.cin != null) {
                        $("#client_cin").fadeIn(1000).text("il faut saisie autre cin").addClass('text-danger');
                        $("#erp_client_cin").css("border", "1px solid red");
                        valide2 = false;
                    }else{
                        $("#client_cin").fadeOut(1000);
                        $("#erp_client_cin").css("border", "1px solid green");
                        valide2 = true;
                    }
                }
            });
        }
    });
    //tel
    $("#erp_client_tel").keyup(function(e){
        var tel =$("#erp_client_tel").val();
        if(tel.length != 8) {
            $("#client_tel").fadeIn(1000).text("champs telephone de 8 chiffres").addClass('text-danger');
            $("#erp_client_tel").css("border", "1px solid red");
            valide3 = false;
        }else{
            $("#client_tel").fadeOut(1000);
            $("#erp_client_tel").css("border","1px solid green")
            valide3 = true;
        }
    });
    //cp
    $("#erp_client_cp").keyup(function(e){
        var cp =$("#erp_client_cp").val();
        if(cp.length != 4) {
            $("#client_cp").fadeIn(1000).text("champs de code postal 4 chiffres").addClass('text-danger');
            $("#erp_client_cp").css("border", "1px solid red");
            valide4 = false;
        }
        if(cp.length == 3){
            $("#client_cp").fadeOut(1000);
            $("#erp_client_cp").css("border","1px solid green");
            valide4 = true;
        }
    });

    function validation() {
        if(valide1 && valide2 && valide3 && valide4){
            $('#addEtudiantButton').prop('disabled', false);
        }
    }
    setInterval(validation(),1000);
});
