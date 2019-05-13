<?php session_start();
    if(!(isset($_SESSION["tipo_usuario"]))){
        header("Location: index.php");
    }
?> 
<!DOCTYPE html>
<html>
    <!-- ===============  HEAD ============= -->
    <head>
        <title>Añadir medición</title>
        <meta charset="utf-8">
        <!-- Mobile First -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">  
        <!-- Iconos --> 
        <link rel="stylesheet" href="css/themify-icons.css">
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
        <link rel="stylesheet" type="text/css" href="css/anadir-paciente-style.css">
        <link rel="stylesheet" type="text/css" href="css/mediciones.css">
        <!-- Gráficas -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/grafica1.css">
         <!-- NOTIFICACIONES OVERHANG.JS  1 -->
        <link rel="stylesheet" type="text/css" href="js/overhang/dist/overhang.min.css" />
        <link rel="stylesheet" href="js/jquery-ui/jquery-ui.min.css">
        
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
                            <li class="espaciado-desplegable">
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
                                        <a href="pacientes.php">Todos los pacientes</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Apartado "mediciones"-->
                            <li class="active espaciado-desplegable apartados">
                                <a href="#nav-mediciones" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                <span class="ti-ruler-alt"></span> Mediciones
                                </a>
                                <ul class="list-unstyled collapse tamano-letra" id="nav-mediciones" style="">
                                        <li>
                                                <a href="anadir-medicion.php">Añadir medición</a>
                                        </li>
                                        <li>
                                            <a href="mediciones.php">Todas las mediciones</a>
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
                                        <a href="graficas-mediciones.php">mediciones</a>
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
                            <h3 class="block-title">Añadir Paciente</h3>
                        </div>
                        <!-- Breadcrumb -->
                        <div class="col-md-6">
                            <ol class="breadcrumb" id="localizacion">						
                                <li class="breadcrumb-item color-blanco">
                                    <a href="pagina-principal.php">
                                        <span class="ti-home"></span>
                                        &nbsp;&nbsp;Página principal
                                    </a>
                                </li>
                                
                                <li class="breadcrumb-item color-blanco">
                                        Paciente
                                </li>
                                <li class="breadcrumb-item color-blanco">
                                    <a href="anadir-paciente.php">
                                        Añadir Paciente
                                    </a>
                                </li>
                               
                            </ol>
                        </div>
                    </div> <!-- Fin fila -->

                     <!-- Cuerpo página (lado derecho)-->
                    <!-- FILA 1 | INPUTS -->
                    
                    <div id="cuerpo-pagina-2" class="row"> 
                        
                        <div class="col-lg-12">
                            <!-- TABLA PACIENTES -->
                            <div id="apartado-pacientes" class="">
                            <div class="form-row">
                                <div class="form-group" id="id-usuario">
									<label for="Select-id-usuario">id usuario:</label>
									&nbsp;
									<select class="form-control" id="Select-id-usuario" name="Select-id-usuario">
									</select>
								</div>
                            </div>
                                <h3>Listado de pacientes</h3>
                                <hr>
                                <table class="table" id="pacientes-table">
                                    <thead>
                                        <tr>
                                            <th>Id usuario</th>
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
                    </div><!-- Fin cuerpo página-->
                </div> <!-- Fin columna derecha-->
            </div> <!-- ROW -->


        </div><!-- CONTAINER FLUID-->

        <!-- SCRIPTS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/jquery-ui/external/jquery/jquery.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/overhang/dist/overhang.min.js"></script> 
        <script type="text/javascript" src="js/notify/notify.min.js"></script>
        <script>
            var id_especialista= <?php echo($_SESSION["id_especialista"]) ?>;
            var listado_pacientes="";
             $.ajax({
                        type: "GET",
                        url: 'control/vista.php',
                        data: { 
                            opcion: "listado_usuarios",
                            id_especialista: id_especialista
                        }
                        
            })        
            .done(function( data, textStatus, jqXHR ) {
                
                if ( console && console.log ) {
                    console.log( "La solicitud de acceso se ha completado correctamente." );
                }
                var datos = $.parseJSON(data);
                var listado_pacientes = datos;
                
                //console.log(datos);
                //RELLENAMOS TABLA
                var filas_pacientes='';
                datos.forEach(function(element) {
                    filas_pacientes+= '<tr id='+element.id_user+'><td>'+element.id_user+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+element.apellido2+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" class="btn mt-1 rojo" value="verPaciente" onclick="verPaciente(\'' + element.id_user + '\')"><span class="ti-eye"></span></button><button type="button" class="btn azul" value="editarPaciente" onclick="editarPaciente(\'' + element.id_user + '\')"><span class="ti-pencil-alt"></span></button></td></tr>';

                });
                $('#pacientes-table tbody').html(filas_pacientes);

                //RELLENAMOS SELECT
                $("#Select-id-usuario").html("");
                $('#Select-id-usuario').append($('<option>', { 
                        value: "Todos",
                        text :  "Todos"
                }));
                listado_pacientes.forEach(function(element) {
                    //console.log(element);
                    $('#Select-id-usuario').append($('<option>', { 
                        value: element.id_user,
                        text : element.id_user
                    }));
                });


            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    console.log( "La solicitud de acceso ha fallado: " +  textStatus);
                }
            });

            $( document ).ready(function() {
                $("#Select-id-usuario").change(function(){
                    var id_usuario = this.value; //valor option del select
                    if(id_usuario=="Todos"){
                        $("tbody tr").show();
                    }
                    else{
                         $("tbody tr:not(#"+id_usuario+")").hide();
                    }
                   

                });

            });

               
        
        
        </script>
      
           