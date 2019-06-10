$(document).ready(function(){
    
    var id_usuario= $("#id_usuario").val();
    var id_especialista = $("#id_especialista").val();

     
    $.ajax({
        type: "GET",
        url: 'control/vista.php',
        data: { 
            opcion: "get_paciente_no_asignado",
            id_usuario: id_usuario
        }
    
    })        
    .done(function(msg) {
        // alert("ajax done");
        // console.log("ajax done");
        var resultado = $.parseJSON(msg);
        
        $("#nombre").val(resultado[0].nombre);
        $("#apellido1").val(resultado[0].apellido1);
        $("#apellido2").val(resultado[0].apellido2);
        $("#correo").val(resultado[0].correo);
        $("#pass").val(resultado[0].pass);
            
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("ajax false");
    });


    $("#form-1").submit(function(event){
        event.preventDefault();
        var datos_correctos_queries = true;

        var opcion="asignar_fisio";
        var asignar_fisio = $('input[id=asignar-fisio]').prop('checked');


        if(asignar_fisio){//quiere asignar el fisio, hacemos el ajax
            
            $.ajax({
            type:'POST',
            url: 'control/vista.php',
            data: {opcion:opcion,id_usuario:id_usuario,id_especialista: id_especialista}
            })
            .done(function( msg ) {
                
                if(msg){
                    document.location.href="pacientes.php";
                }
                else{
                    $.notify("Error SQL", "error");
                }
                
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    // console.log("ajax fail");
                }
            });
        }
        else{
            $.notify("No hay cambios que guardar", "warn");
        }
           
               
    });

});

