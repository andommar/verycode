    var id_usuario= 0;
    var id_especialista=0;
    var ref_cirugia_editar=0;
    var id_medicamento_editar=0;
    var id_infeccion_editar=0;
    var ref_valoracion_editar=0;

    $(document).ready(function(){
        
        $("#titulo-paciente").html("Editar paciente · Paciente "+id_usuario);

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
    });

    $(document).ready(function(){
        id_usuario= $("#id_usuario").val();

        // 1) DATOS PERSONALES
        $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "get_datos_personales",
                id_usuario: id_usuario
            }
        
        })        
        .done(function(msg) {
            // console.log("ajax done");
            var resultado = $.parseJSON(msg);
            if(resultado!="false"){
                $("#nombre").val(resultado[0].nombre);
                $("#apellido1").val(resultado[0].apellido1);
                $("#apellido2").val(resultado[0].apellido2);
                $("#correo").val(resultado[0].correo);
                $("#pass").val(resultado[0].pass);
            }    
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            console.log("ajax false");
        });

        //=============================================================================

        // 2) HISTORIAL CLÍNICO
         $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "get_historial_clinico",
                id_usuario: id_usuario
            }
        
        })        
        .done(function(msg) {
            // console.log("ajax done");
            var resultado="";
            if(msg=="vacio" || msg=="false"){
                resultado = msg;
            }
            else{
                resultado = $.parseJSON(msg);
            }
            
            if(resultado=="vacio"){
                $("#aux-hist-clin").html("&nbsp;&nbsp;<i>Aún no hay datos, registra el historial más abajo.</i>");
            }
            else if(resultado!="false" && resultado!="vacio"){
                
                //FECHAS (hay que coger del array sólo la fecha)
                //$("#fecha_nacimiento").val("2014-06-20"); //aaaa-mm-dd

                var fecha_debut = resultado[0].fecha_debut.date; //2019-05-16 00:00:00.000000
                var fecha_debut_corta = fecha_debut.substr(0,fecha_debut.indexOf(' ')); //2019-05-16
                // console.log(fecha_debut);
                // console.log(fecha_debut_corta);

                var fecha_nacimiento = resultado[0].fecha_nacimiento.date; //2019-05-16 00:00:00.000000
                var fecha_nacimiento_corta = fecha_nacimiento.substr(0,fecha_nacimiento.indexOf(' ')); //2019-05-16
            
                $("#fecha_debut").val(fecha_debut_corta); 
                $("#fecha_nacimiento").val(fecha_nacimiento_corta);

                $('#doc_identificacion').val(resultado[0].doc_identificacion);
                $('#nacionalidad').val(resultado[0].nacionalidad);
                $('#raza').val(resultado[0].raza);
                $('#sexo').val(resultado[0].sexo);
                $('#altura').val(resultado[0].altura); 
                $('#peso').val(resultado[0].peso);
                $('#tipo_congenito').val(resultado[0].tipo_congenito);

                $('#tipo_congenito').trigger('change');//forzar al "on change" del select

                var subtipo_congenito = resultado[0].subtipo_congenito;

                if(resultado[0].tipo_congenito=="Primario"){
                    $('#subtipo_congenito').val(resultado[0].subtipo_congenito);
                }
                else{//Secundario
                    if(subtipo_congenito!="Mama" && subtipo_congenito!="Ginecológico" && subtipo_congenito!="Próstata" && subtipo_congenito!="Cara" && subtipo_congenito!="Linfoma"){
                        $('#subtipo_congenito').val("Otro");
                        $('#subtipo_congenito_otro').val(resultado[0].subtipo_congenito);
                    }
                    else{
                        $('#subtipo_congenito').val(resultado[0].subtipo_congenito);
                    }
                }
                $('#subtipo_congenito').trigger('change');

                var motivo_secundario = resultado[0].motivo_secundario;
                
                if(motivo_secundario!="Post Cirugía" && !(motivo_secundario.match(/Ganglios*/)) && motivo_secundario!="Post Radioterapia" && motivo_secundario!="Post Pinchazo" && motivo_secundario!="Post Toma Tensión" && motivo_secundario!="Cargando Peso" && motivo_secundario!="Infección" && motivo_secundario!="Picadura Mosquito" && motivo_secundario!="Esfuerzo" && motivo_secundario!="Quemadura" && motivo_secundario!="Golpe" && motivo_secundario!="Corte" && motivo_secundario!="Torcedura Tobillo"){
                    $('#motivo_secundario').val("Otro");
                    $('#motivo_secundario_otro').val(resultado[0].motivo_secundario);
                }
                else{
                    $('#motivo_secundario').val(resultado[0].motivo_secundario);
                }
                $('#motivo_secundario').trigger('change');

               if(resultado[0].ant_vasculares == 'si'){
                    $('#ant_vasculares').prop('checked', true);
               }
               if(resultado[0].ant_infeccion_venosa == 'si'){
                    $('#ant_infeccion_venosa').prop('checked', true);
               }
               if(resultado[0].ant_sobrepeso == 'si'){
                    $('#ant_sobrepeso').prop('checked', true);
               }
               if(resultado[0].ant_lipedema == 'si'){
                    $('#ant_lipedema').prop('checked', true);
               }
               if(resultado[0].ant_permeabilidad_cap == 'si'){
                    $('#ant_permeabilidad_cap').prop('checked', true);
               }
               if(resultado[0].ant_ansiedad == 'si'){
                    $('#ant_ansiedad').prop('checked', true);
               }
               if(resultado[0].ant_diabetes == 'si'){
                    $('#ant_diabetes').prop('checked', true);
               }
               if(resultado[0].ant_triquiasis == 'si'){
                    $('#ant_triquiasis').prop('checked', true);
               }

               $('#ant_sindromes').val(resultado[0].ant_sindromes);
               $('#profesion').val(resultado[0].profesion);
               $('#grado_resp_profesion').val(parseInt(resultado[0].grado_resp_profesion));
               $('#grado_stress_profesion').val(parseInt(resultado[0].grado_stress_profesion));

            }

           
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            console.log("ajax false");
        });
        //=============================================================================//eee
        //3) CIRUGIAS (RELLENAR TABLA)
        $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "listado_cirugias",
                id_user: id_usuario
            }
            
        })        
        .done(function(msg) {
            
            if ( console && console.log ) {
                // console.log( "La solicitud de acceso se ha completado correctamente." );
            }
            var resultado="";
            if(msg=="vacio" || msg=="false"){
                resultado = msg;
            }
            else{
                resultado = $.parseJSON(msg);
                var listado_cirugias = resultado;
            
                //RELLENAMOS TABLA
                var filas_cirugias='';

                // var fecha_ult_tratamiento = resultado[0].fecha_ult_tratamiento.date; //2019-05-16 00:00:00.000000
                // var fecha_ult_tratamiento_corta = fecha_ult_tratamiento.substr(0,fecha_ult_tratamiento.indexOf(' ')); //2019-05-16

                listado_cirugias.forEach(function(element) {
                    filas_cirugias+= '<tr id='+element.ref_cirugia+'><td>'+element.ref_cirugia+'</td><td>'+element.nombre+'</td><td>'+element.fecha.date.substr(0,element.fecha.date.indexOf(' '))+'</td><td><button type="button" style="color: #28a745;" class="btn azul" value="editarCirugia" onClick="editarCirugia('+ element.ref_cirugia + ')"><span class="ti-pencil-alt"></span></button></td></tr>';
    
                });
                $('#cirugias-table tbody').html(filas_cirugias);
            }
            
            if(resultado=="vacio"){
                
                $("#aux-cirugias").html("·&nbsp;&nbsp;<i>Aún no hay datos, registra las cirugías más abajo.<br><br></i>");
                $("#cirugias-table").css("display","none");
            }
            

        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud de acceso ha fallado: " +  textStatus);
            }
        });
        //=============================================================================//eee
        //4) MEDICAMENTOS (RELLENAR TABLA)
        $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "listado_medicamentos",
                id_user: id_usuario
            }
            
        })        
        .done(function(msg) {
            
            if ( console && console.log ) {
                // console.log( "La solicitud de acceso se ha completado correctamente." );
            }
            var resultado="";
            if(msg=="vacio" || msg=="false"){
                resultado = msg;
            }
            else{
                resultado = $.parseJSON(msg);
                var listado_medicamentos = resultado;
            
                //RELLENAMOS TABLA
                var filas_medicamentos='';

                listado_medicamentos.forEach(function(element) {
                    
                    filas_medicamentos+= '<tr id='+element.id_medicamento+'><td>'+element.id_medicamento+'</td><td>'+element.medicamento+'</td><td>'+element.patologias+'</td><td><button type="button" style="color: #28a745;" class="btn azul" value="editarMedicamento" onClick="editarMedicamento('+ element.id_medicamento + ')"><span class="ti-pencil-alt"></span></button></td></tr>';
    
                });
                $('#medicamentos-table tbody').html(filas_medicamentos);
            }
            
            if(resultado=="vacio"){
                
                $("#aux-medicamentos").html("·&nbsp;&nbsp;<i>Aún no hay datos, registra los medicamentos más abajo.<br><br></i>");
                $("#medicamentos-table").css("display","none");
            }
            // else if(resultado!="false" && resultado!="vacio"){

            // }

        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud de acceso ha fallado: " +  textStatus);
            }
        });
        //=============================================================================//eee
        //5) INFECCIONES (RELLENAR TABLA)
        $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "listado_infecciones",
                id_user: id_usuario
            }
            
        })        
        .done(function(msg) {
            
            if ( console && console.log ) {
                // console.log( "La solicitud de acceso se ha completado correctamente." );
            }
            var resultado="";
            if(msg=="vacio" || msg=="false"){
                resultado = msg;
            }
            else{
                resultado = $.parseJSON(msg);
                var listado_infecciones = resultado;
            
                //RELLENAMOS TABLA
                var filas_infecciones='';

                listado_infecciones.forEach(function(element) {
                    
                    filas_infecciones+= '<tr id='+element.id_infeccion+'><td>'+element.id_infeccion+'</td><td>'+element.tipo+'</td><td>'+element.medicamento+'</td><td>'+element.fecha.date.substr(0,element.fecha.date.indexOf(' '))+'</td><td><button type="button" style="color: #28a745;" class="btn azul" value="editarInfeccion" onClick="editarInfeccion('+ element.id_infeccion + ')"><span class="ti-pencil-alt"></span></button></td></tr>';
    
                });
                $('#infecciones-table tbody').html(filas_infecciones);
            }
            
            if(resultado=="vacio"){
                
                $("#aux-infecciones").html("·&nbsp;&nbsp;<i>Aún no hay datos, registra las infecciones más abajo.<br><br></i>");
                $("#infecciones-table").css("display","none");
            }
           

        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud de acceso ha fallado: " +  textStatus);
            }
        });
         //=============================================================================//eee
        //8) VALORACION LINFEDEMA(RELLENAR TABLA)
        $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "listado_val_linf",
                id_user: id_usuario
            }
            
        })        
        .done(function(msg) {
            
            if ( console && console.log ) {
                // console.log( "La solicitud de acceso se ha completado correctamente." );
            }
            var resultado="";
            if(msg=="vacio" || msg=="false"){
                resultado = msg;
            }
            else{
                resultado = $.parseJSON(msg);
                var listado_val_linf = resultado;
            
                //RELLENAMOS TABLA
                var filas_val_linf='';

                listado_val_linf.forEach(function(element) {
                    
                    filas_val_linf+= '<tr id='+element.ref_valoracion+'><td>'+element.ref_valoracion+'</td><td>'+element.fecha.date.substr(0,element.fecha.date.indexOf(' '))+'</td><td>'+element.localizacion+'</td><td><button type="button" style="color: #28a745;" class="btn azul" value="editarValLinf" onClick="editarValLinf('+ element.ref_valoracion+ ')"><span class="ti-pencil-alt"></span></button></td></tr>';
    
                });
                $('#val-linf-table tbody').html(filas_val_linf);
            }
            
            if(resultado=="vacio"){
                
                $("#aux-val-linf").html("·&nbsp;&nbsp;<i>Aún no hay datos, registra las valoraciones más abajo.<br><br></i>");
                $("#val-linf-table").css("display","none");
            }
            

        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud de acceso ha fallado: " +  textStatus);
            }
        });
        //=============================================================================
        //  // 6) HÁBITOS
         $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "get_habitos",
                id_usuario: id_usuario
            }
        
        })        
        .done(function(msg) {
            var resultado="";
            if(msg=="vacio" || msg=="false"){
                resultado = msg;
            }
            else{
                resultado = $.parseJSON(msg);
            }
            
            if(resultado=="vacio"){
                $("#aux-habitos").html("·&nbsp;&nbsp;<i>Aún no hay datos, registra los hábitos más abajo.</i>");
            }
            else if(resultado!="false" && resultado!="vacio"){

                $('#fumador').val(resultado[0].fumador);
                $('#fumador').trigger('change');
                if(resultado[0].fumador=="si"){
                    $('#cigarros').val(resultado[0].cigarros);
                    $('#frec_cigarros').val(resultado[0].frec_cigarros);
                    $('#fumador_social').val(resultado[0].fumador_social);
                }
                $("#toma_alcohol").val(resultado[0].toma_alcohol);
                $('#toma_alcohol').trigger('change');
                if(resultado[0].toma_alcohol=="si"){
                    $('#frec_alcohol').val(resultado[0].frec_alcohol);
                    $('#alcohol').val(resultado[0].alcohol);
                    $('#tipo_alcohol').val(resultado[0].tipo_alcohol);
                }
                $("#hace_deporte").val(resultado[0].hace_deporte);
                $("#hace_deporte").trigger('change');
                if(resultado[0].hace_deporte=="si"){
                    $('#frec_deporte').val(resultado[0].frec_deporte);
                    $('#tipo_deporte').val(resultado[0].tipo_deporte);
                    $('#t_sesion').val(resultado[0].t_sesion);
                    $('#t_sesion_medidas').val(resultado[0].t_sesion_medidas);
                }
                var alimentacion = resultado[0].alimentacion;
                
                if(alimentacion!="Equilibrada" && alimentacion!="Hipocalórica" && alimentacion!="Hipercalórica" && alimentacion!="Cetogénica" && alimentacion!="Proteica" && alimentacion!="Vegetariana" && alimentacion!="Vegana" && alimentacion!="Fast food"){
                    $("#alimentacion").val("otro");
                    $("#alimentacion_otro").val(resultado[0].alimentacion);
                }
                else{
                    $("#alimentacion").val(resultado[0].alimentacion);
                }
                $("#alimentacion").trigger('change');
                $('#suenyo_reparador').val(resultado[0].suenyo_reparador);
                $('#h_suenyo').val(resultado[0].h_suenyo);
                $('#astenico').val(resultado[0].astenico);

                if(resultado[0].erg_sentado!=null && resultado[0].erg_sentado!=undefined){
                    $('#erg_sentado').val(resultado[0].erg_sentado);
                }
                
                if(resultado[0].erg_bipedes_pasiva!=null && resultado[0].erg_bipedes_pasiva!=undefined){
                    $('#erg_bidepes_pasiva').val(resultado[0].erg_bipedes_pasiva);
                }
               
                if(resultado[0].erg_bipedes_activa!=null && resultado[0].erg_bipedes_activa!=undefined){
                    $('#erg_bidepes_activa').val(resultado[0].erg_bipedes_activa);
                }
                if(resultado[0].erg_otro!=null && resultado[0].erg_otro!=undefined){
                    $('#erg_otro').val(resultado[0].erg_otro);
                }
            }
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            console.log("ajax false");
        });
        //=============================================================================================
        //  // 7) HIST TRAT LINF
         $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "get_hist_trat_linf",
                id_usuario: id_usuario
            }
        
        })        
        .done(function(msg) {
            var resultado="";
            if(msg=="vacio" || msg=="false"){
                resultado = msg;
            }
            else{
                resultado = $.parseJSON(msg);
            }
            
            if(resultado=="vacio"){
                $("#aux-hist-trat-linf").html("·&nbsp;&nbsp;<i>Aún no hay datos, registra el historial más abajo.</i>");
            }
            else if(resultado!="false" && resultado!="vacio"){
                var fecha_ult_tratamiento = resultado[0].fecha_ult_tratamiento.date; //2019-05-16 00:00:00.000000
                var fecha_ult_tratamiento_corta = fecha_ult_tratamiento.substr(0,fecha_ult_tratamiento.indexOf(' ')); //2019-05-16
                $('#fecha_ult_tratamiento').val(fecha_ult_tratamiento_corta);

                $('#satisfecho_result').val(resultado[0].satisfecho_result);
                $('#satisfecho_result').trigger('change');
                var fallo_terapia = resultado[0].fallo_terapia;
                if(resultado[0].satisfecho_result=="no"){
                    if(fallo_terapia=="Falta de seguimiento" || fallo_terapia=="Falta de programación" || fallo_terapia=="desidia" || fallo_terapia=="Desesperación" || fallo_terapia=="Demasiado tediosa" || fallo_terapia=="Falta de medios económicos"){
                        $('#fallo_terapia').val(fallo_terapia);
                    }
                    else{
                        $('#fallo_terapia').val("otro");
                        $('#fallo_terapia_otro').val(fallo_terapia);
                    }
                }
                var tipo_drenaje_linfa = resultado[0].tipo_drenaje_linfa;
                if(tipo_drenaje_linfa=="Vodder" || tipo_drenaje_linfa=="Leduc" || tipo_drenaje_linfa=="Godoy"){
                    $('#tipo_drenaje_linfa').val(tipo_drenaje_linfa);    
                }
                else{
                    $('#tipo_drenaje_linfa').val("Otros");
                    $('#tipo_drenaje_linfa_otro').val(tipo_drenaje_linfa);
                }
                $('#tipo_drenaje_linfa').trigger('change');
                $('#vendaje').val(resultado[0].vendaje);
                if(resultado[0].nota!=undefined && resultado[0].nota!=null ){
                    $('#nota').val(resultado[0].nota);
                }
                $('#contencion_dia').val(resultado[0].contencion_dia);
                var contencion_tipo = resultado[0].contencion_tipo;
                if(contencion_tipo=="Jobst" || contencion_tipo=="Medi" || contencion_tipo=="Vendas"){
                    $('#contencion_tipo').val(contencion_tipo);
                }
                else{
                    $('#contencion_tipo').val("Otro");
                    $('#contencion_tipo_otro').val(contencion_tipo);
                }
                $('#contencion_tipo').trigger('change');
                var contencion_sensacion= contencionSegunTexto(resultado[0].contencion_sensacion);
                $("input:radio[name=contencion_sensacion][value=" + contencion_sensacion + "]").attr('checked', 'checked');
                $('#contencion_dolor').val(resultado[0].contencion_dolor);
                $('#contencion_escala').val(resultado[0].contencion_escala);
                $('#contencion_pesadez').val(resultado[0].contencion_pesadez);
            }
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            console.log("ajax false");
        });

        //=============================================================================
        //9) MEDICIÓN INICIAL
        $.ajax({
            type: "GET",
            url: 'control/vista.php',
            data: { 
                opcion: "get_medicion_inicial",
                id_usuario: id_usuario
            }
        
        })        
        .done(function(msg) {
            var resultado="";
            if(msg=="vacio" || msg=="false"){
                resultado = msg;
            }
            else{
                resultado = $.parseJSON(msg);
            }
            
            if(resultado=="vacio"){
                $("#aux-medicion").html("·&nbsp;&nbsp;<i>Aún no hay datos, registra la medición inicial de brazo/pierna más abajo.</i>");
            }
            else if(resultado!="false" && resultado!="vacio"){

                var fecha = resultado[0].fecha.date; //2019-05-16 00:00:00.000000
                var fecha_corta = fecha.substr(0,fecha.indexOf(' ')); //2019-05-16
                
                if(resultado[0].extremidad=="brazo"){

                    jQuery("input[id=pierna]:radio").attr('disabled',true);
                    jQuery("input[id=brazo]:radio").attr('checked',true);

                    if(resultado[0].lado=="derecho"){
                       
                        $("#brazo_d_p1").val(resultado[0].p1);
                        $("#brazo_d_p2").val(resultado[0].p2);
                        $("#brazo_d_p3").val(resultado[0].p3);
                        $("#brazo_d_p4").val(resultado[0].p4);
                        $("#brazo_d_p5").val(resultado[0].p5); 

                        $("#brazo_i_p1").val(resultado[1].p1);
                        $("#brazo_i_p2").val(resultado[1].p2);
                        $("#brazo_i_p3").val(resultado[1].p3);
                        $("#brazo_i_p4").val(resultado[1].p4);
                        $("#brazo_i_p5").val(resultado[1].p5); 

                        if(resultado[0].lado_sano=="si"){
                            jQuery("input[id=miembro_sano_brazo_d]:radio").attr('checked',true);
                            jQuery("input[id=miembro_sano_brazo_i]:radio").attr('disabled',true); 
                        }
                        else{//resultado[0].lado_sano=="no"
                            jQuery("input[id=miembro_sano_brazo_i]:radio").attr('checked',true);
                            jQuery("input[id=miembro_sano_brazo_d]:radio").attr('disabled',true);
                        }
                    }
                    else{//resultado[0].lado=="izquierdo"

                        $("#brazo_i_p1").val(resultado[0].p1);
                        $("#brazo_i_p2").val(resultado[0].p2);
                        $("#brazo_i_p3").val(resultado[0].p3);
                        $("#brazo_i_p4").val(resultado[0].p4);
                        $("#brazo_i_p5").val(resultado[0].p5); 

                        $("#brazo_d_p1").val(resultado[1].p1);
                        $("#brazo_d_p2").val(resultado[1].p2);
                        $("#brazo_d_p3").val(resultado[1].p3);
                        $("#brazo_d_p4").val(resultado[1].p4);
                        $("#brazo_d_p5").val(resultado[1].p5); 

                        if(resultado[0].lado_sano=="si"){
                            jQuery("input[id=miembro_sano_brazo_i]:radio").attr('checked',true);
                            jQuery("input[id=miembro_sano_brazo_d]:radio").attr('disabled',true); 
                        }
                        else{//resultado[0].lado_sano=="no"
                            jQuery("input[id=miembro_sano_brazo_d]:radio").attr('checked',true);
                            jQuery("input[id=miembro_sano_brazo_i]:radio").attr('disabled',true); 
                        }
                    }

                    $("#fecha_brazo").val(fecha_corta);
                 

                    
                }
                else{//pierna

                    jQuery("input[id=brazo]:radio").attr('disabled',true);
                    jQuery("input[id=pierna]:radio").attr('checked',true);
                    
                    if(resultado[0].lado=="derecho"){

                        $("#pierna_d_p1").val(resultado[0].p1);
                        $("#pierna_d_p2").val(resultado[0].p2);
                        $("#pierna_d_p3").val(resultado[0].p3);
                        $("#pierna_d_p4").val(resultado[0].p4);
                        $("#pierna_d_p5").val(resultado[0].p5); 
                        $("#pierna_d_p6").val(resultado[0].p6); 

                        $("#pierna_i_p1").val(resultado[1].p1);
                        $("#pierna_i_p2").val(resultado[1].p2);
                        $("#pierna_i_p3").val(resultado[1].p3);
                        $("#pierna_i_p4").val(resultado[1].p4);
                        $("#pierna_i_p5").val(resultado[1].p5);
                        $("#pierna_i_p6").val(resultado[1].p6);  
                       
                        if(resultado[0].lado_sano=="si"){
                            jQuery("input[id=miembro_sano_pierna_d]:radio").attr('checked',true);
                            jQuery("input[id=miembro_sano_pierna_i]:radio").attr('disabled',true); 
                        }
                        else{//resultado[0].lado_sano=="no"
                            jQuery("input[id=miembro_sano_pierna_i]:radio").attr('checked',true);
                            jQuery("input[id=miembro_sano_pierna_d]:radio").attr('disabled',true);
                        }
                    }
                    else{//resultado[0].lado=="izquierdo"

                        $("#pierna_i_p1").val(resultado[0].p1);
                        $("#pierna_i_p2").val(resultado[0].p2);
                        $("#pierna_i_p3").val(resultado[0].p3);
                        $("#pierna_i_p4").val(resultado[0].p4);
                        $("#pierna_i_p5").val(resultado[0].p5); 

                        $("#pierna_d_p1").val(resultado[1].p1);
                        $("#pierna_d_p2").val(resultado[1].p2);
                        $("#pierna_d_p3").val(resultado[1].p3);
                        $("#pierna_d_p4").val(resultado[1].p4);
                        $("#pierna_d_p5").val(resultado[1].p5); 

                        if(resultado[0].lado_sano=="si"){
                            jQuery("input[id=miembro_sano_pierna_i]:radio").attr('checked',true);
                            jQuery("input[id=miembro_sano_pierna_d]:radio").attr('disabled',true); 
                        }
                        else{//resultado[0].lado_sano=="no"
                            jQuery("input[id=miembro_sano_pierna_d]:radio").attr('checked',true);
                            jQuery("input[id=miembro_sano_pierna_i]:radio").attr('disabled',true); 
                        }
                    }

                    $("#fecha_pierna").val(fecha_corta);
                }
                $("#radiobuttons_escoger_miembro").trigger("change");
                $("#aux-medicion").html("·&nbsp;&nbsp;<i>Hay registrada una medición inicial, puede editarla.</i>"); //quitar!!!!!!!!!!!!!!!!!!!

                
            }
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

    //  ===========================================================  MODIFICAR FORMULARIOS =========================================== 
                
    //  1) DATOS PERSONALES 

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
                                        	
                // console.log("ajax done"); 
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
                else if(msg=="correo"){
                    $("body").overhang({
                        type: "error",
                        message: "Error, este correo ya está en uso.",
                        duration: 3,
                        overlay: true,
                        closeConfirm: true
                    });
                    datos_correctos_queries = false;
                }
                else{
                    $.notify("Datos personales actualizados con éxito", "success");
                    datos_correctos_queries=true;
                    $( "html,body" ).animate({
                        scrollTop: $("body").offset().top
                        }, 500, function() {
                        // Animation complete.
                    });
                }

            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    // console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    console.log("ajax fail");
                }
            });
            return false;
        }
        
    });

    // 2) HISTORIAL CLÍNICO
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
        var opcion= "editar_historial_clinico";

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
            data: {id_user: id_usuario, doc_identificacion: doc_identificacion, opcion: opcion,
                nacionalidad: nacionalidad, raza: raza, fecha_nacimiento: fecha_nacimiento, 
                sexo: sexo, altura: altura, peso: peso, tipo_congenito: tipo_congenito, subtipo_congenito: subtipo_congenito, 
                fecha_debut: fecha_debut, familiar_linfedema: familiar_linfedema, motivo_secundario: motivo_secundario, ant_vasculares: ant_vasculares,
                ant_infeccion_venosa: ant_infeccion_venosa, ant_sobrepeso: ant_sobrepeso, ant_lipedema: ant_lipedema, ant_permeabilidad_cap: ant_permeabilidad_cap, ant_ansiedad: ant_ansiedad,
                ant_diabetes:ant_diabetes, ant_triquiasis: ant_triquiasis, ant_sindromes: ant_sindromes, profesion: profesion,
                grado_resp_profesion: grado_resp_profesion, grado_stress_profesion: grado_stress_profesion 
            },
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
                else{
                    $.notify("Historial clínico actualizado correctamente", "success");
                    $( "html,body" ).animate({
                        scrollTop: $("body").offset().top
                        }, 500, function() {
                        // Animation complete.
                    });
                }
                
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    // console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                }
            });
        }
        

    });

     //  =============================== 3)CIRUGIAS  ===========================================


     $("#form-3").submit(function(event){
        event.preventDefault();
        var datos_correctos_queries = true;

        var nombre_cirugia=$('#nombre_cirugia').val();
        var fecha = $('#fecha_cirugia').val();
        var comentarios = $('#comentarios').val();
        var opcion= "editar_cirugia";

        if(validarCirugias(nombre_cirugia,fecha,comentarios)){

            $.ajax({
            type:'POST',
            url: 'control/vista.php',
            data: {id_user:id_usuario, nombre_cirugia:nombre_cirugia, fecha: fecha, comentarios: comentarios, opcion:opcion, ref_cirugia:ref_cirugia_editar},
            })
            .done(function( msg ) {
                console.log("ajax done");
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
                    $.notify("Cirugía actualizada correctamente.", "success");
                    $( "html,body" ).animate({
                        scrollTop: $("body").offset().top
                        }, 500, function() {
                        // Animation complete.
                    });
                    
                }
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    // console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    console.log("ajax fail");
                }
            });
        }
        
    });
    //  =============================== 4) MEDICAMENTOS  ===========================================


    $("#form-4").submit(function(event){
                    
        event.preventDefault();
        var datos_correctos_queries = true;
        var medicamento=$('#medicamento').val();
        var patologias = $('#patologias').val();
        var opcion= "editar_medicamento";

        if(validarMedicamentos(medicamento,patologias)){
            $.ajax({
                type:'POST',
                url: 'control/vista.php',
                data: {id_user:id_usuario, medicamento:medicamento, patologias:patologias, opcion:opcion, id_medicamento:id_medicamento_editar},
                })
                .done(function( msg ) {                           	
                    console.log("Ajax done"); 
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
                        $.notify("Medicamento actualizado correctamente.", "success");
                        $( "html,body" ).animate({
                            scrollTop: $("body").offset().top
                            }, 500, function() {
                            // Animation complete.
                        });
                    }
                    
                })
                .fail(function( jqXHR, textStatus, errorThrown ) {
                    if ( console && console.log ) {
                        // console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                        console.log("ajax fail");
                    }
            });
        }
        
        
    });
    //  =============================== INFECCIÓN  ===========================================

    $("#form-5").submit(function(event){
        
        event.preventDefault();
        var tipo_inf=$('#tipo_inf').val();
        var medicamentos_inf = $('#medicamentos_inf').val(); 
        var fecha_inf = $('#fecha_inf').val();
        var opcion= "editar_infeccion";
        var datos_correctos_queries = true;

        if(validarInfecciones(tipo_inf, medicamentos_inf)){
            $.ajax({
            type:'POST',
            url: 'control/vista.php',
            data: {id_user:id_usuario, tipo:tipo_inf, medicamento:medicamentos_inf, fecha:fecha_inf, opcion:opcion, id_infeccion:id_infeccion_editar},
            })
            .done(function( msg ) {
                // console.log(msg);                             	
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
                    $.notify("Infección actualizada correctamente.", "success");
                    $( "html,body" ).animate({
                        scrollTop: $("body").offset().top
                        }, 500, function() {
                        // Animation complete.
                    });
                }
                

            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    // console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    console.log("ajax fail");
                }
            });
        }
    });

    // ================================== 6) HABITOS
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
        var opcion= "editar_habitos";
        
       datos_correctos= validarHabitos($('#tipo_alcohol').val(),$('#alcohol').val(),toma_alcohol,fumador,$('#cigarros').val(),hace_deporte, $('#t_sesion').val(), alimentacion);
        if(datos_correctos){
            $.ajax({
            type:'POST',
            url: 'control/vista.php',
            data: {id_user:id_usuario, fumador:fumador,cigarros:cigarros,frec_cigarros:frec_cigarros,fumador_social:fumador_social,toma_alcohol:toma_alcohol, alcohol:alcohol, 
            frec_alcohol:frec_alcohol, tipo_alcohol:tipo_alcohol, hace_deporte:hace_deporte, frec_deporte:frec_deporte, tipo_deporte:tipo_deporte, t_sesion:t_sesion,
            t_sesion_medidas:t_sesion_medidas, alimentacion:alimentacion, suenyo_reparador:suenyo_reparador, h_suenyo:h_suenyo, astenico:astenico, 
            erg_sentado:erg_sentado, erg_bidepes_pasiva:erg_bidepes_pasiva, erg_bidepes_activa:erg_bidepes_activa, erg_otro:erg_otro, opcion:opcion}
            })
            .done(function( msg ) {

                console.log("ajax done "); 
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
                else{
                    $.notify("Hábitos actualizados correctamente.", "success");
                    $( "html,body" ).animate({
                        scrollTop: $("body").offset().top
                        }, 500, function() {
                        // Animation complete.
                    });
                }

            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    // console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    console.log("ajax fail");
                }
            });
        }
    });
    // ================================== 7) HIST TRAT LINF


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
        var opcion= "editar_hist_trat_linf";

        datos_correctos= validarHistTratLinf(satisfecho_result,$('#fallo_terapia').val(), $('#fallo_terapia_otro').val(), $('#tipo_drenaje_linfa').val(), $('#tipo_drenaje_linfa_otro').val(),$('#contencion_tipo').val(), $('#contencion_tipo_otro').val());
        
       if(datos_correctos){
             $.ajax({
            type:'POST',
            url: 'control/vista.php',
            data: {id_user:id_usuario, fecha_ult_tratamiento: fecha_ult_tratamiento,satisfecho_result: satisfecho_result, fallo_terapia:fallo_terapia, tipo_drenaje_linfa:tipo_drenaje_linfa,
            vendaje:vendaje, nota: nota, contencion_dia: contencion_dia, contencion_tipo: contencion_tipo, contencion_sensacion: contencion_sensacion, contencion_dolor: contencion_dolor,
            contencion_escala: contencion_escala, contencion_pesadez: contencion_pesadez, opcion: opcion},
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
                    else{
                        $.notify("Historial actualizado correctamente.", "success");
                        $( "html,body" ).animate({
                            scrollTop: $("body").offset().top
                            }, 500, function() {
                            // Animation complete.
                        });
                    }    
                    

            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    // console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    console.log("ajax fail");
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
        var opcion= "editar_val_linf";


        $.ajax({
        type:'POST',
        url: 'control/vista.php',
        data: {id_user:id_usuario, fecha: fecha_val_linfedema,localizacion:localizacion_linf,consistencia_edema:consistencia_edema,color:color,
        valoracion_piel:valoracion_piel,stemmer:stemmer,fovea:fovea,pesadez:pesadez,rubor:rubor, opcion:opcion, ref_valoracion:ref_valoracion_editar},
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
                $.notify("Valoración actualizada correctamente.", "success");
                $( "html,body" ).animate({
                    scrollTop: $("body").offset().top
                    }, 500, function() {
                    // Animation complete.
                });
            }    
            
           

        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                // console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                console.log("ajax fail");
            }
        });
        
    });

     //  =============================== 9) MEDICION INICIAL  ==========================================

     $("#btn-submit-9").click(function(event){
                    
        event.preventDefault();
       
        var opcion= "editar_medicion_inicial";
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
            data: {id_user:id_usuario,fecha:fecha,extremidad:extremidad,lado_sano:lado_sano,p1_i:p1_i, p2_i:p2_i,p3_i:p3_i,p4_i:p4_i,p5_i:p5_i,p6_i:p6_i,p1_d:p1_d,p2_d:p2_d,p3_d:p3_d,p4_d:p4_d,p5_d:p5_d,p6_d:p6_d,opcion: opcion},
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
                        message: "ERROR, este usuario ya tiene una primera medición guardada.",
                        duration: 3,
                        overlay: true,
                        closeConfirm: true
                    });
                    datos_correctos_queries = false;
                }
                else{
                    $.notify("Medición actualizada correctamente.", "success");
                }   
               
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    console.log("ajax fail");
                }
            });
        }

        
    });
    //====================================================================================================

