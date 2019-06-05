    var id_usuario= 0;
    var id_especialista=0;

    $(document).ready(function(){
        id_usuario= $("#id_usuario").val();
        $("#titulo-paciente").html("Editar paciente · Paciente "+id_usuario);
    });

    $(document).ready(function(){

        $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "get_datos_personales",
                id_usuario: id_usuario
            }
        
        })        
        .done(function(msg) {
            console.log("ajax done");
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
    });

//   =============================== MOSTRAR Y ESCONDER FORMULARIOS  =========================================== 
function mostrarFormulario(boton){
    
    $(document).ready(function(){


        //Escondemos todos los formularios y marcamos en gris los botones
        $("#btn-datos-personales").css("background-color","rgb(109, 109, 109)");
        $("#btn-historial-clinico").css("background-color","rgb(109, 109, 109)");
        $("#btn-cirugias").css("background-color","rgb(109, 109, 109)");
        $("#btn-medicamentos").css("background-color","rgb(109, 109, 109)");
        $("#btn-infecciones").css("background-color","rgb(109, 109, 109)");
        $("#btn-habitos").css("background-color","rgb(109, 109, 109)");
        $("#btn-historial-trat-linf").css("background-color","rgb(109, 109, 109)");
        $("#btn-valoracion-linfedema").css("background-color","rgb(109, 109, 109)");
        $("#btn-medicion").css("background-color","rgb(109, 109, 109)");

        $("#apartado-usuario").css("display","none");
        $("#apartado-historial").css("display","none");
        $("#apartado-cirugias").css("display","none");
        $("#apartado-medicamentos").css("display","none");
        $("#apartado-infecciones").css("display","none");
        $("#apartado-habitos").css("display","none");
        $("#apartado-hist-trat-linf").css("display","none");
        $("#apartado-valoracion-linf").css("display","none");
        $("#apartado-medicion-inicial").css("display","none");

        $( "html,body" ).animate({
            scrollTop: $("body").offset().top
            }, 500, function() {
            // Animation complete.
            });

        //mostramos el formulario clicado
        switch(boton){

            case 'datos-personales':
                $("#apartado-usuario").css("display","block");
                $("#btn-datos-personales").css("background-color","#3da3bc");
                break;
            
            case 'historial-clinico':
                $("#apartado-historial").css("display","block");
                $("#btn-historial-clinico").css("background-color","#7037f4");
                break;

            case 'cirugias':
                $("#apartado-cirugias").css("display","block");
                $("#btn-cirugias").css("background-color","#e83e8c");
                break;

            case 'medicamentos':
                $("#apartado-medicamentos").css("display","block");
                $("#btn-medicamentos").css("background-color","#dc3545");
                break;

            case 'infecciones':
                $("#apartado-infecciones").css("display","block");
                $("#btn-infecciones").css("background-color","#fd7e14");
                break;

            case 'habitos':
                $("#apartado-habitos").css("display","block");
                $("#btn-habitos").css("background-color","#ffc107");
                break;

            case 'historial-trat-linf':
                $("#apartado-hist-trat-linf").css("display","block");
                $("#btn-historial-trat-linf").css("background-color","#28a745");
                break;

            case 'valoracion-linfedema':
                $("#apartado-valoracion-linf").css("display","block");
                $("#btn-valoracion-linfedema").css("background-color","#20c997");
                break;

            case 'medicion':
                $("#apartado-medicion-inicial").css("display","block");
                $("#btn-medicion").css("background-color","#3da3bc");
                break;
        }
            
            
        
        
    });
}

    //  =============================== MODIFICAR FORMULARIOS =========================================== 
                
    //  ================================= DATOS PERSONALES ==============================================

    $("#form-1").submit(function(event){
        event.preventDefault();
        var datos_correctos_queries = true;


        var nombre =$('#nombre').val();
        var apellido1=$('#apellido1').val();
        var apellido2=$('#apellido2').val();
        var correo =$('#correo').val();
        var pass =$('#pass').val();
        
        id_especialista=$('#btn-submit-1').val(); 
        var opcion="editar_datos_personales";

        if(validarDatosPersonales(nombre,apellido1,correo,pass)){
            $.ajax({
            type:'POST',
            url: 'control/vista.php',
            data: {id_usuario: id_usuario, nombre: nombre, apellido1: apellido1, apellido2: apellido2, correo: correo,id_especialista: id_especialista, pass: pass, opcion: opcion}
            })
            .done(function( msg ) {
                                        	
                console.log("ajax done"); 
                if(msg=="false"){
                    $("body").overhang({
                        type: "error",
                        message: "Error en la consulta sql",
                        duration: 3,
                        overlay: true,
                        closeConfirm: true
                    });
                    datos_correctos_queries = false;
                }
                else{
                    $.notify("Datos personales actualizados con éxito", "success");
                    datos_correctos_queries=true;
                }

                // if(datos_correctos_queries){
                    
                //     // $( "html,body" ).animate({
                //     //     scrollTop: $("body").offset().top
                //     //     }, 500, function() {
                //     //     // Animation complete.
                //     //     });
                // }
                
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    console.log("ajax fail");
                }
            });
            return false;
        }
        
    });


//VALIDAR CAMPOS
function validarDatosPersonales(nombre,apellido1,correo,pass){
    var datos_correctos = true;
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    var mensaje_error="";
    
  
    if(isEmptyOrSpaces(pass)){
        mensaje_error="ERROR. Las contraseñas no pueden estar vacías.";
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
function isEmptyOrSpaces(str){
    return str === null || str.match(/^ *$/) !== null;
}