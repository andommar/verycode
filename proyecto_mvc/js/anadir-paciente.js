
            var id_user =0;
            var id_especialista = "";
            var form_1="no";
            var form_2="no";
            var form_3="no";
            var form_4="no";
            var form_5="no";
            var form_6="no";
            var form_7="no";
            var form_8="no";
            var form_9="no";

 //  =============================== MOSTRAR Y ESCONDER FORMULARIOS  =========================================== 

            // function mostrarFormulario(boton){
            
            //     $(document).ready(function(){

            //         //Ha registrado al usuario
            //         if(id_user!=""){

            //             if(boton=='datos-personales'){
            //                 $("body").overhang({
            //                             type: "error",
            //                             message: "ERROR, ya has registrado los datos personales del paciente.",
            //                             duration: 6,
            //                             overlay: true,
            //                             closeConfirm: true
            //                 });
                           
            //             }
            //             else{
            //                      //Escondemos todos los formularios y marcamos en gris los botones
                            
            //                 // $("#btn-datos-personales").css("background-color","rgb(109, 109, 109)");
            //                 // $("#btn-historial-clinico").css("background-color","rgb(109, 109, 109)");
            //                 // $("#btn-cirugias").css("background-color","rgb(109, 109, 109)");
            //                 // $("#btn-medicamentos").css("background-color","rgb(109, 109, 109)");
            //                 // $("#btn-infecciones").css("background-color","rgb(109, 109, 109)");
            //                 // $("#btn-habitos").css("background-color","rgb(109, 109, 109)");
            //                 // $("#btn-historial-trat-linf").css("background-color","rgb(109, 109, 109)");
            //                 // $("#btn-valoracion-linfedema").css("background-color","rgb(109, 109, 109)");
            //                 // $("#btn-medicion").css("background-color","rgb(109, 109, 109)");

            //                 //mostramos el formulario clicado
            //                 switch(boton){
            //                                 case 'historial-clinico':

                                               

            //                                 break;
            //                                 case 'cirugias':
            //                                     if(form_2=="si"){
                                                    
            //                                     }
            //                                     else{
            //                                         // mensaje popup de error
            //                                         $("body").overhang({
            //                                             type: "error",
            //                                             message: "ERROR, para rellenar más formularios debes registrar primero los anteriores.",
            //                                             duration: 6,
            //                                             overlay: true,
            //                                             closeConfirm: true
            //                                         });
            //                                     }
                                            

            //                                 break;
            //                                 case 'medicamentos':
                                                
            //                                 if(form_2=="si" && form_3=="si"){
                                               
            //                                 }
            //                                 else{
            //                                     // mensaje popup de error
            //                                     $("body").overhang({
            //                                         type: "error",
            //                                         message: "ERROR, para rellenar más formularios debes registrar primero los anteriores.",
            //                                         duration: 6,
            //                                         overlay: true,
            //                                         closeConfirm: true
            //                                     });
            //                                 }
                                               
                                            
            //                                     break;
            //                                 case 'infecciones':
                                                    
            //                                     if(form_2=="si" && form_3=="si" && form_4=="si"){
                                                  
            //                                     }   
            //                                     else{
            //                                         // mensaje popup de error
            //                                         $("body").overhang({
            //                                             type: "error",
            //                                             message: "ERROR, para rellenar más formularios debes registrar primero los anteriores.",
            //                                             duration: 6,
            //                                             overlay: true,
            //                                             closeConfirm: true
            //                                         });
            //                                     }
            //                                 break;
            //                                 case 'habitos':

            //                                         if(form_2=="si" && form_3=="si" && form_4=="si" && form_5=="si"){
                                                       

            //                                         }   
            //                                         else{
            //                                             // mensaje popup de error
            //                                             $("body").overhang({
            //                                                 type: "error",
            //                                                 message: "ERROR, para rellenar más formularios debes registrar primero los anteriores.",
            //                                                 duration: 6,
            //                                                 overlay: true,
            //                                                 closeConfirm: true
            //                                             });
            //                                         }
                                                
                                               
            //                                 break;
            //                                 case 'historial-trat-linf':
                                                
            //                                         if(form_2=="si" && form_3=="si" && form_4=="si" && form_5=="si" && form_6=="si"){
                                                      
            //                                             // $( "html,body" ).animate({
            //                                             //     scrollTop: $("#apartado-hist-trat-linf").offset().top
            //                                             //     }, 500, function() {
            //                                             //     // Animation complete.
            //                                             //     });
        

            //                                         }   
            //                                         else{
            //                                             // mensaje popup de error
            //                                             $("body").overhang({
            //                                                 type: "error",
            //                                                 message: "ERROR, para rellenar más formularios debes registrar primero  los anteriores.",
            //                                                 duration: 6,
            //                                                 overlay: true,
            //                                                 closeConfirm: true
            //                                             });
            //                                         }

                                               
            //                                 break;
            //                                 case 'valoracion-linfedema':
                                                

            //                                     if(form_2=="si" && form_3=="si" && form_4=="si" && form_5=="si" && form_6=="si" && form_7=="si"){
                                                    
                                                   
            //                                     }   
            //                                     else{
            //                                         // mensaje popup de error
            //                                         $("body").overhang({
            //                                             type: "error",
            //                                             message: "ERROR, para rellenar más formularios debes registrar primero  los anteriores.",
            //                                             duration: 6,
            //                                             overlay: true,
            //                                             closeConfirm: true
            //                                         });
            //                                     }

                                              

            //                                 break;
            //                                 case 'medicion':
                                                
            //                                     if(form_2=="si" && form_3=="si" && form_4=="si" && form_5=="si" && form_6=="si" && form_7=="si" && form_8=="si"){
                                                

            //                                     }   
            //                                     else{
            //                                         // mensaje popup de error
            //                                         $("body").overhang({
            //                                             type: "error",
            //                                             message: "ERROR, para rellenar más formularios debes registrar primero  los anteriores.",
            //                                             duration: 6,
            //                                             overlay: true,
            //                                             closeConfirm: true
            //                                         });
            //                                     }
            //                                 break;
            //                 }
            //             }
                       
            //         }
            //         //No ha registrado al usuario
            //         else{
            //             // mensaje popup de error
            //             $("body").overhang({
            //                             type: "error",
            //                             message: "ERROR, para rellenar más formularios debes registrar los datos personales del paciente primero.",
            //                             duration: 6,
            //                             overlay: true,
            //                             closeConfirm: true
            //             });
            //         }
            //     });
            // }


            $(document).ready(function(){

                //  =============================== EVENTOS  =========================================== 

                //Según lo que seleccione en el origen del linfedema (primario) le mostramos un select diferente en secundario
                //Eso, una vez seleccione la primera opción
                
                $("#tipo_congenito").change(function(){
                    
                    var tipo_congenito = this.value; //valor option del select
                    
                    if(tipo_congenito=="Secundario"){
                        
                        $("#subtipo_congenito").html("");

                        var $cancer = $("<optgroup label='Cáncer'>");
                        $('#subtipo_congenito').append($cancer);

                        $cancer.append($('<option>', { 
                                //value:"bla",
                                text :  "Mama"
                        }));
                        $cancer.append($('<option>', { 
                                text :  "Ginecológico"
                        }));

                        $cancer.append($('<option>', { 
                                text :  "Próstata"
                        }));

                        $cancer.append($('<option>', { 
                                text :  "Cara"
                        }));

                        $cancer.append($('<option>', {
                                text :  "Linfoma"
                        }));

                        $cancer.append($('<option>', {
                                text :  "Otro"
                        }));

                        var $accidente = $("<optgroup label='Accidente'>");
                        $('#subtipo_congenito').append($accidente);

                        $accidente.append($('<option>', {
                                text :  "Accidente"
                        }));

                    }
                    else{//Secundario
                        $("#subtipo_congenito").html("");

                        $('#subtipo_congenito').append($('<option>', { 
                                text :  "Precoz"
                        }));

                        $('#subtipo_congenito').append($('<option>', { 
                                text :  "Tardío"
                        }));
                       
                    }
                });


                $("#subtipo_congenito").change(function(){
                    var subtipo_congenito = this.value; //valor option del select
                    if(subtipo_congenito=="Otro" || subtipo_congenito=="Accidente"){
                        $('#subtipo_congenito_otro').prop('disabled', false);
                    }
                    else{
                         $('#subtipo_congenito_otro').prop('disabled', true);
                    }
                });

                $("#motivo_secundario").change(function(){
                    var motivo_secundario = this.value; //valor option del select
                    if(motivo_secundario=="Otro"){
                        $('#motivo_secundario_otro').prop('disabled', false);
                    }
                    else{
                         $('#motivo_secundario_otro').prop('disabled', true);
                    }
                });
                
                $("#fumador").change(function(){
                    var fumador = this.value; //valor option del select
                    if(fumador=="no"){
                        $('#cigarros').prop('disabled', true);
                        $('#frec_cigarros').prop('disabled', true);
                        $('#fumador_social').prop('disabled', true);
                    }
                    else{
                        $('#cigarros').prop('disabled', false);
                        $('#frec_cigarros').prop('disabled', false);
                        $('#fumador_social').prop('disabled', false);
                    }
                });

                $("#toma_alcohol").change(function(){
                    var toma_alcohol = this.value; //valor option del select
                    if(toma_alcohol=="no"){
                        $('#frec_alcohol').prop('disabled', true);
                        $('#alcohol').prop('disabled', true);
                        $('#tipo_alcohol').prop('disabled', true);
                    }
                    else{
                        $('#frec_alcohol').prop('disabled', false);
                        $('#alcohol').prop('disabled', false);
                        $('#tipo_alcohol').prop('disabled', false);
                    }
                });

                $("#hace_deporte").change(function(){
                    var hace_deporte = this.value; //valor option del select
                    if(hace_deporte=="no"){
                        $('#frec_deporte').prop('disabled', true);
                        $('#tipo_deporte').prop('disabled', true);
                        $('#t_sesion').prop('disabled', true);
                        $('#t_sesion_medidas').prop('disabled', true);
                    }
                    else{
                        $('#frec_deporte').prop('disabled', false);
                        $('#tipo_deporte').prop('disabled', false);
                        $('#t_sesion').prop('disabled', false);
                        $('#t_sesion_medidas').prop('disabled', false);
                    }
                });
                $("#alimentacion").change(function(){
                    var alimentacion = this.value; //valor option del select
                    if(alimentacion=="otro"){
                        $('#alimentacion_otro').prop('disabled', false);
                      
                    }
                    else{
                        $('#alimentacion_otro').prop('disabled', true);
                    }
                });

                $("#satisfecho_result").change(function(){
                    var satisfecho_result = this.value; //valor option del select
                    if(satisfecho_result=="no"){
                        $('#fallo_terapia').prop('disabled', false);
                    }
                    else{
                         $('#fallo_terapia').prop('disabled', true);
                    }
                });

                $("#fallo_terapia").change(function(){
                    var fallo_terapia = this.value; //valor option del select
                    if(fallo_terapia=="otro"){
                        $('#fallo_terapia_otro').prop('disabled', false);
                    }
                    else{
                         $('#fallo_terapia_otro').prop('disabled', true);
                    }
                });
               
                $("#tipo_drenaje_linfa").change(function(){
                    var tipo_drenaje_linfa = this.value; //valor option del select
                    if(tipo_drenaje_linfa=="Otros"){
                        $('#tipo_drenaje_linfa_otro').prop('disabled', false);
                    }
                    else{
                         $('#tipo_drenaje_linfa_otro').prop('disabled', true);
                    }
                });
                $("#contencion_tipo").change(function(){
                    var contencion_tipo = this.value; //valor option del select
                    if(contencion_tipo=="Otro"){
                        $('#contencion_tipo_otro').prop('disabled', false);
                    }
                    else{
                         $('#contencion_tipo_otro').prop('disabled', true);
                    }
                });
                
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
    
               


    //  =============================== AJAX DE LOS FORMULARIOS =========================================== 
                
                //  =============================== USUARIO ===========================================  

                $("#form-1").submit(function(event){
                        event.preventDefault();
                        var datos_correctos_queries = true;


                        var nombre =$('#nombre').val();
                        var apellido1=$('#apellido1').val();
                        var apellido2=$('#apellido2').val();
                        var correo =$('#correo').val();
                        var pass =$('#pass').val();
                        var pass2=$('#pass2').val();
                        id_especialista=$('#btn-submit-1').val(); 
                        var opcion="registro_paciente";

                        
                        if(validarDatosPersonales(nombre,apellido1,apellido2,correo,pass,pass2)){
                            $.ajax({
                            type:'POST',
                            url: 'control/vista.php',
                            data: {nombre: nombre, apellido1: apellido1, apellido2: apellido2, correo: correo,id_especialista: id_especialista, pass: pass, pass2: pass2, opcion: opcion}
                            })
                            .done(function( msg ) {
                                // console.log(msg);
                                // console.log(msg[0]);
                                // console.log(msg[1]);
                                var resultado = $.parseJSON(msg);
                                // console.log(resultado[0]);
                                // console.log(resultado[1]);
                               
                                // console.log(msg);                             	
                                // console.log("ajax done"); 
                                if(resultado[1]=="false"){
                                    $("body").overhang({
                                        type: "error",
                                        message: "Error en la consulta sql",
                                        duration: 3,
                                        overlay: true,
                                        closeConfirm: true
                                    });
                                    datos_correctos_queries = false;
                                }
                                else if(resultado[1]=="correo"){
                                    $("body").overhang({
                                        type: "error",
                                        message: "ERROR. Este correo ya está en uso",
                                        duration: 3,
                                        overlay: true,
                                        closeConfirm: true
                                    });
                                    datos_correctos_queries = false;
                                }
                                else{
                                    id_user=resultado[0];
                                    $.notify("Datos personales guardados correctamente", "success");
                                }

                                if(datos_correctos_queries){
                                    form_1="si";
                                   
                                    $("#apartado-usuario").css("display","none");
                                    $("#apartado-historial").css("display","block");

                                    $("#btn-historial-clinico").css("background-color","#7037f4");
                                   
                                    $( "html,body" ).animate({
                                        scrollTop: $("#grupo-titulo-pagina").offset().top
                                      }, 500, function() {
                                        // Animation complete.
                                      });
                                }
                                
                            })
                            .fail(function( jqXHR, textStatus, errorThrown ) {
                                if ( console && console.log ) {
                                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                    // console.log("ajax fail");
                                }
                            });
                        }
                       
                });

                //  =============================== HISTORIAL CLÍNICO  ===========================================  **

                $("#form-2").submit(function(event){    

                    event.preventDefault();

                    $('#subtipo_congenito_otro').css("border","1px solid #ced4da");
                    $('#motivo_secundario_otro').css("border","1px solid #ced4da");

                    var datos_correctos = true; 
                    var datos_correctos_queries = true;

                    var doc_identificacion=$('#doc_identificacion').val();
                    var nacionalidad = $('#nacionalidad').val();
                    var raza = $('#raza').val();
                    var fecha_nacimiento = $('#fecha_nacimiento').val();
                    var sexo = $('#sexo').val();
                    var altura = $('#altura').val(); 
                    var peso = $('#peso').val();
                    var tipo_congenito = $('#tipo_congenito').val();
                    var subtipo_congenito = $('#subtipo_congenito').val();
                    if(subtipo_congenito=="Otro" || subtipo_congenito=="Accidente"){
                        subtipo_congenito= $('#subtipo_congenito_otro').val();
                    }
                    var fecha_debut = $('#fecha_debut').val();
                    var familiar_linfedema = $('#familiar_linfedema').val();
                    var motivo_secundario = $('#motivo_secundario').val();
                    
                    if(motivo_secundario=="Otro"){
                        motivo_secundario=$('#motivo_secundario_otro').val();
                    }
                    var ant_vasculares = 'no';
                    var ant_infeccion_venosa = 'no';
                    var ant_sobrepeso = 'no';
                    var ant_lipedema = 'no';
                    var ant_permeabilidad_cap = 'no';
                    var ant_ansiedad = 'no';
                    var ant_diabetes = 'no';
                    var ant_triquiasis = 'no';
                    var ant_sindromes = $('#ant_sindromes').val();
                    if($('#ant_vasculares').prop('checked')){
                        ant_vasculares = 'si';
                    }
                    if($('#ant_infeccion_venosa').prop('checked')){
                        ant_infeccion_venosa='si';
                    }
                    if($('#ant_sobrepeso').prop('checked')){
                            ant_sobrepeso='si';
                    }
                    if($('#ant_lipedema').prop('checked')){
                            ant_lipedema='si';
                    }
                    if($('#ant_permeabilidad_cap').prop('checked')){
                            ant_permeabilidad_cap='si';
                    }
                    if($('#ant_ansiedad').prop('checked')){
                            ant_ansiedad='si';
                    }
                    if($('#ant_diabetes').prop('checked')){
                            ant_diabetes='si';
                    }
                    if($('#ant_triquiasis').prop('checked')){
                            ant_triquiasis='si';
                    }
                    
                    var profesion = $('#profesion').val();
                    var grado_resp_profesion = $('#grado_resp_profesion').val();
                    var grado_stress_profesion = $('#grado_stress_profesion').val();
                    var opcion= "registro_historial_clinico";

                    datos_correctos = validarHistorialClinico(doc_identificacion,nacionalidad,raza,
                                        fecha_nacimiento,sexo,altura, peso, tipo_congenito, subtipo_congenito,fecha_debut,
                                        familiar_linfedema,motivo_secundario,ant_vasculares,ant_infeccion_venosa, 
                                        ant_sobrepeso, ant_lipedema, ant_permeabilidad_cap, ant_ansiedad,ant_diabetes, 
                                        ant_triquiasis, ant_sindromes, profesion,grado_resp_profesion,grado_stress_profesion);
                    
                    if(datos_correctos){
                        //peso = num.toFixed(2);
                        //altura = num.toFixed(2);

                        $.ajax({
                        method: "POST",
                        url: 'control/vista.php',
                        data: {id_user: id_user, doc_identificacion: doc_identificacion, opcion: opcion,
                            nacionalidad: nacionalidad, raza: raza, fecha_nacimiento: fecha_nacimiento, 
                            sexo: sexo, altura: altura, peso: peso, tipo_congenito: tipo_congenito, subtipo_congenito: subtipo_congenito, 
                            fecha_debut: fecha_debut, familiar_linfedema: familiar_linfedema, motivo_secundario: motivo_secundario, ant_vasculares: ant_vasculares,
                            ant_infeccion_venosa: ant_infeccion_venosa, ant_sobrepeso: ant_sobrepeso, ant_lipedema: ant_lipedema, ant_permeabilidad_cap: ant_permeabilidad_cap, ant_ansiedad: ant_ansiedad,
                            ant_diabetes:ant_diabetes, ant_triquiasis: ant_triquiasis, ant_sindromes: ant_sindromes, profesion: profesion,
                            grado_resp_profesion: grado_resp_profesion, grado_stress_profesion: grado_stress_profesion 
                        },
                        })
                        .done(function( msg ) {   
                                                 	
                            // console.log("ajax done");
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
                            else if(msg=="historial"){
                                $("body").overhang({
                                    type: "error",
                                    message: "ERROR, este paciente ya tiene un historial clínico registrado",
                                    duration: 3,
                                    overlay: true,
                                    closeConfirm: true
                                });
                                datos_correctos_queries = false;
                            }
                            else{
                                $.notify("Historial clínico guardado correctamente", "success");
                            }
                            if(datos_correctos_queries){

                                form_2="si";
                                   
                                $("#apartado-historial").css("display","none");
                                $("#apartado-cirugias").css("display","block");

                                $("#btn-cirugias").css("background-color","#e83e8c");

                                $( "html,body" ).animate({
                                    scrollTop: $("#grupo-titulo-pagina").offset().top
                                  }, 500, function() {
                                    // Animation complete.
                                  });
                            }
                        })
                        .fail(function( jqXHR, textStatus, errorThrown ) {
                            if ( console && console.log ) {
                                console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                            }
                        });
                    }
                    

                });




                //  =============================== CIRUGIAS  ===========================================


                $("#form-3").submit(function(event){
                        event.preventDefault();
                        var datos_correctos_queries = true;

                        var nombre_cirugia=$('#nombre_cirugia').val();
                        var fecha = $('#fecha_cirugia').val();
                        var comentarios = $('#comentarios').val();
                        var opcion= "registro_cirugias";

                        if(validarCirugias(nombre_cirugia,fecha,comentarios)){

                            $.ajax({
                            type:'POST',
                            url: 'control/vista.php',
                            data: {id_user:id_user, nombre_cirugia:nombre_cirugia, fecha: fecha, comentarios: comentarios, opcion:opcion},
                            })
                            .done(function( msg ) {
                                // console.log("ajax done");
                                if(msg=="false"){
                                    $.notify("Error en la consulta SQL", "error");
                                    datos_correctos_queries = false;
                                }
                                else if(msg=="cirugia"){
                                    $("body").overhang({
                                        type: "error",
                                        message: "ERROR. Los datos de esta cirugía ya existen.",
                                        duration: 3,
                                        overlay: true,
                                        closeConfirm: true
                                    });
                                    datos_correctos_queries = false;
                                }
                                else{
                                    $.notify("Cirugía guardada correctamente.", "success");
                                }
                                
                                if(datos_correctos_queries){

                                    form_3="si";

                                }
                            })
                            .fail(function( jqXHR, textStatus, errorThrown ) {
                                if ( console && console.log ) {
                                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                    // console.log("ajax fail");
                                }
                            });
                        }
                        
                });

                //SIGUIENTE | CIRUGÍAS

                $( "#btn-submit-3" ).click(function() {
                    
                    if(form_3=="si"){
                        $("#apartado-cirugias").css("display","none");
                        $("#apartado-medicamentos").css("display","block");

                        $("#btn-medicamentos").css("background-color","#dc3545");

                        $( "html,body" ).animate({
                            scrollTop: $("#grupo-titulo-pagina").offset().top
                          }, 500, function() {
                            // Animation complete.
                          });
                    }
                    else{//aún no ha registrado cirugías
                        $("body").overhang({
                            type: "error",
                            message: "ERROR. Registra alguna cirugía para continuar.",
                            duration: 3,
                            overlay: true,
                            closeConfirm: true
                        });
                    }

                });


                //  =============================== MEDICAMENTOS  ===========================================


                $("#form-4").submit(function(event){
                    
                    event.preventDefault();
                    var datos_correctos_queries = true;
                    var medicamento=$('#medicamento').val();
                    var patologias = $('#patologias').val();
                    var opcion= "registro_medicamento";

                    if(validarMedicamentos(medicamento,patologias)){
                        $.ajax({
                            type:'POST',
                            url: 'control/vista.php',
                            data: {id_user:id_user, medicamento:medicamento, patologias:patologias, opcion:opcion},
                            })
                            .done(function( msg ) {                           	
                                // console.log("Ajax done"); 
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
                                else if(msg=="medicamento"){
                                    $("body").overhang({
                                        type: "error",
                                        message: "ERROR. Los datos del medicamento ya existen.",
                                        duration: 3,
                                        overlay: true,
                                        closeConfirm: true
                                    });
                                    datos_correctos_queries = false;
                                }
                                else{
                                    $.notify("Medicamento guardado correctamente.", "success");
                                }
                                if(datos_correctos_queries){

                                    form_4="si";
                                }

                            })
                            .fail(function( jqXHR, textStatus, errorThrown ) {
                                if ( console && console.log ) {
                                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                    // console.log("ajax fail");
                                }
                        });
                    }
                    
                    
                });

                //SIGUIENTE | MEDICAMENTOS

                $( "#btn-submit-4" ).click(function() {
                    
                    if(form_4=="si"){
                        
                        $("#apartado-medicamentos").css("display","none");
                        $("#apartado-infecciones").css("display","block");

                        $("#btn-infecciones").css("background-color","#fd7e14");

                        $( "html,body" ).animate({
                            scrollTop: $("#grupo-titulo-pagina").offset().top
                          }, 500, function() {
                            // Animation complete.
                          });
                    }
                    else{//aún no ha registrado cirugías
                        $("body").overhang({
                            type: "error",
                            message: "ERROR. Registra algún medicamento para continuar.",
                            duration: 3,
                            overlay: true,
                            closeConfirm: true
                        });
                    }

                });

                //  =============================== INFECCIÓN  ===========================================

                $("#form-5").submit(function(event){
                        event.preventDefault();


                    var tipo_inf=$('#tipo_inf').val();
                    var medicamentos_inf = $('#medicamentos_inf').val(); 
                    var fecha_inf = $('#fecha_inf').val();
                    var opcion= "registro_infeccion";
                    var datos_correctos_queries = true;

                    if(validarInfecciones(tipo_inf, medicamentos_inf)){
                         $.ajax({
                        type:'POST',
                        url: 'control/vista.php',
                        data: {id_user:id_user, tipo_inf:tipo_inf, medicamentos_inf:medicamentos_inf, fecha_inf:fecha_inf, opcion:opcion},
                        })
                        .done(function( msg ) {
                            // console.log(msg);                             	
                            // console.log("ajax done");
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
                            else if(msg=="infeccion"){
                                $("body").overhang({
                                    type: "error",
                                    message: "ERROR, esta infección ya está registrada",
                                    duration: 3,
                                    overlay: true,
                                    closeConfirm: true
                                });
                                datos_correctos_queries = false;
                            }
                            else{
                                $.notify("Infección guardada correctamente.", "success");
                            }
                            if(datos_correctos_queries){

                                form_5="si";
                            }

                        })
                        .fail(function( jqXHR, textStatus, errorThrown ) {
                            if ( console && console.log ) {
                                console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                // console.log("ajax fail");
                            }
                        });
                    }
                });

                //SIGUIENTE | INFECCION

                $( "#btn-submit-5" ).click(function() {
                    
                    if(form_5=="si"){
                        
                        $("#apartado-infecciones").css("display","none");
                        $("#apartado-habitos").css("display","block");

                        $("#btn-habitos").css("background-color","#ffc107");

                        $( "html,body" ).animate({
                            scrollTop: $("#grupo-titulo-pagina").offset().top
                        }, 500, function() {
                            // Animation complete.
                        });
                    }
                    else{//aún no ha registrado cirugías
                        $("body").overhang({
                            type: "error",
                            message: "ERROR. Registra alguna infección para continuar.",
                            duration: 3,
                            overlay: true,
                            closeConfirm: true
                        });
                    }

                });


                //  =============================== HÁBITOS  ===========================================


                $("#form-6").submit(function(event){
                    
                    event.preventDefault();
                    var datos_correctos = true;
                    var datos_correctos_queries = true;
              
                    var fumador=$('#fumador').val();
                    var cigarros=$('#cigarros').val();
                    var frec_cigarros=$('#frec_cigarros').val();
                    var fumador_social = $('#fumador_social').val();
                    if(fumador=="no"){
                       cigarros="";
                       frec_cigarros="";
                       fumador_social ="";
                    }
                    var toma_alcohol= $('#toma_alcohol').val();
                    var frec_alcohol = $('#frec_alcohol').val();
                    var alcohol = $('#alcohol').val();
                    var tipo_alcohol = $('#tipo_alcohol').val();
                    if(toma_alcohol=="no"){
                        frec_alcohol="";
                        alcohol="";
                        tipo_alcohol="";
                    }
                    var hace_deporte = $('#hace_deporte').val();
                    var frec_deporte = $('#frec_deporte').val();
                    var tipo_deporte = $('#tipo_deporte').val();
                    var t_sesion = $('#t_sesion').val();
                    var t_sesion_medidas = $('#t_sesion_medidas').val();
                    if(hace_deporte=="no"){
                        frec_deporte="";
                        tipo_deporte="";
                        t_sesion="";
                        t_sesion_medidas="";
                    }
                    var alimentacion = $('#alimentacion').val();
                    if(alimentacion=="otro"){
                        alimentacion = $('#alimentacion_otro').val();
                    }
                   
                    var suenyo_reparador = $('#suenyo_reparador').val();
                    var h_suenyo = $('#h_suenyo').val();
                    var astenico = $('#astenico').val();
                    var erg_sentado = $('#erg_sentado').val();
                    var erg_bidepes_pasiva = $('#erg_bidepes_pasiva').val();
                    var erg_bidepes_activa = $('#erg_bidepes_activa').val();
                    var erg_otro = $('#erg_otro').val();
                    var opcion= "registro_habitos";
                    
                   datos_correctos= validarHabitos($('#tipo_alcohol').val(),$('#alcohol').val(),toma_alcohol,fumador,$('#cigarros').val(),hace_deporte, $('#t_sesion').val(), alimentacion);
                    if(datos_correctos){
                        $.ajax({
                        type:'POST',
                        url: 'control/vista.php',
                        data: {id_user:id_user, fumador:fumador,cigarros:cigarros,frec_cigarros:frec_cigarros,fumador_social:fumador_social,toma_alcohol:toma_alcohol, alcohol:alcohol, 
                        frec_alcohol:frec_alcohol, tipo_alcohol:tipo_alcohol, hace_deporte:hace_deporte, frec_deporte:frec_deporte, tipo_deporte:tipo_deporte, t_sesion:t_sesion,
                        t_sesion_medidas:t_sesion_medidas, alimentacion:alimentacion, suenyo_reparador:suenyo_reparador, h_suenyo:h_suenyo, astenico:astenico, 
                        erg_sentado:erg_sentado, erg_bidepes_pasiva:erg_bidepes_pasiva, erg_bidepes_activa:erg_bidepes_activa, erg_otro:erg_otro, opcion:opcion}
                        })
                        .done(function( msg ) {

                            // console.log("ajax done "); 
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
                            else if(msg=="habito"){
                                $("body").overhang({
                                    type: "error",
                                    message: "ERROR, este usuario ya tiene sus hábitos registrados",
                                    duration: 3,
                                    overlay: true,
                                    closeConfirm: true
                                });
                                datos_correctos_queries = false;
                            }
                            else{
                                $.notify("Hábitos guardados correctamente.", "success");
                            }
                            if(datos_correctos_queries){

                                form_6="si";

                                $("#apartado-habitos").css("display","none");
                                $("#apartado-hist-trat-linf").css("display","block");

                                $("#btn-historial-trat-linf").css("background-color","#28a745");

                                $( "html,body" ).animate({
                                    scrollTop: $("#grupo-titulo-pagina").offset().top
                                }, 500, function() {
                                    // Animation complete.
                                });

                            }

                        })
                        .fail(function( jqXHR, textStatus, errorThrown ) {
                            if ( console && console.log ) {
                                console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                // console.log("ajax fail");
                            }
                        });
                    }
                });

                //  =============================== HISTORIAL TRATAMIENTO LINFEDEMA  ===========================================

                $("#form-7").submit(function(event){
                     
                    event.preventDefault();

                    var datos_correctos = true;
                    var datos_correctos_queries = true;
                    var fecha_ult_tratamiento=$('#fecha_ult_tratamiento').val();
                    var satisfecho_result = $('#satisfecho_result').val();
                    var fallo_terapia="";
                    if(satisfecho_result=="no"){
                        if($('#fallo_terapia').val()=="otro"){
                            fallo_terapia = $('#fallo_terapia_otro').val(); 
                        }
                        else{
                           fallo_terapia = $('#fallo_terapia').val(); 
                        }
                        
                    }
                    var tipo_drenaje_linfa = $('#tipo_drenaje_linfa').val();
                    if(tipo_drenaje_linfa=="Otros"){
                        tipo_drenaje_linfa = $('#tipo_drenaje_linfa_otro').val();
                    }
                    var vendaje = $('#vendaje').val();
                    var nota="";
                    if(!isEmptyOrSpaces($('#nota').val())){
                        nota = $('#nota').val();
                    }
                    var contencion_dia = $('#contencion_dia').val();
                    var contencion_tipo = $('#contencion_tipo').val();
                    if(contencion_tipo=="Otro"){
                        contencion_tipo = $('#contencion_tipo_otro').val();
                    }
                    var contencion_sensacion_numero = $('input:radio[name=contencion_sensacion]:checked').val();
                    var contencion_sensacion= contencionSegunNumero(contencion_sensacion_numero);
                    var contencion_dolor = $('#contencion_dolor').val();
                    var contencion_escala = $('#contencion_escala').val();
                    var contencion_pesadez = $('#contencion_pesadez').val();
                    var opcion= "registro_tratamiento_linfedema";

                    datos_correctos= validarHistTratLinf(satisfecho_result,$('#fallo_terapia').val(), $('#fallo_terapia_otro').val(), $('#tipo_drenaje_linfa').val(), $('#tipo_drenaje_linfa_otro').val(),$('#contencion_tipo').val(), $('#contencion_tipo_otro').val());
                    
                   if(datos_correctos){
                         $.ajax({
                        type:'POST',
                        url: 'control/vista.php',
                        data: {id_user:id_user, fecha_ult_tratamiento: fecha_ult_tratamiento,satisfecho_result: satisfecho_result, fallo_terapia:fallo_terapia, tipo_drenaje_linfa:tipo_drenaje_linfa,
                        vendaje:vendaje, nota: nota, contencion_dia: contencion_dia, contencion_tipo: contencion_tipo, contencion_sensacion: contencion_sensacion, contencion_dolor: contencion_dolor,
                        contencion_escala: contencion_escala, contencion_pesadez: contencion_pesadez, opcion: opcion},
                        })
                        .done(function( msg ) {
                        //    console.log("ajax done"); 
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
                                else if(msg=="historial"){
                                    $("body").overhang({
                                        type: "error",
                                        message: "ERROR, este usuario ya tiene el historial guardado.",
                                        duration: 3,
                                        overlay: true,
                                        closeConfirm: true
                                    });
                                    datos_correctos_queries = false;
                                }
                                else{
                                    $.notify("Historial guardado correctamente.", "success");
                                }    
                                 if(datos_correctos_queries){

                            } 	
                            
                            if(datos_correctos_queries){

                                form_7="si";

                                $("#apartado-hist-trat-linf").css("display","none");
                                $("#apartado-valoracion-linf").css("display","block");

                                $("#btn-valoracion-linfedema").css("background-color","#20c997");

                                $( "html,body" ).animate({
                                    scrollTop: $("#grupo-titulo-pagina").offset().top
                                  }, 500, function() {
                                    // Animation complete.
                                  });

                            }

                        })
                        .fail(function( jqXHR, textStatus, errorThrown ) {
                            if ( console && console.log ) {
                                console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                // console.log("ajax fail");
                            }
                        });
                    }
                       
                    
                });




                // //  =============================== VALORACIÓN LINFEDEMA  ===========================================

                $("#form-8").submit(function(event){
                    
                    event.preventDefault();
                    var datos_correctos_queries = true;

                    var fecha_val_linfedema=$('#fecha_val_linfedema').val();
                    var localizacion_linf = $('#localizacion_linf').val();
                    var consistencia_edema = $('#consistencia_edema').val();
                    var color = $('#color').val();
                    var valoracion_piel = $('#valoracion_piel').val();
                    var stemmer = $('#stemmer').val();
                    var fovea = $('#fovea').val();
                    var pesadez = $('#pesadez').val();
                    var rubor = $('#rubor').val();
                    var opcion= "registro_valoracion_linfedema";

                    // PONER NULL DE MOMENTO EN LA BD
                    var foto_pierna_ant_d = $('#foto_pierna_ant_d').val();
                    var foto_pierna_post_d = $('#foto_pierna_post_d').val();
                    var foto_pierna_lat_d1 = $('#foto_pierna_lat_d1').val();
                    var foto_pierna_lat_d2 = $('#foto_pierna_lat_d2').val();
                    var foto_pierna_ant_i = $('#foto_pierna_ant_i').val();
                    var foto_pierna_post_i = $('#foto_pierna_post_i').val();
                    var foto_pierna_lat_i1 = $('#foto_pierna_lat_i1').val();
                    var foto_pierna_lat_i2 = $('#foto_pierna_lat_i2').val();
                    var foto_brazo_cruz_d = $('#foto_brazo_cruz_d').val();
                    var foto_brazo_frontal_d = $('#foto_brazo_frontal_d').val();
                    var foto_brazo_cruz_i = $('#foto_brazo_cruz_i').val();
                    var foto_brazo_frontal_i = $('#foto_brazo_frontal_i').val();

                    $.ajax({
                    type:'POST',
                    url: 'control/vista.php',
                    data: {id_user:id_user, fecha: fecha_val_linfedema,localizacion:localizacion_linf,consistencia_edema:consistencia_edema,color:color,
                    valoracion_piel:valoracion_piel,stemmer:stemmer,fovea:fovea,pesadez:pesadez,rubor:rubor, opcion:opcion},
                    })
                    .done(function( msg ) {                             	
                        // console.log("ajax done"); 
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
                        else if(msg=="valoracion"){
                            $("body").overhang({
                                type: "error",
                                message: "ERROR, este usuario ya tiene una valoración guardada en esta fecha.",
                                duration: 3,
                                overlay: true,
                                closeConfirm: true
                            });
                            datos_correctos_queries = false;
                        }
                        else{
                            $.notify("Valoración guardada correctamente.", "success");
                        }    
                        
                        if(datos_correctos_queries){

                            form_8="si";
                        }	

                    })
                    .fail(function( jqXHR, textStatus, errorThrown ) {
                        if ( console && console.log ) {
                            console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                            // console.log("ajax fail");
                        }
                    });
                    
                });

                 //SIGUIENTE | VAL. LINFEDEMA

                 $( "#btn-submit-8" ).click(function() {
                    
                    if(form_8=="si"){
                        
                        $("#apartado-valoracion-linf").css("display","none");
                        $("#apartado-medicion-inicial").css("display","block");

                        $("#btn-medicion").css("background-color","#3da3bc");

                        $( "html,body" ).animate({
                            scrollTop: $("#grupo-titulo-pagina").offset().top
                            }, 500, function() {
                            // Animation complete.
                            });
                    }
                    else{//aún no ha registrado cirugías
                        $("body").overhang({
                            type: "error",
                            message: "ERROR. Registra alguna valoración para continuar.",
                            duration: 3,
                            overlay: true,
                            closeConfirm: true
                        });
                    }

                });

                //  =============================== MEDICIONES  ==========================================

                $("#btn-submit-9").click(function(event){
                    
                    event.preventDefault();
                   
                    var opcion= "registro_mediciones";
                    var datos_correctos=true;
                    var datos_correctos_queries=true;
                    var valor_seleccionado = $("#radiobuttons_escoger_miembro input[type='radio']:checked").val();
                    var lado_sano_brazo = $("#miembro_sano_brazo input[type='radio']:checked").val(); 
                    var lado_sano_pierna = $("#miembro_sano_pierna input[type='radio']:checked").val(); 
                    

                    var fecha="";
                    var extremidad = "";
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
                    if(valor_seleccionado=="brazo"){//INSERT BRAZO

                        fecha = $('#fecha_brazo').val();
                        extremidad = "brazo";
                        lado_sano=lado_sano_brazo;
                        
                        console.log(lado_sano);
                        
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
                        
                        datos_correctos=validarMedicionesBrazo(fecha,p1_i,p2_i,p3_i,p4_i,p5_i,p1_d,p2_d,p3_d,p4_d,p5_d);
                    }
                    else if(valor_seleccionado=="pierna"){//INSERT PIERNA

                        fecha = $('#fecha_pierna').val();
                        extremidad = "pierna";
                        lado_sano=lado_sano_pierna;

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
                        
                        datos_correctos=validarMedicionesPierna(fecha,p1_i,p2_i,p3_i,p4_i,p5_i,p6_i,p1_d,p2_d,p3_d,p4_d,p5_d,p6_d);
                    }

                    if(datos_correctos){//ejecutamos ajax, el mismo para brazo y pierna, haremos dos inserts de cada brazo/pierna
                        
                        $.ajax({
                        type:'POST',
                        url: 'control/vista.php',
                        data: {id_user:id_user,fecha:fecha,extremidad:extremidad,lado_sano:lado_sano,p1_i:p1_i, p2_i:p2_i,p3_i:p3_i,p4_i:p4_i,p5_i:p5_i,p6_i:p6_i,p1_d:p1_d,p2_d:p2_d,p3_d:p3_d,p4_d:p4_d,p5_d:p5_d,p6_d:p6_d,opcion: opcion},
                        })
                        .done(function( msg ) {                           	
                            // console.log("ajax done"); 
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
                                    message: "ERROR, este usuario ya tiene una primera medición guardada.",
                                    duration: 3,
                                    overlay: true,
                                    closeConfirm: true
                                });
                                datos_correctos_queries = false;
                            }
                            else{
                                $.notify("Paciente registrado con éxito", "success");
                            }   
                            if(datos_correctos_queries){
                                
                                form_9="si";
                                setTimeout(
                                    function() 
                                    {
                                        document.location.href="pagina-principal.php"; 
                                    }, 1200);
                               
                            } 
                        })
                        .fail(function( jqXHR, textStatus, errorThrown ) {
                            if ( console && console.log ) {
                                console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                // console.log("ajax fail");
                            }
                        });
                    }

                    
                });



                //  =============================== ////////////////// ===========================================

                function validarDatosPersonales(nombre,apellido1,apellido2,correo,pass,pass2){
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
                function isEmptyOrSpaces(str){
                    return str === null || str.match(/^ *$/) !== null;
                }
                function validarHistorialClinico(doc_identificacion,nacionalidad,raza,
                        fecha_nacimiento,sexo,altura, peso, tipo_congenito, subtipo_congenito,fecha_debut,
                        familiar_linfedema,motivo_secundario,ant_vasculares,ant_infeccion_venosa, 
                        ant_sobrepeso, ant_lipedema, ant_permeabilidad_cap, ant_ansiedad,ant_diabetes, 
                        ant_triquiasis, ant_sindromes, profesion,grado_resp_profesion,grado_stress_profesion){
                    
                    var mensaje_error = "";
                    var datos_correctos = true;
                    if($('#subtipo_congenito').val()=="Otro" || $('#subtipo_congenito').val()=="Accidente"){
                        if(subtipo_congenito==undefined || subtipo_congenito=="" || isEmptyOrSpaces(subtipo_congenito)){
                            
                            mensaje_error="ERROR. Al seleccionar Otro/Accidente en 'subtipo' debes especificarlo en el campo siguiente";
                            $('#subtipo_congenito_otro').css("border","2px solid #dc3545");
                            datos_correctos = false;
                        }
                    }
                    if($('#motivo_secundario').val()=="Otro"){
                        if(motivo_secundario==undefined || motivo_secundario=="" || isEmptyOrSpaces(motivo_secundario)){
                            
                            mensaje_error="ERROR. Al seleccionar Otro en 'motivo secundario' especificarlo en el campo siguiente";
                            $('#motivo_secundario_otro').css("border","2px solid #dc3545");
                            datos_correctos = false;
                        }
                    }
                    if(!isNaN(doc_identificacion)){//es solo numeros
                        
                        mensaje_error= "ERROR. El documento de identificación debe contener letras y números.";
                        datos_correctos = false;
                    }
                    if(isEmptyOrSpaces(doc_identificacion)){
                        mensaje_error="ERROR. El doc. de identificación no puede estar vacío.";
                        datos_correctos = false;
                        
                    }
                    if(isEmptyOrSpaces(nacionalidad)){
                        mensaje_error="ERROR. La nacionalidad no puede estar vacía.";
                        datos_correctos = false;
                        
                    }
                    if(isEmptyOrSpaces(raza)){
                        mensaje_error="ERROR. La raza no puede estar vacía.";
                        datos_correctos = false;
                        
                    }
                    if(isEmptyOrSpaces(fecha_nacimiento) || fecha_nacimiento==undefined){
                        mensaje_error="ERROR. No has seleccionado la fecha de nacimiento.";
                        datos_correctos = false;
                        
                    }
                    if(isEmptyOrSpaces(ant_sindromes)){
                        mensaje_error="ERROR. No has rellenado el campo de síndromes.";
                        datos_correctos = false;
                        
                    }
                    if(isEmptyOrSpaces(profesion)){
                        mensaje_error="ERROR. No has rellenado el campo de profesión.";
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

                function validarCirugias(nombre_cirugia,fecha,comentarios){
                    var mensaje_error = "";
                    var datos_correctos = true;
                    if(isEmptyOrSpaces(nombre_cirugia)){
                        mensaje_error="ERROR. El nombre de cirugía no puede estar vacío.";
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

                function validarMedicamentos(medicamento,patologias){
                    
                    var mensaje_error = "";
                    var datos_correctos = true;
                     
                    if(isEmptyOrSpaces(patologias)){
                        mensaje_error="ERROR. El campo de patologías no puede estar vacío.";
                        datos_correctos = false;
                    }

                    if(isEmptyOrSpaces(medicamento)){
                        mensaje_error="ERROR. El nombre del medicamento no puede estar vacío.";
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
                function validarInfecciones(tipo_inf, medicamentos){
                    var datos_correctos=true;
                    var mensaje_error="";
                    
                    if(isEmptyOrSpaces(medicamentos)){
                        mensaje_error="ERROR. Debes introducir algún medicamento";
                        datos_correctos = false;
                    }
                    if(isEmptyOrSpaces(tipo_inf)){
                        mensaje_error="ERROR. Debes introducir el tipo de infección";
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
                function validarHabitos(tipo_acohol,alcohol,toma_alcohol,fumador,cigarros,hace_deporte, t_sesion, alimentacion){

                    var datos_correctos=true;
                    var mensaje_error="";

                    if(isEmptyOrSpaces(t_sesion) && hace_deporte=="si"){
                        mensaje_error="ERROR. Si el paciente hace deporte debes especificar el tiempo de la sesión";
                        datos_correctos = false;
                    }
                    if(isEmptyOrSpaces(alimentacion)){
                        mensaje_error="ERROR. Si la alimentación es otra debes especificar cuál.";
                        datos_correctos = false;
                    } 
                    if(isEmptyOrSpaces(tipo_acohol) && toma_alcohol=="si"){
                        mensaje_error="ERROR. Si el paciente toma alcohol debes especificar el tipo";
                        datos_correctos = false;
                    } 
                    if(isEmptyOrSpaces(alcohol) && toma_alcohol=="si"){
                        mensaje_error="ERROR. Si el paciente toma alcohol debes especificar la cantidad";
                        datos_correctos = false;
                    }
                    if(isEmptyOrSpaces(cigarros) && fumador=="si"){
                        mensaje_error="ERROR. Si el paciente fuma debes especificar la cantidad";
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
                function contencionSegunNumero(contencion_sensacion_numero){
                    var contencion_sensacion="";
                    switch(contencion_sensacion_numero){
                        case "1":
                            contencion_sensacion="Genial";
                        break;
                        case "2":
                            contencion_sensacion="Muy bien";
                        break;
                        case "3":
                            contencion_sensacion="Bien";
                        break;
                        case "4":
                            contencion_sensacion="Normal";
                        break;
                        case "5":
                            contencion_sensacion="Regular";
                        break;
                        case "6":
                            contencion_sensacion="Mal";
                        break;
                        case "7":
                            contencion_sensacion="Muy mal";
                        break;
                    }
                    return contencion_sensacion;
                }

                function validarHistTratLinf(satisfecho_result,fallo_terapia, fallo_terapia_otro,tipo_drenaje_linfa,tipo_drenaje_linfa_otro,contencion_tipo, contencion_tipo_otro){
                    
                    var datos_correctos=true;
                    var mensaje_error="";
                    if(contencion_tipo=="otro" && isEmptyOrSpaces(contencion_tipo_otro)){
                        mensaje_error="ERROR. Especifica tu respuesta sobre el tipo contención.";
                        datos_correctos = false;
                    }
                    if(tipo_drenaje_linfa=="otro" && isEmptyOrSpaces(tipo_drenaje_linfa_otro) ){
                        mensaje_error="ERROR. Especifica tu respuesta sobre el tipo de drenaje linfático.";
                        datos_correctos = false;
                    }
                    if(satisfecho_result=="no" && fallo_terapia=="otro" && isEmptyOrSpaces( fallo_terapia_otro )  ){
                        mensaje_error="ERROR. Especifica tu respuesta sobre el fallo de la terapia.";
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
                function validarMedicionesBrazo(fecha,p1_i,p2_i,p3_i,p4_i,p5_i,p1_d,p2_d,p3_d,p4_d,p5_d){ 
                    var datos_correctos=true;
                    var mensaje_error="";

                    if(isEmptyOrSpaces(p1_d) || isEmptyOrSpaces(p2_d) || isEmptyOrSpaces(p3_d) || isEmptyOrSpaces(p4_d) || isEmptyOrSpaces(p5_d) ){
                        mensaje_error="ERROR. Introduce todas las mediciones del brazo derecho";
                        datos_correctos = false;
                    } 
                    if(isEmptyOrSpaces(p1_i) || isEmptyOrSpaces(p2_i) || isEmptyOrSpaces(p3_i) || isEmptyOrSpaces(p4_i) || isEmptyOrSpaces(p5_i) ){
                        mensaje_error="ERROR. Introduce todas las mediciones del brazo izquierdo";
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
                function validarMedicionesPierna(fecha,p1_i,p2_i,p3_i,p4_i,p5_i,p6_i,p1_d,p2_d,p3_d,p4_d,p5_d,p6_d){
                    var datos_correctos=true;
                    var mensaje_error="";

                    if(isEmptyOrSpaces(p1_d) || isEmptyOrSpaces(p2_d) || isEmptyOrSpaces(p3_d) || isEmptyOrSpaces(p4_d) || isEmptyOrSpaces(p5_d) || isEmptyOrSpaces(p6_d) ){
                        mensaje_error="ERROR. Introduce todas las mediciones de la pierna derecha";
                        datos_correctos = false;
                    } 
                    if(isEmptyOrSpaces(p1_i) || isEmptyOrSpaces(p2_i) || isEmptyOrSpaces(p3_i) || isEmptyOrSpaces(p4_i) || isEmptyOrSpaces(p5_i) || isEmptyOrSpaces(p6_i) ){
                        mensaje_error="ERROR. Introduce todas las mediciones de la pierna izquierda";
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

            });//document ready
            
            // function comprobarFormsRellenados(formulario_actual){
            //     for(var i=1;i<=;){

            //     }
            // }