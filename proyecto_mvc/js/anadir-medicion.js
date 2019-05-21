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

                jQuery("input[id=brazo_d_p1]").attr('disabled',true);
                jQuery("input[id=brazo_d_p2]").attr('disabled',true);
                jQuery("input[id=brazo_d_p3]").attr('disabled',true);
                jQuery("input[id=brazo_d_p4]").attr('disabled',true);
                jQuery("input[id=brazo_d_p5]").attr('disabled',true);
           }
           else if(msg=="brazo_d"){//brazo i lado sano
                
                extremidad="brazo_d";
                jQuery("input[id=pierna]:radio").attr('disabled',true);
                $("#panel-brazo").css("display","block");
                $("#panel-pierna").css("display","none");

                jQuery("input[id=miembro_sano_brazo_i]:radio").attr('checked',true);
                jQuery("input[id=miembro_sano_brazo_d]:radio").attr('disabled',true);

                jQuery("input[id=brazo_i_p1]").attr('disabled',true);
                jQuery("input[id=brazo_i_p2]").attr('disabled',true);
                jQuery("input[id=brazo_i_p3]").attr('disabled',true);
                jQuery("input[id=brazo_i_p4]").attr('disabled',true);
                jQuery("input[id=brazo_i_p5]").attr('disabled',true);
                
            }
            else if(msg=="pierna_d"){//pierna i lado sano

                extremidad="pierna_d";
                jQuery("input[id=brazo]:radio").attr('disabled',true);
                jQuery("input[id=pierna]:radio").attr('checked',true);
                $("#panel-brazo").css("display","none");
                $("#panel-pierna").css("display","block");

                jQuery("input[id=miembro_sano_pierna_i]:radio").attr('checked',true);
                jQuery("input[id=miembro_sano_pierna_d]:radio").attr('disabled',true);

                jQuery("input[id=pierna_i_p1]").attr('disabled',true);
                jQuery("input[id=pierna_i_p2]").attr('disabled',true);
                jQuery("input[id=pierna_i_p3]").attr('disabled',true);
                jQuery("input[id=pierna_i_p4]").attr('disabled',true);
                jQuery("input[id=pierna_i_p5]").attr('disabled',true);
                jQuery("input[id=pierna_i_p6]").attr('disabled',true);
            }
            else if(msg=="pierna_i"){//pierna d lado sano

                extremidad="pierna_i";
                jQuery("input[id=brazo]:radio").attr('disabled',true);
                jQuery("input[id=pierna]:radio").attr('checked',true);
                $("#panel-brazo").css("display","none");
                $("#panel-pierna").css("display","block");

                jQuery("input[id=miembro_sano_pierna_d]:radio").attr('checked',true);
                jQuery("input[id=miembro_sano_pierna_i]:radio").attr('disabled',true);

                jQuery("input[id=pierna_d_p1]").attr('disabled',true);
                jQuery("input[id=pierna_d_p2]").attr('disabled',true);
                jQuery("input[id=pierna_d_p3]").attr('disabled',true);
                jQuery("input[id=pierna_d_p4]").attr('disabled',true);
                jQuery("input[id=pierna_d_p5]").attr('disabled',true);
                jQuery("input[id=pierna_d_p6]").attr('disabled',true);
                
            }
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("ajax false");
    });

    $("#btn-submit-9").click(function(event){
                    
        event.preventDefault();
       
        var opcion= "registro_nueva_medicion";
        var datos_correctos=true;
        var datos_correctos_queries=true;
        
        var p1=0;
        var p2=0;
        var p3=0;
        var p4=0;
        var p5=0;
        var p6=0;
        var fecha = "";

        if(extremidad=="brazo_i"){//lado afecto
            p1=$("#brazo_i_p1").val();
            p2=$("#brazo_i_p2").val();
            p3=$("#brazo_i_p3").val();
            p4=$("#brazo_i_p4").val();
            p5=$("#brazo_i_p5").val();
            fecha=$('#fecha_brazo').val();
            datos_correctos=validarMedicionesBrazo(fecha,p1,p2,p3,p4,p5);
        }
        else if(extremidad=="brazo_d"){
            p1=$("#brazo_d_p1").val();
            p2=$("#brazo_d_p2").val();
            p3=$("#brazo_d_p3").val();
            p4=$("#brazo_d_p4").val();
            p5=$("#brazo_d_p5").val(); 
            fecha=$('#fecha_brazo').val();
            datos_correctos=validarMedicionesBrazo(fecha,p1,p2,p3,p4,p5);
        }
        else if(extremidad=="pierna_d"){
            p1=$("#pierna_d_p1").val();
            p2=$("#pierna_d_p2").val();
            p3=$("#pierna_d_p3").val();
            p4=$("#pierna_d_p4").val();
            p5=$("#pierna_d_p5").val();
            p6=$("#pierna_d_p6").val();
            fecha=$('#fecha_pierna').val();
            datos_correctos=validarMedicionesPierna(fecha,p1,p2,p3,p4,p5,p6);
        }
        else if(extremidad=="pierna_i"){
            p1=$("#pierna_i_p1").val();
            p2=$("#pierna_i_p2").val();
            p3=$("#pierna_i_p3").val();
            p4=$("#pierna_i_p4").val();
            p5=$("#pierna_i_p5").val();
            p6=$("#pierna_i_p6").val();
            fecha=$('#fecha_pierna').val();
            datos_correctos=validarMedicionesPierna(fecha,p1,p2,p3,p4,p5,p6);
        }
        if(datos_correctos){//brazo_i/d, pierna_i/d
            $.ajax({
                type:'POST',
                url: 'control/vista.php',
                data: {id_usuario:id_usuario,fecha:fecha,extremidad:extremidad,p1:p1,p2:p2,p3:p3,p4:p4,p5:p5,p6:p6,opcion:opcion},
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
function validarMedicionesBrazo(fecha,p1,p2,p3,p4,p5){ //**
    var datos_correctos=true;
    var mensaje_error="";

    if(isEmptyOrSpaces(p1) || isEmptyOrSpaces(p2) || isEmptyOrSpaces(p3) || isEmptyOrSpaces(p4) || isEmptyOrSpaces(p5) ){
        mensaje_error="ERROR. Introduce todas las mediciones del brazo";
        datos_correctos = false;
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
function validarMedicionesPierna(fecha,p1,p2,p3,p4,p5,p6){ //**
    var datos_correctos=true;
    var mensaje_error="";

    if(isEmptyOrSpaces(p1) || isEmptyOrSpaces(p2) || isEmptyOrSpaces(p3) || isEmptyOrSpaces(p4) || isEmptyOrSpaces(p5) || isEmptyOrSpaces(p6)){
        mensaje_error="ERROR. Introduce todas las mediciones de la pierna";
        datos_correctos = false;
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
