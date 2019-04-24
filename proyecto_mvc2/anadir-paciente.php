<?php session_start();
if(!(isset($_SESSION["tipo_usuario"]))){
    header("Location: index.php");
}
?> 
<!DOCTYPE html>
<html>
    <!-- ===============  HEAD ============= -->
    <head>
        <title>Añadir paciente</title>
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
        <!-- Gráficas -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/grafica1.css">
        <link rel="stylesheet" href="css/formularios-style.css">
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
                            <a href="index.html"><img id="web-logo" class="img-fluid" src="img/logo-prueba2-bn.png" class="logo" alt="logo"></a>
                        </div>
                        <!-- Lista desplegable -->
                        <ul class="list-unstyled components">

                            <!-- Apartado "PÁGINA PRINCIPAL"-->
                            <li class="espaciado-desplegable">
                                <a href="index.html">
                                    <span class="ti-home"></span> Página Principal
                                </a>
                            </li>

                            <!-- Apartado "PACIENTES"-->
                            <li class="active espaciado-desplegable apartados">
                                <a href="#nav-pacientes" data-toggle="collapse" aria-expanded="false">
                                    <span class="ti-wheelchair"></span> Pacientes
                                </a>
                                <ul class="collapse list-unstyled tamano-letra" id="nav-pacientes">
                                    <li>
                                        <a href="anadir-paciente.html">Añadir paciente</a>
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

                            <!-- Apartado "TERAPEUTAS"-->
                            <li class="espaciado-desplegable apartados">
                                <a href="#nav-terapeutas" data-toggle="collapse" aria-expanded="false" class="collapsed">
                                    <span class="ti-user"></span> Terapeutas
                                </a>
                                <ul class="list-unstyled collapse tamano-letra" id="nav-terapeutas" style="">
                                        <li>
                                                <a href="anadir-terapeuta.html">Añadir terapeuta</a>
                                        </li>
                                        <li>
                                            <a href="ver-terapeuta.html">Ver terapeuta</a>
                                        </li>
                                        <li>
                                            <a href="editar-paciente.html">Editar terapeuta</a>
                                        </li>
                                        <li>
                                            <a href="terapeutas.html">Todos los terapeutas</a>
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
                                <!--<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
                                    <h5>John Willing</h5>
                                    <a class="dropdown-item" href="#">
                                        <span class="ti-settings"></span> Settings</a>
                                    <a class="dropdown-item" href="#">
                                        <span class="ti-help-alt"></span> Help</a>
                                    <a class="dropdown-item" href="#">
                                        <span class="ti-power-off"></span> Logout</a>
                                </div>-->
                           
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
                                    <a href="index.html">
                                        <span class="ti-home"></span>
                                        &nbsp;&nbsp;Página principal
                                    </a>
                                </li>
                                
                                <li class="breadcrumb-item color-blanco">Paciente</li>
                                <li class="breadcrumb-item color-blanco">Añadir Paciente</li>
                               
                            </ol>
                        </div>
                    </div> <!-- Fin fila -->

                     <!-- Cuerpo página (lado derecho)-->
                    <!-- FILA 1 | INPUTS -->
                    <div id="cuerpo-pagina-2" class="row"> 
                        <div class="col-lg-12">
                            <div id="apartado-usuario">
                                <h3>Datos personales</h3><hr>
                                <form class="margen-form">
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="nombre">
                                            <label for="input-nombre">Nombre</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="input-nombre"><br>
                                        </div>
                                    
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="apellido1">
                                            <label for="input-apellido1">Primer apellido</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="input-apellido1"><br>
                                        </div>
                                        &nbsp;&nbsp;

                                        <div class="form-group ancho" id="apellido2">
                                            <label for="input-apellido2">Segundo apellido</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="input-apellido2"><br>
                                        </div>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="correo">
                                            <label for="input-correo">Correo</label>
                                            &nbsp;
                                            <input type="email" class="form-control" id="input-correo"><br>
                                        </div>
                                            
                                        &nbsp;&nbsp;
                                        <div class="form-group ancho" id="pass1">
                                            <label for="input-pass1">Contraseña</label>
                                            &nbsp;
                                            <input type="password" class="form-control" id="input-pass1"><br>
                                        </div>
                                        
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="pass2">
                                            <label for="input-pass2">Confirmar contraseña</label>
                                            &nbsp;
                                            <input type="password" class="form-control" id="input-pass2"><br>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>

                            <div id="apartado-historial">
                                    <h3>Historial clínico</h3><hr>
                                    <!-- doc_identificacion VARCHAR(30),
                                    nacionalidad VARCHAR(150),
                                        raza VARCHAR(150),	
                                        fecha_nacimiento DATE,
                                        sexo CHAR(1),
                                        altura int,
                                        peso int,
                                        tipo_congenito VARCHAR(50),
                                        subtipo_congenito VARCHAR(50),
                                        accidente VARCHAR(150),
                                        fecha_debut DATE,
                                        familiar_linfedema CHAR(1),
                                        motivo_secundario VARCHAR(50),
                                        ant_vasculares CHAR(1),
                                        ant_infeccion_venosa CHAR(1),
                                        ant_sobrepeso CHAR(1),
                                        ant_lipedema CHAR(1),
                                        ant_permeabilidad_cap CHAR(1),
                                        ant_ansiedad CHAR(1),
                                        ant_diabetes CHAR(1),
                                        ant_triquiasis CHAR(1),
                                        ant_sindromes VARCHAR(150),
                                    profesion VARCHAR(50),
                                    /*---- AÑADIDO DE LA TABLA HABITOS----- */
                                    grado_resp_profesion VARCHAR(2),
                                        grado_stress_profesion VARCHAR(2),
                                        /*------------------*/
                                    medicamentos VARCHAR(50), /*AÑADIDO DE LA TABLA MEDICAMENTOS*/
                                    -->
                                    <form class="margen-form">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group ancho" id="doc-identificacion">
                                                <label for="input-doc-identificacion">Documento de identificación</label>
                                                &nbsp;
                                                <input type="text" class="form-control" id="input-doc-identificacion"><br>
                                            </div>
                                        
                                            &nbsp;&nbsp;
                                            
                                            <div class="form-group ancho" id="nacionalidad">
                                                <label for="input-nacionalidad">Nacionalidad</label>
                                                &nbsp;
                                                <input type="text" class="form-control" id="input-nacionalidad"><br>
                                            </div>
                                            &nbsp;&nbsp;
    
                                            <div class="form-group ancho" id="raza">
                                                <label for="input-raza">Raza</label>
                                                &nbsp;
                                                <input type="text" class="form-control" id="input-raza"><br>
                                            </div>
                                        </div>
                                        &nbsp;&nbsp;
                                        
                                        
                                    </form>
                                </div>





                        </div>
                    </div><!-- Fin cuerpo página-->
                </div> <!-- Fin columna derecha-->
            </div> <!-- ROW -->


        </div><!-- CONTAINER FLUID-->

        <!-- SCRIPTS -->
        <script>
           
        </script>

    </body>
</html>
