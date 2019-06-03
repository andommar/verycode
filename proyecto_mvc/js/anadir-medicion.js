$(document).ready(function(){
var extremidad="";
var id_usuario= $("#id_usuario").val();
    
//**
                
    $("#radiobuttons_escoger_miembro").change(function(){
        var valor_seleccionado = $("#radiobuttons_escoger_miembro input[type='radio']:checked").val(); //valor option del select
    if(valor_seleccionado=="brazo"){
            $("#panel-brazo").css("display","block");
            $("#panel-pierna").css("display","none");
        }
        else if(valor_seleccionado=="pierna"){
            $("#panel-brazo").css("display","none");
            $("#panel-pierna").css("display","block");
        }
        
    });
    //Focus brazo y pierna
    //FOCUS BRAZO
    $( "input[id='brazo_i_p1'], input[id='brazo_d_p1']" ).focus(function() {
        $("#imagen-brazo").attr("src","img/brazo/a.png");
    });
    $( "input[id='brazo_i_p2'], input[id='brazo_d_p2']" ).focus(function() {
        $("#imagen-brazo").attr("src","img/brazo/b.png");
    });
    $( "input[id='brazo_i_p3'], input[id='brazo_d_p3']" ).focus(function() {
        $("#imagen-brazo").attr("src","img/brazo/c.png");
    });
    $( "input[id='brazo_i_p4'], input[id='brazo_d_p4']" ).focus(function() {
        $("#imagen-brazo").attr("src","img/brazo/d.png");
    });
    $( "input[id='brazo_i_p5'], input[id='brazo_d_p5']" ).focus(function() {
        $("#imagen-brazo").attr("src","img/brazo/e.png");
    });
    //FOCUS PIERNA
    $( "input[id='pierna_i_p1'], input[id='pierna_d_p1']" ).focus(function() {
        $("#imagen-pierna").attr("src","img/pierna/a.png");
    });
    $( "input[id='pierna_i_p2'], input[id='pierna_d_p2']" ).focus(function() {
        $("#imagen-pierna").attr("src","img/pierna/b.png");
    });
    $( "input[id='pierna_i_p3'], input[id='pierna_d_p3']" ).focus(function() {
        $("#imagen-pierna").attr("src","img/pierna/c.png");
    });
    $( "input[id='pierna_i_p4'], input[id='pierna_d_p4']" ).focus(function() {
        $("#imagen-pierna").attr("src","img/pierna/d.png");
    });
    $( "input[id='pierna_i_p5'], input[id='pierna_d_p5']" ).focus(function() {
        $("#imagen-pierna").attr("src","img/pierna/e.png");
    });
    $( "input[id='pierna_i_p6'], input[id='pierna_d_p6']" ).focus(function() {
        $("#imagen-pierna").attr("src","img/pierna/f.png");
    });
    //console.log($("#id_usuario").val());

    
    $.ajax({
        type: "GET",
        url: 'control/vista.php',
        data: { 
            opcion: "get_miembro_afecto",
            id_usuario: id_usuario
        }
    
    })        
    .done(function(msg) {
        // alert("ajax done");
        console.log("ajax done");
            if(msg=="no_tiene"){
                
                document.location.href="mediciones.php"; 
                alert("Este paciente no tiene mediciones todavía");
            }
            else if(msg=="brazo_i"){//brazo d lado sano
                    // $('#subtipo_congenito_otro').prop('disabled', false);
                    extremidad="brazo_i";
                    jQuery("input[id=pierna]:radio").attr('disabled',true);
                    $("#panel-brazo").css("display","block");
                    $("#panel-pierna").css("display","none");

                    jQuery("input[id=miembro_sano_brazo_d]:radio").attr('checked',true);
                    jQuery("input[id=miembro_sano_brazo_i]:radio").attr('disabled',true);

                    // jQuery("input[id=brazo_d_p1]").attr('disabled',true);
            }
            else if(msg=="brazo_d"){//brazo i lado sano
                    
                    extremidad="brazo_d";
                    jQuery("input[id=pierna]:radio").attr('disabled',true);
                    $("#panel-brazo").css("display","block");
                    $("#panel-pierna").css("display","none");

                    jQuery("input[id=miembro_sano_brazo_i]:radio").attr('checked',true);
                    jQuery("input[id=miembro_sano_brazo_d]:radio").attr('disabled',true);

                    // jQuery("input[id=brazo_i_p1]").attr('disabled',true);
                    
                }
                else if(msg=="pierna_d"){//pierna i lado sano

                    extremidad="pierna_d";
                    jQuery("input[id=brazo]:radio").attr('disabled',true);
                    jQuery("input[id=pierna]:radio").attr('checked',true);
                    $("#panel-brazo").css("display","none");
                    $("#panel-pierna").css("display","block");

                    jQuery("input[id=miembro_sano_pierna_i]:radio").attr('checked',true);
                    jQuery("input[id=miembro_sano_pierna_d]:radio").attr('disabled',true);

                    // jQuery("input[id=pierna_i_p1]").attr('disabled',true);
                }
                else if(msg=="pierna_i"){//pierna d lado sano

                    extremidad="pierna_i";
                    jQuery("input[id=brazo]:radio").attr('disabled',true);
                    jQuery("input[id=pierna]:radio").attr('checked',true);
                    $("#panel-brazo").css("display","none");
                    $("#panel-pierna").css("display","block");

                    jQuery("input[id=miembro_sano_pierna_d]:radio").attr('checked',true);
                    jQuery("input[id=miembro_sano_pierna_i]:radio").attr('disabled',true);

                    // jQuery("input[id=pierna_d_p1]").attr('disabled',true);
                    
                }
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("ajax false");
    });

    $("#btn-submit-9").click(function(event){
                    
        event.preventDefault();
       
        var tambien_brazo_sano = $('input[id=mediciones_brazo_sano]').prop('checked');
        var tambien_pierna_sana = $('input[id=mediciones_pierna_sana]').prop('checked');
        var opcion= "registro_nueva_medicion";
        var datos_correctos=true;
        var datos_correctos_queries=true;
        var lado_sano="";
        var p1_d=0;
        var p2_d=0;
        var p3_d=0;
        var p4_d=0;
        var p5_d=0;
        var p6_d=0;

        var p1_i=0;
        var p2_i=0;
        var p3_i=0;
        var p4_i=0;
        var p5_i=0;
        var p6_i=0;

        var fecha = "";

        if(extremidad=="brazo_i" || extremidad=="brazo_d"){//lado afecto

            if(extremidad=="brazo_d"){//lado afecto es el d
                lado_sano="brazo_i";
            }
            else{
                lado_sano="brazo_d";
            }
            
            p1_i=$("#brazo_i_p1").val();
            p2_i=$("#brazo_i_p2").val();
            p3_i=$("#brazo_i_p3").val();
            p4_i=$("#brazo_i_p4").val();
            p5_i=$("#brazo_i_p5").val();

            p1_d=$("#brazo_d_p1").val();
            p2_d=$("#brazo_d_p2").val();
            p3_d=$("#brazo_d_p3").val();
            p4_d=$("#brazo_d_p4").val();
            p5_d=$("#brazo_d_p5").val(); 

            if(!tambien_brazo_sano){
                if(lado_sano=="brazo_d"){
                    p1_d= 0;
                    p2_d= 0;
                    p3_d= 0;
                    p4_d= 0;
                    p5_d= 0;
                }
                else{//brazo_i
                    p1_i= 0;
                    p2_i= 0;
                    p3_i= 0;
                    p4_i= 0;
                    p5_i= 0;
                }
            }

            fecha=$('#fecha_brazo').val();
            datos_correctos=validarMedicionesBrazo(fecha,p1_i,p2_i,p3_i,p4_i,p5_i,p1_d,p2_d,p3_d,p4_d,p5_d);
        }
       
        else if(extremidad=="pierna_d" || extremidad=="pierna_i"){
           
            if(extremidad=="pierna_d"){//lado afecto es el d
                lado_sano="pierna_i";
            }
            else{
                lado_sano="pierna_d";
            }


            p1_i=$("#pierna_i_p1").val();
            p2_i=$("#pierna_i_p2").val();
            p3_i=$("#pierna_i_p3").val();
            p4_i=$("#pierna_i_p4").val();
            p5_i=$("#pierna_i_p5").val();
            p6_i=$("#pierna_i_p6").val();

            p1_d=$("#pierna_d_p1").val();
            p2_d=$("#pierna_d_p2").val();
            p3_d=$("#pierna_d_p3").val();
            p4_d=$("#pierna_d_p4").val();
            p5_d=$("#pierna_d_p5").val();
            p6_d=$("#pierna_d_p6").val();

            if(!tambien_pierna_sana){
                if(lado_sano=="pierna_d"){
                    p1_d= 0;
                    p2_d= 0;
                    p3_d= 0;
                    p4_d= 0;
                    p5_d= 0;
                    p6_d= 0;
                }
                else{//pierna_i
                    p1_i= 0;
                    p2_i= 0;
                    p3_i= 0;
                    p4_i= 0;
                    p5_i= 0;
                    p6_i= 0;
                }
            }


            fecha=$('#fecha_pierna').val();
            datos_correctos=validarMedicionesPierna(fecha,p1_i,p2_i,p3_i,p4_i,p5_i,p6_i,p1_d,p2_d,p3_d,p4_d,p5_d,p6_d);
        }
       
        if(datos_correctos){
            $.ajax({
                type:'POST',
                url: 'control/vista.php',
                data: {id_usuario:id_usuario,fecha:fecha,extremidad:extremidad,lado_sano:lado_sano,p1_i:p1_i, p2_i:p2_i,p3_i:p3_i,p4_i:p4_i,p5_i:p5_i,p6_i:p6_i,p1_d:p1_d,p2_d:p2_d,p3_d:p3_d,p4_d:p4_d,p5_d:p5_d,p6_d:p6_d,opcion: opcion},
                })
                .done(function( msg ) {                           	
                    console.log("ajax done"); 
                    if(msg=="false"){
                        $("body").overhang({
                            type: "error",
                            message: "Error en la consulta SQL",
                            duration: 3,
                            overlay: true,
                            closeConfirm: true
                        });
                        datos_correctos_queries = false;
                    } 
                    else if(msg=="medicion"){
                        $("body").overhang({
                            type: "error",
                            message: "Error, este usuario aún no tiene una 1a medición registrada",
                            duration: 3,
                            overlay: true,
                            closeConfirm: true
                        });
                        datos_correctos_queries = false;
                    }
                    else if(msg=="fecha"){
                        $("body").overhang({
                            type: "error",
                            message: "ERROR, este usuario ya tiene una medición guardada en esta fecha.",
                            duration: 3,
                            overlay: true,
                            closeConfirm: true
                        });
                        datos_correctos_queries = false;
                    }
                    else{
                        $.notify("Medición guardada correctamente.", "success");
                    } 
                    
                    // if(datos_correctos_queries){

                    // }
                })
                .fail(function( jqXHR, textStatus, errorThrown ) {
                    if ( console && console.log ) {
                        console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                        console.log("ajax fail");
                    }
                });
        }
        
    });
});