function editarCirugia(ref_cirugia){
    
    ref_cirugia_editar=ref_cirugia;
     $.ajax({
        type: "GET",
        url: 'control/vista.php',
        data: { 
            opcion: "get_datos_cirugia",
            ref_cirugia:ref_cirugia
        }
    
    })        
    .done(function(msg) {
        // console.log("ajax done");
        var resultado = $.parseJSON(msg);
        if(resultado!="false"){
            $( "html,body" ).animate({
                scrollTop: $("#titulo-form-3").offset().top
                }, 500, function() {
                // Animation complete.
            });
            $("#nombre_cirugia").val(resultado[0].nombre);
            var fecha_cirugia = resultado[0].fecha.date; //2019-05-16 00:00:00.000000
            var fecha_cirugia_corta = fecha_cirugia.substr(0,fecha_cirugia.indexOf(' ')); //2019-05-16
            $("#fecha_cirugia").val(fecha_cirugia_corta);
            
            if(resultado[0].comentarios!=null && resultado[0].comentarios!=undefined){
                $("#comentarios").val(resultado[0].comentarios);
            }
        }    
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("ajax false");
    });
}
function editarMedicamento(id_medicamento){
    
    id_medicamento_editar=id_medicamento;
     $.ajax({
        type: "GET",
        url: 'control/vista.php',
        data: { 
            opcion: "get_datos_medicamento",
            id_medicamento:id_medicamento
        }
    
    })        
    .done(function(msg) {
        // console.log("ajax done");
        var resultado = $.parseJSON(msg);
        if(resultado!="false"){
            $( "html,body" ).animate({
                scrollTop: $("#titulo-form-4").offset().top
                }, 500, function() {
                // Animation complete.
            });
            $("#medicamento").val(resultado[0].medicamento);
            $("#patologias").val(resultado[0].patologias);
           
        }    
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("ajax false");
    });
}
function editarValLinf(ref_valoracion){
    ref_valoracion_editar = ref_valoracion;
    $.ajax({
        type: "GET",
        url: 'control/vista.php',
        data: { 
            opcion: "get_datos_val_linf",
            ref_valoracion:ref_valoracion
        }
    
    })        
    .done(function(msg) {
        // console.log("ajax done");
        var resultado = $.parseJSON(msg);
        if(resultado!="false"){
            $( "html,body" ).animate({
                scrollTop: $("#titulo-form-8").offset().top
                }, 500, function() {
                // Animation complete.
            });
            var fecha_val_linf = resultado[0].fecha.date; //2019-05-16 00:00:00.000000
            var fecha_val_linf_corta = fecha_val_linf.substr(0,fecha_val_linf.indexOf(' ')); //2019-05-16
            $("#fecha_val_linfedema").val(fecha_val_linf_corta);
            
            $("#localizacion_linf").val(resultado[0].localizacion);
            $("#consistencia_edema").val(resultado[0].consistencia_edema);
            $("#color").val(resultado[0].color);
            $("#valoracion_piel").val(resultado[0].valoracion_piel);
            $("#stemmer").val(resultado[0].stemmer);
            $("#fovea").val(resultado[0].fovea);
            $("#pesadez").val(resultado[0].pesadez);
            $("#rubor").val(resultado[0].rubor);
           
        }    
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("ajax false");
    });
}
function editarInfeccion(id_infeccion){
    
    id_infeccion_editar=id_infeccion;
     $.ajax({
        type: "GET",
        url: 'control/vista.php',
        data: { 
            opcion: "get_datos_infeccion",
            id_infeccion:id_infeccion
        }
    
    })        
    .done(function(msg) {
        // console.log("ajax done");
        var resultado = $.parseJSON(msg);
        if(resultado!="false"){
            $( "html,body" ).animate({
                scrollTop: $("#titulo-form-5").offset().top
                }, 500, function() {
                // Animation complete.
            });
            $("#tipo_inf").val(resultado[0].tipo);
            var fecha_inf = resultado[0].fecha.date; //2019-05-16 00:00:00.000000
            var fecha_inf_corta = fecha_inf.substr(0,fecha_inf.indexOf(' ')); //2019-05-16
            $("#fecha_inf").val(fecha_inf_corta);
            $("#medicamentos_inf").val(resultado[0].medicamento);
           
        }    
    })
    .fail(function( jqXHR, textStatus, errorThrown ) {
        console.log("ajax false");
    });
}
//====================================================================== VALIDAR CAMPOS AL MODIFICAR
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
function isEmptyOrSpaces(str){
    return str === null || str.match(/^ *$/) !== null;
}
function contencionSegunTexto(contencion_sensacion_texto){
    var contencion_sensacion="";
    switch(contencion_sensacion_texto){
        case "Genial":
            contencion_sensacion="1";
        break;
        case "Muy bien":
            contencion_sensacion="2";
        break;
        case "Bien":
            contencion_sensacion="3";
        break;
        case "Normal":
            contencion_sensacion="4";
        break;
        case "Regular":
            contencion_sensacion="5";
        break;
        case "Mal":
            contencion_sensacion="6";
        break;
        case "Muy mal":
            contencion_sensacion="7";
        break;
    }
    return contencion_sensacion;
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
