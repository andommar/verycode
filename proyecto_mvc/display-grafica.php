<?php session_start();
    if(!(isset($_SESSION["tipo_usuario"]))){
        header("Location: index.php");
    }
    // if((isset($_POST["id_usuario"]))){
    //     $_SESSION["id_usuario"]= $_POST["id_usuario"];
    //     echo json_encode ('todo bien');
    // }

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
        <!-- Gráficas -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/grafica1.css">
        <link rel="stylesheet" href="css/display-grafica.css">
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
                            <?php if($_SESSION["tipo_usuario"]=='fisioterapeuta'){?>
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
                                        <a href="mediciones.php">mediciones</a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>
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
                        <div class="text-right" style="margin-right: 4em;color: #555555;font-size: 12px;/* font-weight: 600; */">
                            <span><i>Bienvenid@, <?php echo($_SESSION["nre_especialista"]);?></i></span>
                        </div>
                    </nav>
                    <!-- Fila título página + Breadcrumb -->
                    <div class="row" id="grupo-titulo-pagina">
                        <!-- Título -->
                        <div class="col-md-6" id="titulo">
                            <h3 id="titulo-paciente" class="block-title">Mediciones · Paciente <?php echo($_GET["id_user"]); ?></h3>
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
                                    <a href="mediciones.php">        
                                        Mediciones
                                    </a>
                                </li>
                                <li class="breadcrumb-item color-blanco">
                                    Ver mediciones
                                </li>
                               
                            </ol>
                        </div>
                    </div> <!-- Fin fila -->

                     <!-- Cuerpo página (lado derecho)-->
                    <!-- FILA 1 | INPUTS -->
                    
                    <div id="cuerpo-pagina-2" class="row"> 
                        
                       
                    <!-- =============================== USUARIO | vista, sql y validado ===========================================  -->
                        <div class="col-lg-12">
                            
                            <div class="col-lg-12 text-center" id="apartado-botones-graficas">
                                <div id="botones-graficas">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <button id="btn-sano-afecto" type="button" class="button btn">Sano-afecto</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button id="btn-evolucion" type="button" class="button btn ">Evolución puntos</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <button id="btn-brazo" type="button" class="button btn">Brazo</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button id="btn-pierna" type="button" class="button btn ">Pierna</button>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div id="grafica-sano-afecto">
                                <div class="row">
                                    <div class="sombra-cuadro col-md-6 mx-auto mt-4">
                                        <div id="grafica1" width=100%>
                                            <canvas id ="lineChart" height="300" width="400"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="sombra-cuadro col-md-10 mx-auto mt-4 mb-4">
                                        <table class="table" id="pacientes-table">
                                            <thead>
                                                <tr>
                                                <th>Fecha</th>
                                                <th>Extremidad</th>
                                                <th>Lado</th>
                                                <th>Lado sano</th>
                                                <th>P1</th>
                                                <th>P2</th>
                                                <th>P3</th>
                                                <th>P4</th>
                                                <th>P5</th>
                                                <th>Acción</th>
                                                </tr>
                                            </thead>
                                                <!-- Se rellena con la consulta AJAX de JS a la BD -->
                                            <tbody>     
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                            <div id="grafica-evolucion" class="row">
                                <div class="sombra-cuadro col-md-6 mx-auto mt-4">
                                    <div width=100%>
                                        <canvas id ="lineChartevolucion" height="300" width="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div id="grafica-evolucion-pierna" class="row">
                                <div class="sombra-cuadro col-md-6 mx-auto mt-4">
                                    <div width=100%>
                                        <canvas id ="lineChartevolucion_pierna" height="300" width="400"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div id="grafica-pierna">
                                <div class="row">
                                    <div class="sombra-cuadro col-md-6 mx-auto mt-4">
                                        <div id="grafica_piernas" width=100%>
                                            <canvas id ="lineChartPierna" height="300" width="400"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="sombra-cuadro col-md-10 mx-auto mt-4 mb-4">
                                        <table class="table" id="pacientes-table-piernas">
                                            <thead>
                                                <tr>
                                                <th>Fecha</th>
                                                <th>Extremidad</th>
                                                <th>Lado</th>
                                                <th>Lado sano</th>
                                                <th>P1</th>
                                                <th>P2</th>
                                                <th>P3</th>
                                                <th>P4</th>
                                                <th>P5</th>
                                                <th>P6</th>
                                                <th>Acción</th>
                                                </tr>
                                            </thead>
                                                <!-- Se rellena con la consulta AJAX de JS a la BD -->
                                            <tbody>     
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div><!-- Fin cuerpo página-->
                </div> <!-- Fin columna derecha-->
            </div> <!-- ROW -->

            <input id="usuario" type="hidden" value="<?php echo $_GET["id_user"]?>"> 
        </div><!-- CONTAINER FLUID-->

        <!-- SCRIPTS -->
        <script src ="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
        <script src="js/graficas_datos.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/jquery-ui/external/jquery/jquery.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/overhang/dist/overhang.min.js"></script> 
        <script type="text/javascript" src="js/notify/notify.min.js"></script>
        <script>
            var id_especialista= <?php echo($_SESSION["id_especialista"]) ?>;
        </script>
      
           