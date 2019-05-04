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
                            <li class="active espaciado-desplegable apartados">
                                <a href="#nav-pacientes" data-toggle="collapse" aria-expanded="false">
                                    <span class="ti-wheelchair"></span> Pacientes
                                </a>
                                <ul class="collapse list-unstyled tamano-letra" id="nav-pacientes">
                                    <li>
                                        <a href="anadir-paciente.php">Añadir paciente</a>
                                    </li>
                                    <li>
                                        <a href="ver-paciente.html">Añadir medición</a>
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
                            </li>
                             -->
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
                    <div class="col-lg-12" id="col-botones">
                        <button class="btn estilo-botones margen" type="button" id="btn-datos-personales" value="">Datos personales</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-historial-clinico" value="">Historial Clínico</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-cirugias" value="">Cirugías</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-infecciones" value="">Infecciones</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-habitos" value="">Hábitos</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-historial-trat-linf" value="">Historial Tratamiento Linfedema</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-valoracion-linfedema" value="">Valoración Linfedema</button>
                        <button class="btn estilo-botones" type="button" id="btn-medicion" value="">Medición inicial</button>
                    </div>
                        <div class="col-lg-12">
                            <div id="apartado-usuario">
                                <h3>Datos personales</h3><hr>
                                <!--  TABLA usuario  -->
                                <form class="margen-form">
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_nombre">
                                            <label for="nombre">Nombre</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="nombre" name="nombre"><br>
                                        </div>
                                    
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="input_apellido1">
                                            <label for="apellido1">Primer apellido</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="apellido1"><br>
                                        </div>
                                        &nbsp;&nbsp;

                                        <div class="form-group ancho" id="input_apellido2">
                                            <label for="apellido2">Segundo apellido</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="apellido1" id="apellido2"><br>
                                        </div>
                                    </div>
                                    &nbsp;&nbsp;
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_correo">
                                            <label for="correo">Correo</label>
                                            &nbsp;
                                            <input type="email" class="form-control" name="correo" id="correo"><br>
                                        </div>
                                            
                                        &nbsp;&nbsp;
                                        <div class="form-group ancho" id="input_pass">
                                            <label for="pass">Contraseña</label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass" id="pass"><br>
                                        </div>
                                        
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="pass2">
                                            <label for="pass2">Confirmar contraseña</label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass2" id="pass2"><br>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>

                            <div id="apartado-historial">
                                    <h3>Historial clínico</h3><hr>
                                    <!--  TABLA historial_clinico -->
                                    <form class="margen-form">
                                        <div class="form-row justify-content-center">
                                            <div class="form-group ancho" id="input_doc_identificacion">
                                                <label for="doc_identificacion">Documento de identificación</label>
                                                &nbsp;
                                                <input class="form-control" id="doc_identificacion"><br>
                                            </div>
                                        
                                            &nbsp;&nbsp;
                                            
                                            <div class="form-group ancho" id="input_nacionalidad">
                                                <label for="nacionalidad">Nacionalidad</label>
                                                &nbsp;
                                                <input type="text" class="form-control" id="nacionalidad"><br>
                                            </div>
                                            &nbsp;&nbsp;
    
                                            <div class="form-group ancho" id="raza">
                                                <label for="input_raza">Raza</label>
                                                &nbsp;
                                                <input type="text" class="form-control" id="input_raza"><br>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center">
                                            <div class="form-group ancho" id="input_fecha_nacimiento">
                                                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                                &nbsp;
                                                <input type="date" class="form-control" id="fecha_nacimiento"><br>
                                            </div>
                                            <div class="form-group" id="tienda">
                                                <label for="Select-tienda">Tienda:</label>
                                                &nbsp;
                                                <select class="form-control" id="Select-tienda" name="Select-tienda">
                                                </select>
                                                &nbsp;&nbsp;&nbsp;
                                                <div class="form-group">
                                                    <button type="submit" id="btn-buscar" class="btn mb-2">Buscar&nbsp; <i class="fas fa-search"></i></button>
                                                </div>
                                            </div>

                                            <div class="form-group ancho" id="select_sexo">
                                                <label for="sexo">Sexo</label>
                                                &nbsp;
                                                <select id="sexo">
                                                    <option value="h">Hombre</option>
                                                    <option value="m">Mujer</option>
                                                </select>
                                            </div>
                                            <div class="form-group ancho" id="input_fecha_nacimiento">
                                                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                                &nbsp;
                                                <input type="date" class="form-control" id="fecha_nacimiento"><br>
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