function isEmptyOrSpaces(str){
    return str === null || str.match(/^ *$/) !== null;
}
function validarMedicionesBrazo(fecha,p1_i,p2_i,p3_i,p4_i,p5_i,p1_d,p2_d,p3_d,p4_d,p5_d){ //**
    var datos_correctos=true;
    var mensaje_error="";
    if(p1_d!==0 && p2_d!==0 && p3_d!==0 && p4_d!==0 && p5_d!==0){
        if(isEmptyOrSpaces(p1_d) || isEmptyOrSpaces(p2_d) || isEmptyOrSpaces(p3_d) || isEmptyOrSpaces(p4_d) || isEmptyOrSpaces(p5_d) ){
                mensaje_error="ERROR. Introduce todas las mediciones del brazo derecho";
                datos_correctos = false;
            } 
    }
   
    if(p1_i!==0 && p2_i!==0 && p3_i!==0 && p4_i!==0 && p5_i!==0){
        if(isEmptyOrSpaces(p1_i) || isEmptyOrSpaces(p2_i) || isEmptyOrSpaces(p3_i) || isEmptyOrSpaces(p4_i) || isEmptyOrSpaces(p5_i) ){
                mensaje_error="ERROR. Introduce todas las mediciones del brazo izquierdo";
                datos_correctos = false;
            } 
    }
    
    if(isEmptyOrSpaces(fecha)){
        mensaje_error="ERROR. Introduce una fecha";
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
function validarMedicionesPierna(fecha,p1_i,p2_i,p3_i,p4_i,p5_i,p6_i,p1_d,p2_d,p3_d,p4_d,p5_d,p6_d){
    var datos_correctos=true;
    var mensaje_error="";

    if(p1_d!==0 && p2_d!==0 && p3_d!==0 && p4_d!==0 && p5_d!==0 && p6_d!==0){
        if(isEmptyOrSpaces(p1_d) || isEmptyOrSpaces(p2_d) || isEmptyOrSpaces(p3_d) || isEmptyOrSpaces(p4_d) || isEmptyOrSpaces(p5_d) || isEmptyOrSpaces(p6_d) ){
                mensaje_error="ERROR. Introduce todas las mediciones de la pierna derecha";
                datos_correctos = false;
            } 
    }
    if(p1_i!==0 && p2_i!==0 && p3_i!==0 && p4_i!==0 && p5_i!==0 && p6_i!==0){
        if(isEmptyOrSpaces(p1_i) || isEmptyOrSpaces(p2_i) || isEmptyOrSpaces(p3_i) || isEmptyOrSpaces(p4_i) || isEmptyOrSpaces(p5_i) || isEmptyOrSpaces(p6_i) ){
                mensaje_error="ERROR. Introduce todas las mediciones de la pierna izquierda";
                datos_correctos = false;
            } 
    }
    if(isEmptyOrSpaces(fecha)){
        mensaje_error="ERROR. Introduce una fecha";
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