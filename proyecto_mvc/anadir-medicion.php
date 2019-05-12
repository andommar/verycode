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
        <link rel="stylesheet" type="text/css" href="css/todas-mediciones.css">
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
                                <span class="ti-ruler-alt"></span>  Mediciones
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
                        
                       
                            <div id="apartado-usuario">
                                <h3>Mediciones&nbsp;·&nbsp;<span style="color: #6d6d6d; font-size: 15px;">ID de FISIO/ADMIN: <?php echo($_SESSION["id_especialista"])?></span></h3><hr>
                                
                    <!-- =============================== USUARIO | vista, sql y validado ===========================================  -->

                                <form id="form-1" class="margen-form">
                                   
                                    <div class="form-row">
                                        
                                        <div class="form-group col-md-4">
                                            <img id="imagen-brazo" class="img-fluid" src="img/brazo/e.png" class="logo" alt="logo">
                                        </div>
                                        
                                        <div class="form-group col-md-1">
                                            <label for="brazo-a">A</label>
                                            <input type="number" class="form-control" placeholder="" id="brazo-a">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="brazo-b">B</label>
                                            <input type="number" class="form-control" placeholder="" id="brazo-b">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="brazo-c">C</label>
                                            <input type="number" class="form-control" placeholder="" id="brazo-c">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="brazo-d">D</label>
                                            <input type="number" class="form-control" placeholder="" id="brazo-d">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="brazo-e">E</label>
                                            <input type="number" class="form-control" placeholder="" id="brazo-e">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <!--<label for="patient-name">F</label>
                                            <input type="number" class="form-control" placeholder="" id="patient-name">-->
                                        </div>
                                        <div class="form-group col-md-2">
                                            <!--<label for="patient-name">Hola</label>
                                            <input type="number" class="form-control" placeholder="" id="patient-name">-->
                                        </div>

                                        <div class="form-group col-md-4">
                                            <img id="imagen-pierna" class="img-fluid" src="img/pierna/f.png" class="logo" alt="logo">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="pierna-a">A</label>
                                            <input type="number" class="form-control" placeholder="" id="pierna-a">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="pierna-b">B</label>
                                            <input type="number" class="form-control" placeholder="" id="pierna-b">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="pierna-c">C</label>
                                            <input type="number" class="form-control" placeholder="" id="pierna-c">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="pierna-d">D</label>
                                            <input type="number" class="form-control" placeholder="" id="pierna-d">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="pierna-e">E</label>
                                            <input type="number" class="form-control" placeholder="" id="pierna-e">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="pierna-f">F</label>
                                            <input type="number" class="form-control" placeholder="" id="pierna-f">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <!--<label for="patient-name">Hola</label>
                                            <input type="number" class="form-control" placeholder="" id="patient-name">-->
                                        </div>
                                    </div>
                                </form>
                                    




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

               
        
        
        </script>
      
           