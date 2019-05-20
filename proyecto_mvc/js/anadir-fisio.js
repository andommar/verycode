$(document).ready(function(){

    $("#btn-submit-1").click(function(){


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
            console.log("ajax done");

            if(msg=="true"){
                $("body").overhang({
                            type: "success",
                            message: "Especialista modificado correctamente",
                            duration: 6,
                            overlay: true,
                            closeConfirm: true
                });
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