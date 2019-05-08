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
        <link rel="stylesheet" href="css/formularios-style.css">
        <script>
            //================== Cuando la página esté cargada,cargamos los usuarios de tipo fisioterapeuta ===================
            //$(document).ready(function () {
                    $.ajax({
                        type: "GET",
                        url: "control/control_home_admin.php",
                        
                    })        
                    .done(function( data, textStatus, jqXHR ) {
                        
                        if ( console && console.log ) {
                            console.log( "La solicitud de acceso se ha completado correctamente." );
                        }
                        var datos = $.parseJSON(data);
                        var fila='';
                        datos.forEach(function(element) {
                            fila+= '<tr><td>'+element.id_especialista+'</td><td>'+element.tipo+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+element.apellido2+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" class="btn mb-2 btn-editar-cliente" value="editarCliente" onclick="editarFisio('+element.id_especialista+')"><i class="fas fa-edit"></i></button></td></tr>';

					    });
                        $('#fisios-table tbody').html(fila);
                        //console.log("datos: "+datos);

                    })
                    .fail(function( jqXHR, textStatus, errorThrown ) {
                        if ( console && console.log ) {
                            console.log( "La solicitud de acceso ha fallado: " +  textStatus);
                        }
                    });

            //});//DOCUMENT READY

        
        
        
        </script>
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

                            <!-- Apartado "CALENDARIO"-->
                            <li class="espaciado-desplegable apartados">
                                    <a href="#nav-calendario" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                        <span class="ti-pencil-alt"></span> Calendario
                                    </a>
                                    <ul class="list-unstyled collapse tamano-letra" id="nav-calendario" style="">
                                            <li>
                                                    <a href="anadir-calendario.html">Añadir cita</a>
                                            </li>
                                            <li>
                                                <a href="editar-paciente.html">Editar citas</a>
                                            </li>
                                            <li>
                                                <a href="calendario.html">Todas las citas</a>
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
                        <div class="col-lg-12">
                            <table cellpadding="15" id="botones-admin">
                                <thead>
                                    <th>Gestionar usuarios</th>
                                    <th>Gestionar pacientes</th>
                                </thead>
                            </table> 
                        </div>
                        <div class="col-lg-12">
                            <div id="apartado-usuarios" class="">
                                <h3>Listado de fisioterapeutas</h3>
                                <hr>
                                <!-- TABLA FISIOTERAPEUTAS -->
                                <!-- 

                                    id_especialista int IDENTITY(1,1),
                                    correo VARCHAR(100) NOT NULL UNIQUE,	
                                    pass VARCHAR(50) NOT NULL ,
                                    pass2 VARCHAR(50) NOT NULL,
                                    nombre VARCHAR(30) NOT NULL,
                                    apellido1 VARCHAR(50) NOT NULL ,
                                    apellido2 VARCHAR(50) NOT NULL,
                                    tipo VARCHAR(25) NOT NULL CHECK(tipo IN('administrador','especialista','fisioterapeuta')),

                                -->
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
                                    <tr>
                                        <td id="id_especialista"></td>
                                        <td id="tipo"></td>
                                        <td id="nombre"></td>
                                        <td id="apellido1"></td>
                                        <td id="apellido2"></td>
                                        <td id="correo"></td>
                                        <td id="pass"></td>
									</tr>
									
								</tbody>
							</table>
                            </div>
                        </div>
                        
                        
                    </div>
                </div> <!-- Fin columna derecha-->
            </div> <!-- ROW -->


        </div><!-- CONTAINER FLUID-->

        <!-- SCRIPTS -->
        

    </body>
</html>
