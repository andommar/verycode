
function isEmptyOrSpaces(str){
    return str === null || str.match(/^ *$/) !== null;
}
function validarEspecialista(nombre,apellido1,correo,pass, pass2,tipo){
    var datos_correctos = true;
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    var mensaje_error="";

    if(isEmptyOrSpaces(pass) || isEmptyOrSpaces(pass2)){
        mensaje_error="ERROR. Las contraseñas no pueden estar vacías.";
        datos_correctos = false;
    }
    //validar contraseñas (deben ser idénticas)
    if(pass!=pass2){
        mensaje_error="ERROR. Las contraseñas deben ser idénticas";
        datos_correctos = false;
    } 
    //Validar CORREO
    if(!pattern.test(correo)){
        mensaje_error="ERROR. El formato de correo no es correcto, introduce una extensión como '.com', por ejemplo.";
        datos_correctos = false;
    } 
    if(isEmptyOrSpaces(apellido1)){
        mensaje_error="ERROR. El primer apellido no puede estar vacío.";
        datos_correctos = false;
    } 
    if(isEmptyOrSpaces(nombre)){
        mensaje_error="ERROR. El nombre no puede estar vacío.";
        datos_correctos = false;
    }
    if(!datos_correctos){
        $("body").overhang({
            type: "error",
            message: mensaje_error,
            duration: 3,
            overlay: true,
            closeConfirm: true
        });
    }
    return datos_correctos;
                    
}

$(document).ready(function(){

    $("#btn-submit-1").click(function(e){

        e.preventDefault();
        var opcion = "registro_admin";

        var nombre =$('#nombre').val();
        var apellido1=$('#apellido1').val();
        var apellido2=$('#apellido2').val();
        var correo =$('#correo').val();
        var pass =$('#pass').val();
        var pass2=$('#pass2').val();
        var tipo= $( "#tipo" ).val();


        $.ajax({
            method:"POST",
            url: 'control/vista.php',
            data: {opcion: opcion, nombre:nombre, apellido1:apellido1, apellido2:apellido2, correo:correo, pass:pass, pass2:pass2, tipo:tipo}
        })
        .done(function( msg ) {                             	
            // console.log("ajax done");

            if(msg=="true"){
                $.notify("Especialista modificado correctamente", "success");
                
            }
            else if(msg=="false"){
                $("body").overhang({
                            type: "error",
                            message: "ERROR, modificación ha fallado",
                            duration: 6,
                            overlay: true,
                            closeConfirm: true
                });
            }
            
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
            }
        });

    });//fin btn-submit-1

}); //document ready