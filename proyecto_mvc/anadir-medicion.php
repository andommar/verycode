<?php session_start();
    if(!(isset($_SESSION["tipo_usuario"]))){
        header("Location: index.php");
    }
?> 
<!DOCTYPE html>
<html>
    <!-- ===============  HEAD ============= -->
    <head>
        <title>Nueva medición</title>
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
        <link rel="stylesheet" type="text/css" href="css/anadir-medicion.css">
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
                            <h3 class="block-title">Nueva medición</h3>
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
                                        Mediciones
                                </li>

                                <li class="breadcrumb-item color-blanco">
                                        Nueva Medición
                                </li>
                               
                               
                            </ol>
                        </div>
                    </div> <!-- Fin fila -->

                     <!-- Cuerpo página (lado derecho)-->
                    <!-- FILA 1 | INPUTS -->
                    
                    <div id="cuerpo-pagina-2" class="row"> 
                       <div class="col -ls-12">
                            <!-- =============================== Medición  ** ===========================================  -->

                            <div id="apartado-medicion-inicial">
                                <h3>Nueva medición&nbsp;·&nbsp;<span style="color: #6d6d6d; font-size: 15px;">ID de FISIO/ADMIN: <?php echo($_SESSION["id_especialista"])?></span></h3><hr>
                                <!--  TABLA medición inicial  -->
                                <form id="form-9" class="margen-form">
                                    <div class="titulos color2">
                                        <label>MIEMBRO/S A MEDIR</label>
                                    </div> 
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group" id="radiobuttons_escoger_miembro">
                                            <!-- <label class="mr-2">Deseo insertar mediciones de:</label>
                                                &nbsp; -->
                                            <input type="radio" id="brazo" name="extremidad" value="brazo" checked>
                                            <label class="mr-4" for="brazo">Brazo</label>

                                            <input type="radio" id="pierna" name="extremidad" value="pierna">
                                            <label for="pierna" class="mr-4">Pierna</label>
                                        </div>
                                    </div><!-- Fin fila 1 -->
                                    <!-- ===============================================      brazo       =======================================-->
                                    <div id="panel-brazo" >
                                        <div class="text-center">
                                                <img id="imagen-brazo" class="img-fluid" src="img/brazo/e.png" class="logo" alt="logo">
                                        </div><!-- Fin fila 2 -->
                                        <div class="titulos form-group ancho" id="input_fecha_brazo">
                                            <label for="fecha_brazo">Fecha</label>
                                            &nbsp;
                                            <input type="date" class="form-control" name="fecha_brazo" id="fecha_brazo" required=""><br>
                                        </div>
                                        <div class="titulos color2 mt-3">
                                                <label id="titulo-brazo-i">LADO IZQUIERDO</label>
                                                <label id="titulo-brazo-d">LADO DERECHO</label>
                                        </div>
                                        <div class="titulos form-group" id="miembro_sano_brazo">
                                                <input type="radio" value="brazo_i" id="miembro_sano_brazo_i" name="miembro_sano_brazo" checked>
                                                <label class="mr-4" for="miembro_sano_brazo_i">Miembro sano</label>

                                                <input class="margen-radio" value="brazo_d" type="radio" id="miembro_sano_brazo_d" name="miembro_sano_brazo" >
                                                <label class="mr-4" for="miembro_sano_brazo_d">Miembro sano</label>
                                        </div>
                                        <div class="form-row espaciado-empty">

                                            <!-- BRAZO IZQUIERDO -->
                                            <div class="form-group col-sm-1" id="input_brazo_i_p1">
                                                <label for="brazo_i_p1">A</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="brazo_i_p1" id="brazo_i_p1" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_brazo_i_p2">
                                                <label for="brazo_i_p2">B</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="brazo_i_p2" id="brazo_i_p2" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_brazo_i_p3">
                                                <label for="brazo_i_p3">C</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="brazo_i_p3" id="brazo_i_p3" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_brazo_i_p4">
                                                <label for="brazo_i_p4">D</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="brazo_i_p4" id="brazo_i_p4" required><br>
                                            </div>
                                            <div class="form-group col-sm-1 ancho" id="input_brazo_i_p5">
                                                <label for="brazo_i_p5">E</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="brazo_i_p5" id="brazo_i_p5" required><br>
                                            </div>

                                            <!-- BRAZO DERECHO -->
                                            <div class="form-group col-sm-1" id="input_brazo_d_p1">
                                                <label for="brazo_d_p1">A</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="brazo_d_p1" id="brazo_d_p1" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_brazo_d_p2">
                                                <label for="brazo_d_p2">B</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="brazo_d_p2" id="brazo_d_p2" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_brazo_d_p3">
                                                <label for="brazo_d_p3">C</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="brazo_d_p3" id="brazo_d_p3" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_brazo_d_p4">
                                                <label for="brazo_d_p4">D</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="brazo_d_p4" id="brazo_d_p4" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_brazo_d_p5">
                                                <label for="brazo_d_p5">E</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="brazo_d_p5" id="brazo_d_p5" required><br>
                                            </div>
                                        </div><!-- Fin fila 3 -->
                                    </div>
                                     <!-- ===============================================       fin brazo       =======================================-->
                                      <!-- ===============================================       pierna         =======================================-->
                                    <div id="panel-pierna">
                                        <div class="text-center">
                                            <img id="imagen-pierna" class="img-fluid" src="img/pierna/f.png" class="logo" alt="logo">
                                        </div><!-- Fin fila 4 -->
                                        <div class="titulos form-group ancho" id="input_fecha_pierna">
                                            <label for="fecha_pierna">Fecha</label>
                                            &nbsp;
                                            <input type="date" class="form-control" name="fecha_pierna" id="fecha_pierna" required=""><br>
                                        </div>
                                        <div class="titulos color2 mt-3">
                                                <label id="titulo-pierna-i">LADO IZQUIERDO</label>
                                                <label id="titulo-pierna-d">LADO DERECHO</label>
                                        </div>
                                        <div class="titulos form-group" id="miembro_sano_pierna">
                                                <input type="radio" value="pierna_i" id="miembro_sano_pierna_i" name="miembro_sano_pierna" checked>
                                                <label class="mr-4"  for="miembro_sano_pierna_i">Miembro sano</label>

                                                <input class="margen-radio" value="pierna_d" type="radio" id="miembro_sano_pierna_d" name="miembro_sano_pierna" >
                                                <label class="mr-4" for="miembro_sano_pierna_d">Miembro sano</label>
                                        </div>
                                        <div class="form-row espaciado-empty">
                                            <!-- PIERNA IZQUIERDA -->
                                            <div class="form-group margen-inferior col-sm-1" id="input_pierna_i_p1">
                                                <label for="pierna_i_p1">A</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_i_p1" id="pierna_i_p1" required><br>
                                            </div>
                                            <div class="form-group margen-inferior col-sm-1" id="input_pierna_i_p2">
                                                <label for="pierna_i_p2">B</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_i_p2" id="pierna_i_p2" required><br>
                                            </div>
                                            <div class="form-group margen-inferior col-sm-1" id="input_pierna_i_p3">
                                                <label for="pierna_i_p3">C</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_i_p3" id="pierna_i_p3" required><br>
                                            </div>
                                        

                                            <!-- PIERNA DERECHA -->
                                            <div class="form-group margen-inferior col-sm-1" id="input_pierna_d_p1">
                                                <label for="pierna_d_p1">A</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_d_p1" id="pierna_d_p1" required><br>
                                            </div>
                                            <div class="form-group margen-inferior col-sm-1" id="input_pierna_d_p2">
                                                <label for="pierna_d_p2">B</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_d_p2" id="pierna_d_p2" required><br>
                                            </div>
                                            <div class="form-group margen-inferior col-sm-1" id="input_pierna_d_p3">
                                                <label for="pierna_d_p3">C</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_d_p3" id="pierna_d_p3" required><br>
                                            </div>
                                            

                                        </div><!-- Fin fila 5 -->
                                        <div class="form-row espaciado-empty">
                                            <!-- PIERNA IZQUIERDA -->
                                            <div class="form-group col-sm-1" id="input_pierna_i_p4">
                                                <label for="pierna_i_p4">D</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_i_p4" id="pierna_i_p4" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_pierna_i_p5">
                                                <label for="pierna_i_p5">E</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_i_p5" id="pierna_i_p5" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_pierna_i_p6">
                                                <label for="pierna_i_p6">F</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_i_p6" id="pierna_i_p6" required><br>
                                            </div>
                                            <!-- PIERNA DERECHA -->
                                             <div class="form-group col-sm-1" id="input_pierna_d_p4">
                                                <label for="pierna_d_p4">D</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_d_p4" id="pierna_d_p4" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_pierna_d_p5">
                                                <label for="pierna_d_p5">E</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_d_p5" id="pierna_d_p5" required><br>
                                            </div>
                                            <div class="form-group col-sm-1" id="input_pierna_d_p6">
                                                <label for="pierna_d_p6">F</label>
                                                &nbsp;
                                                <input type="number" min="1" step=".01" class="form-control" name="pierna_d_p6" id="pierna_d_p6" required><br>
                                            </div>
                                           
                                            <input type="hidden" id="id_usuario" value="<?php echo($_GET["id_user"]) ?>" />
                                        </div><!-- Fin fila 6 -->
                                    </div>
                                    <!-- ===============================================       fin pierna      =======================================-->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="button" id="btn-submit-9"  value='<?php echo($_SESSION["id_especialista"])?>'>Guardar datos</button>
                                    </div>
                                </form>
                            </div> <!-- fin Medición inicial -->

                        </div>
                    
                    </div><!-- Fin cuerpo página-->
                </div> <!-- Fin columna derecha-->
            </div> <!-- ROW -->


        </div><!-- CONTAINER FLUID-->

        <!-- SCRIPTS -->  
        <script>
            var id_especialista= <?php echo($_SESSION["id_especialista"]) ?>;
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/jquery-ui/external/jquery/jquery.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/overhang/dist/overhang.min.js"></script> 
        <script type="text/javascript" src="js/notify/notify.min.js"></script>
        <script type="text/javascript" src="js/anadir-medicion.js"></script>
        
      
        

      
           