

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
