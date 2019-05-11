<?php 
    session_start();

    if(!(isset($_SESSION["tipo_usuario"]))){
        header("Location: index.php");
    }
    else{
        if($_SESSION["tipo_usuario"]=='fisioterapeuta'){
            header("Location: pagina-principal.php");
        }
    }
?> 
<!DOCTYPE html>
<html>
    <!-- ===============  HEAD ============= -->
    <head>
        <title>LOGO</title>
        <meta charset="utf-8">
        <!-- Mobile First -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">  
        <!-- Iconos --> 
        <link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
		<!-- BOOTSTRAP 4 -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Hojas de estilo -->
        <link rel="stylesheet" type="text/css" href="css/global-style.css">
        <link rel="stylesheet" type="text/css" href="css/pagina-principal-admin-style.css">
        <!-- Gráficas -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/grafica1.css">
    </head>
  
    <!-- ===============  BODY ============= -->
    <body>  
        <!-- Cuadrícula con el máximo ancho de la página -->
        <div class="container-fluid" id="body-container">
            <div class="row">
                <!-- COLUMNA IZQUIERDA -->
                <div class="col-lg-2" id="nav-left-col">
                    <!-- BARRA DE NAVEGACIÓN LATERAL-->
                    <nav id="nav-left">
                        <!-- Logo -->
                        <div>
                            <a href="pagina-principal.php"><img id="web-logo" class="img-fluid" src="img/logo-prueba2-bn.png" class="logo" alt="logo"></a>
                        </div>
                        <!-- Lista desplegable -->
                        <ul class="list-unstyled components">

                            <!-- Apartado "PÁGINA PRINCIPAL"-->
                            <li class="active espaciado-desplegable">
                                <a href="pagina-principal.php">
                                    <span class="ti-home"></span> Página Principal
                                </a>
                            </li>

                            <!-- Apartado "PACIENTES"-->
                            <li class="espaciado-desplegable apartados">
                                <a href="#nav-pacientes" data-toggle="collapse" aria-expanded="false">
                                    <span class="ti-wheelchair"></span> Pacientes
                                </a>
                                <ul class="collapse list-unstyled tamano-letra" id="nav-pacientes">
                                    <li>
                                        <a href="anadir-paciente.php">Añadir paciente</a>
                                    </li>
                                    <li>
                                        <a href="ver-paciente.html">Ver paciente</a>
                                    </li>
                                    <li>
                                        <a href="editar-paciente.html">Editar paciente</a>
                                    </li>
                                    <li>
                                        <a href="pacientes.html">Todos los pacientes</a>
                                    </li>
                                </ul>
                            </li>

                           <!-- Apartado "mediciones"-->
                           <li class="espaciado-desplegable apartados">
                                <a href="#nav-mediciones" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                <span class="ti-ruler-alt"></span> Mediciones
                                </a>
                                <ul class="list-unstyled collapse tamano-letra" id="nav-mediciones" style="">
                                        <li>
                                                <a href="anadir-medicion.html">Añadir medición</a>
                                        </li>
                                        <li>
                                            <a href="ver-mediciones.html">Ver mediciones</a>
                                        </li>
                                        <li>
                                            <a href="editar-mediciones.html">Editar mediciones</a>
                                        </li>
                                        <li>
                                            <a href="mediciones.html">Todas las mediciones</a>
                                        </li>
                                </ul>
                            </li> 

                            <!-- Apartado "GRÁFICAS"-->
                            <li class="espaciado-desplegable apartados">
                                <a href="#nav-graficas" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                    <span class="ti-pie-chart"></span> Gráficas
                                </a>
                                <ul class="list-unstyled collapse tamano-letra" id="nav-graficas" style="">
                                    <li>
                                        <a href="graficas-1.html">Evolución pacientes</a>
                                    </li>
                                    <li>
                                        <a href="graficas-2.html">Estadísticas generales</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- FIN Lista desplegable -->
                    </nav>

                </div>

                <!-- COLUMNA DERECHA -->
                <div class="col-lg-10 col-der" >

                    <!-- Barra de navegación superior =============================================================================== -->
                    <nav id="nav-top" class="navbar navbar-default">
                        <ul class="nav" id="user">
                              <div class="dropdown show">
                                <a class="dropdown-toggle" id="icono-usuario" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="ti-user"></span>
                                </a>
                                    <div id="desplegable" class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                    <h6 class="dropdown-header">Usuario</h6>
                                    <a id="btn-salir" href="logout.php" class="dropdown-item" > <span class="ti-power-off"></span>&nbsp;&nbsp;Salir</a>
                                    </div>
                                </div>
                           
                        </ul>
                    </nav>
                    <!-- Fila título página + Breadcrumb -->
                    <div class="row" id="grupo-titulo-pagina">
                        <!-- Título -->
                        <div class="col-md-6" id="titulo">
                            <h3 class="block-title">Página Principal · Administrador</h3>
                        </div>
                        <!-- Breadcrumb -->
                        <div class="col-md-6">
                            <ol class="breadcrumb" id="localizacion">						
                                <li class="breadcrumb-item color-blanco">
                                    <a href="pagina-principal.php">
                                        <span class="ti-home"></span>
                                        &nbsp;&nbsp;Página principal&nbsp;&nbsp;
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div> <!-- Fin fila -->

                     <!-- Cuerpo página (lado derecho)-->
                    <!-- FILA 1 -->
                    <div id="cuerpo-pagina-1" class="row"> 
                        <div class="col-lg-12 text-center" id="apartado-botones-admin">
                            <div id="botones-admin">
                                    <button id="btn-gestionar-especialistas" type="button" class="button btn">Gestionar especialistas</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <button id="btn-gestionar-pacientes" type="button" class="button btn ">Gestionar pacientes</button>
                            </div> 
                        </div>
                        <div class="col-lg-12">

                        <!-- VENTANA CONFIRMACIÓN BORRAR ESPECIALISTAS -->

                        <div class="modal" id="modal-borrar">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 id="titulo-modal" class="modal-title"></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div id="texto-modal" class="modal-body"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelar-borrar-especialista">Cancelar</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal" id="aceptar-borrar-especialista">Aceptar</button> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TABLA ESPECIALISTAS -->

                            <div id="apartado-especialistas">
                                <h3>Listado de especialistas</h3>
                                <hr>
                                <table class="table" id="fisios-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>tipo</th>
                                            <th>Nombre</th>
                                            <th>Apellido 1</th>
                                            <th>Apellido 2</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                        <!-- Se rellena con la consulta AJAX de JS a la BD -->
                                    <tbody>     
                                       
                                    </tbody>
							    </table>
                            </div>

                            <!-- TABLA PACIENTES -->

                            <div id="apartado-pacientes" class="">
                                <h3>Listado de pacientes</h3>
                                <hr>
                                <table class="table" id="pacientes-table">
                                    <thead>
                                        <tr>
                                            <th>Id usuario</th>
                                            <th>Id fisio</th>
                                            <th>Nombre</th>
                                            <th>Apellido 1</th>
                                            <th>Apellido 2</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                        <!-- Se rellena con la consulta AJAX de JS a la BD -->
                                    <tbody>     
                                       
                                    </tbody>
							    </table>
                            </div>



                        </div>
                        
                        
                    </div>
                </div> <!-- Fin columna derecha-->
            </div> <!-- ROW -->


        </div><!-- CONTAINER FLUID-->

        <!-- SCRIPTS -->
        <script>
            var id_especialista="";
            var id_usuario="";
            var tipo_especialista="";

            $( document ).ready(function() {
                $( "#btn-gestionar-especialistas" ).click(function() {
                    $( "#apartado-pacientes" ).css("display","none");
                    $( "#btn-gestionar-pacientes" ).css("background-color","rgb(109, 109, 109)");
                    $( "#apartado-especialistas" ).css("display","block");
                    $( "#btn-gestionar-especialistas" ).css("background-color","#3da3bc"); 
                    
                });

                $( "#btn-gestionar-pacientes" ).click(function() {
                    $( "#apartado-especialistas" ).css("display","none");
                    $( "#btn-gestionar-especialistas" ).css("background-color","rgb(109, 109, 109)"); 
                    $( "#apartado-pacientes" ).css("display","block");
                    $( "#btn-gestionar-pacientes" ).css("background-color","#3da3bc");
                    
                });


                
            });

          //================== Cuando la página esté cargada,cargamos los usuarios de tipo fisioterapeuta ===================
            
            //No ponemos document ready porque queremos que se cargue antes de que esté cargada la página
            
            //RELLENAR TABLAS DE ESPECIALISTAS y PACIENTES

            $.ajax({
                        type: "GET",
                        url: "control/control_home_admin.php",
                        
                    })        
                    .done(function( data, textStatus, jqXHR ) {
                        
                        if ( console && console.log ) {
                            console.log( "La solicitud de acceso se ha completado correctamente." );
                        }
                        var datos = $.parseJSON(data);
                        console.log(datos);
                        console.log(datos[0]); //tabla especialistas
                        console.log(datos[1]); //tabla pacientes
                        var filas_especialistas='';
                        var filas_pacientes='';
                        datos[0].forEach(function(element) {
                            filas_especialistas+= '<tr><td>'+element.id_especialista+'</td><td>'+element.tipo+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+element.apellido2+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" class="btn azul" value="editarEspecialista" onclick="editarEspecialista(\'' + element.id_especialista + '\')"><span class="ti-pencil-alt"></span></button><button type="button" class="btn mt-1 rojo" value="borrarEspecialista" onclick="borrarEspecialista(\'' + element.id_especialista + '\',\'' + element.tipo + '\')"><span class="ti-trash"></span></button></td></tr>';

					    });
                        $('#fisios-table tbody').html(filas_especialistas);
                        datos[1].forEach(function(element) {
                            filas_pacientes+= '<tr><td>'+element.id_user+'</td><td>'+element.id_especialista+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+element.apellido2+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" class="btn azul" value="editarPaciente" onclick="editarPaciente(\'' + element.id_user + '\')"><span class="ti-pencil-alt"></span></button><button type="button" class="btn mt-1 rojo" value="borrarPaciente" onclick="borrarPaciente(\'' + element.id_user + '\')"><span class="ti-trash"></span></button></td></tr>';

					    });
                        $('#pacientes-table tbody').html(filas_pacientes);
                        //console.log("datos: "+datos);

                    })
                    .fail(function( jqXHR, textStatus, errorThrown ) {
                        if ( console && console.log ) {
                            console.log( "La solicitud de acceso ha fallado: " +  textStatus);
                        }
                    });

            function borrarEspecialista(id_espec, tipo_espec){
                
                event.preventDefault();
                $("#titulo-modal").html("");
                $("#texto-modal").html("");


                var frase = "";
                var titulo="";
                if(tipo_espec=="fisioterapeuta"){
                    titulo="¿Estás seguro de que deseas borrar este fisioterapeuta?";
                    frase = "Ten en cuenta que eso conlleva que todos sus pacientes (si los tiene) se queden sin especialista." ;
                    
                }
                else{//administrador
                    if(id_espec == <?php echo $_SESSION["id_especialista"]?>){//el admin quiere borrarse a sí mismo
                        titulo="¿Estás seguro de que deseas borrarte?";
                        frase="Ten en cuenta que la sesión se cerrará tras aceptar y serás borrado de la base de datos.";
                    }
                    else{
                        titulo="¿Estás seguro de que deseas borrar este administrador?";
                        frase="Ten en cuenta que este usuario se borrará de la base de datos";
                    }
                    
                    
                }
                id_especialista=id_espec;
                tipo_especialista=tipo_espec;

                $("#titulo-modal").html(titulo);
                $("#texto-modal").html(frase);
                $("#modal-borrar").modal();

                
            }
            // function editarEspecialista(id_user){
            //     $("#modal-borrar").modal();
            // }

            $( "#aceptar-borrar-especialista" ).click(function() {//Hará ajax de borrar

                var opcion = "borrar_especialista";

                $.ajax({
                    method: "POST",
                    url: 'control/vista.php',
                    data: {id_especialista:id_especialista, tipo_especialista:tipo_especialista, opcion:opcion},
                    

                })
                .done(function( msg ) {                             	
                    console.log("ajax done");

                    if(msg=="true"){
                        $("body").overhang({
                                    type: "success",
                                    message: "Especialista eliminado correctamente",
                                    duration: 6,
                                    overlay: true,
                                    closeConfirm: true
                        });
                    }
                    else if(msg=="false"){
                        $("body").overhang({
                                    type: "error",
                                    message: "ERROR, algo ha fallado",
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
                // console.log("id especialista: "+id_especialista);
                // console.log("tipo especialista: "+tipo_especialista);
            });

        
        </script>

    </body>
</html>
