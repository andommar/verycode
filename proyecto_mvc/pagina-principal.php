<?php 
    session_start();
    
    if(!(isset($_SESSION["tipo_usuario"]))){
        header("Location: index.php");
    }
    else{
        if($_SESSION["tipo_usuario"]=='administrador'){
            header("Location: pagina-principal-admin.php");
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

                            <!-- Apartado "TERAPEUTAS"-->
                            <!-- <li class="espaciado-desplegable apartados">
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
                            </li> -->

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
                            <h3 class="block-title">Página Principal · Especialista</h3>
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
                                <!--
                                <li class="breadcrumb-item">Doctors</li>
                                <li class="breadcrumb-item active">Add Doctor</li>
                                -->
                            </ol>
                        </div>
                    </div> <!-- Fin fila -->

                     <!-- Cuerpo página (lado derecho)-->
                    <!-- FILA 1 | ESTADÍSTICAS GENERALES-->
                    <div id="cuerpo-pagina-1" class="row"> 
                        <div class="col-lg-4">
                            <div class="area-cuadro sombra-cuadro color-azul">
                                <div class="widget-izq">
                                    <span class="ti-user"></span>
                                </div>
                                <div class="widget-der">
                                    <h4 class="wiget-titulo">Pacientes</h4>
                                    <span class="numero">348</span>
                                    <p class="flecha-inc mb-0"><span class="ti-angle-up"></span> +20% Aumento</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="area-cuadro sombra-cuadro color-azul">
                                <div class="widget-izq">
                                    <span class="ti-user"></span>
                                </div>
                                <div class="widget-der">
                                    <h4 class="wiget-titulo">Pacientes</h4>
                                    <span class="numero">348</span>
                                    <p class="flecha-inc mb-0"><span class="ti-angle-up"></span> +20% Aumento</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="area-cuadro sombra-cuadro color-azul">
                                <div class="widget-izq">
                                    <span class="ti-user"></span>
                                </div>
                                <div class="widget-der">
                                    <h4 class="wiget-titulo">Pacientes</h4>
                                    <span class="numero">348</span>
                                    <p class="flecha-inc mb-0"><span class="ti-angle-up"></span> +20% Aumento</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FILA 2 | GRÁFICAS -->
                    <!-- FILA 2 | GRÁFICAS -->
                    <div id="cuerpo-pagina-2" class="row"> 
                        <div class="col-lg-6 align-middle">
                            <div class="area-cuadro sombra-cuadro color-azul">
                                <canvas id ="lineChart" height="200" width="400"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="area-cuadro sombra-cuadro color-azul">
                                <canvas id ="lineChart2" height="200" width="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin columna derecha-->
            </div> <!-- ROW -->


        </div><!-- CONTAINER FLUID-->

        <!-- SCRIPTS -->
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
        <script src="js/grafica1.js"></script>

    </body>
</html>
