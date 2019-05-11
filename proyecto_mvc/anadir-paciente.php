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
                             <li class="active espaciado-desplegable apartados">
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
                                <span class="ti-ruler-alt"></span>  Mediciones
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
                        <button class="btn estilo-botones margen" type="button" id="btn-datos-personales" value="" onclick="mostrarFormulario('datos-personales')">Datos personales</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-historial-clinico" value="" onclick="mostrarFormulario('historial-clinico')">Historial Clínico</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-cirugias" value="" onclick="mostrarFormulario('cirugias')">Cirugías</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-medicamentos" value="" onclick="mostrarFormulario('medicamentos')">Medicamentos</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-infecciones" value="" onclick="mostrarFormulario('infecciones')">Infecciones</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-habitos" value="" onclick="mostrarFormulario('habitos')">Hábitos</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-historial-trat-linf" value="" onclick="mostrarFormulario('historial-trat-linf')">Historial Tratamiento Linfedema</button>
                        <button class="btn estilo-botones margen" type="button" id="btn-valoracion-linfedema" value="" onclick="mostrarFormulario('valoracion-linfedema')">Valoración Linfedema</button>
                        <button class="btn estilo-botones" type="button" id="btn-medicion" value="" onclick="mostrarFormulario('medicion')">Medición inicial</button>
                    </div>
                        <div class="col-lg-12">
                            <div id="apartado-usuario">
                                <h3>Datos personales&nbsp;·&nbsp;<span style="color: #6d6d6d; font-size: 15px;">ID de FISIO/ADMIN: <?php echo($_SESSION["id_especialista"])?></span></h3><hr>
                                
                    <!-- =============================== USUARIO ===========================================  -->

                                <form id="form-1" class="margen-form">
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_nombre">
                                            <label for="nombre">Nombre</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="nombre" name="nombre" required><br>
                                        </div>
                                    
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="input_apellido1">
                                            <label for="apellido1">Primer apellido</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="apellido1" required><br>
                                        </div>
                                        &nbsp;&nbsp;

                                        <div class="form-group ancho" id="input_apellido2">
                                            <label for="apellido2">Segundo apellido</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="apellido1" id="apellido2" required><br>
                                        </div>
                                    </div>  <!--Fin fila 1-->
                                    &nbsp;&nbsp;
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_correo">
                                            <label for="correo">Correo</label>
                                            &nbsp;
                                            <input type="email" class="form-control" name="correo" id="correo" required><br>
                                        </div>
                                            
                                        &nbsp;&nbsp;
                                        <div class="form-group ancho" id="input_pass">
                                            <label for="pass">Contraseña</label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass" id="pass" required><br>
                                        </div>
                                        
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="input_pass2">
                                            <label for="pass2">Confirmar contraseña</label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass2" id="pass2" required><br>
                                        </div>
                                    </div>  <!--Fin fila 2-->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-submit-1" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                        <input type="hidden" id="opcion-form" value="registro_paciente">
                                    </div>
                                </form>
                            </div>
            <!-- =============================== HISTORIAL CLINICO ===========================================  -->

                            <div id="apartado-historial">
                                <h3>Historial clínico</h3><hr>
                                <!--  TABLA historial_clinico -->
                                <form id="form-2" class="margen-form">
                                    <div class="titulos">
                                        <label>DATOS PRINCIPALES</label>
                                    </div>
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_doc_identificacion">
                                            <label for="doc_identificacion">Documento de identificación</label>
                                            &nbsp;
                                            <input class="form-control" id="doc_identificacion" required><br>
                                        </div>
                                        
                                        <div class="form-group ancho" id="input_nacionalidad">
                                            <label for="nacionalidad">Nacionalidad</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" required><br>
                                        </div>

                                        <div class="form-group ancho" id="input_raza">
                                            <label for="raza">Raza</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="raza" id="raza" required><br>
                                        </div>
                                    </div> <!--Fin fila 1-->
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_fecha_nacimiento">
                                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                            &nbsp;
                                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required><br>
                                        </div>
                                        <div class="form-group ancho" id="select_sexo">
                                            <label for="sexo">Sexo</label>
                                            &nbsp;
                                            <div>
                                                <select id="sexo" class="form-control form-control-md">
                                                    <option value="hombre">Hombre</option>
                                                    <option value="mujer">Mujer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho" id="input_altura">
                                            <label for="altura">Altura (cm)</label>
                                            &nbsp;
                                            <input size="3" type="number" step=".01" class="form-control" id="altura" min="1" max="250" required>
                                        </div>
                                    </div> <!--Fin fila 2-->
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho" id="input_peso">
                                            <label for="peso">Peso (kg)</label>
                                            &nbsp;
                                            <input type="number" step=".01" min="5" max="500" class="form-control" id="peso" required><br>
                                        </div>
                                    
                                    </div>
                                    <div class="titulos">
                                        <label>ORIGEN DEL LINFEDEMA</label>
                                    </div>
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho" id="select_tipo_congenito">
                                            <label for="tipo_congenito">Tipo</label>
                                            &nbsp;
                                            <div>
                                                <select id="tipo_congenito" class="form-control form-control-md">
                                                    <option>Primario</option>
                                                    <option>Secundario</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group ancho" id="select_subtipo_congenito">
                                            <label for="subtipo_congenito">Subtipo</label>
                                            &nbsp;
                                            <div>
                                                <select id="subtipo_congenito" class="form-control form-control-md">
                                                    <!-- Por defecto salen las opciones de congenito primario -->
                                                    <option>Precoz</option>
                                                    <option>Tardío</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>  <!-- Fin fila 3 -->
                                    <div class="form-row justify-content-center espaciado-otro">
                                        <div class="form-group col-sm-12" id="input_subtipo_congenito_otro">
                                            <label class="col-form-label" for="subtipo_congenito_otro">Si seleccionaste "Otro" o "Accidente" en el campo anterior, especifica tu respuesta</label>
                                            <input type="text" class="form-control" name="subtipo_congenito_otro" id="subtipo_congenito_otro" disabled="disabled">
                                        </div>
                                    </div><!-- Fin fila 4 -->
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_fecha_debut">
                                            <label for="fecha_debut">Fecha de debut</label>
                                            &nbsp;
                                            <input type="date" class="form-control" name="fecha_debut" id="fecha_debut"><br>
                                        </div>
                                        <div class="form-group ancho" id="select_familiar_linfedema">
                                            <label for="familiar_linfedema">Familiar con linfedema</label>
                                            &nbsp;
                                            <div>
                                                <select id="familiar_linfedema" class="form-control form-control-md">
                                                    <option value="S">Si</option>
                                                    <option value="N">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho" id="select_motivo_secundario">
                                            <label for="motivo_secundario">Motivo secundario</label>
                                            &nbsp;
                                            <div>
                                                <select id="motivo_secundario" class="form-control form-control-md">
                                                    <option>Post Cirugía</option>
                                                    <option>Nº Ganglios</option>
                                                    <option>Post Radioterapia</option>
                                                    <option>Post Pinchazo</option>
                                                    <option>Post Toma Tensión</option>
                                                    <option>Cargando Peso</option>
                                                    <option>Infección</option>
                                                    <option>Picadura Mosquito</option>
                                                    <option>Esfuerzo</option>
                                                    <option>Quemadura</option>
                                                    <option>Golpe</option>
                                                    <option>Corte</option>
                                                    <option>Torcedura Tobillo</option>
                                                    <option>Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> <!-- Fin fila 5 -->                 
                                    <div class="form-row justify-content-center espaciado-otro">
                                        <div class="form-group col-sm-12" id="input_motivo_secundario_otro">
                                            <label class="col-form-label" for="motivo_secundario_otro">Si seleccionaste "Otro" en el campo anterior, especifica tu respuesta</label>
                                            <input type="text" class="form-control" name="motivo_secundario_otro" id="motivo_secundario_otro" disabled="disabled">
                                        </div>
                                    </div><!-- Fin fila 6 -->
                                    <div class="titulos">
                                        <label>ANTECEDENTES</label>
                                    </div>
                                    <div class="form-row espaciado-empty tamano-letra">
                                        <div class="form-check" id="check_ant_vasculares">
                                            <input type="checkbox" class="form-check-input mouse-pointer" id="ant_vasculares">
                                            <label class="form-check-label mouse-pointer" for="ant_vasculares">Vasculares</label>
                                        </div>
                                        &nbsp; &nbsp; &nbsp;
                                        <div class="form-check" id="check_ant_infeccion_venosa">
                                            <input type="checkbox" class="form-check-input mouse-pointer" id="ant_infeccion_venosa">
                                            <label class="form-check-label mouse-pointer" for="ant_infeccion_venosa">Infección Venosa</label>
                                        </div>
                                        &nbsp; &nbsp; &nbsp;
                                        <div class="form-check" id="check_ant_sobrepeso">
                                            <input type="checkbox" class="form-check-input mouse-pointer" id="ant_sobrepeso">
                                            <label class="form-check-label mouse-pointer" for="ant_sobrepeso">Sobrepeso</label>
                                        </div>
                                        &nbsp; &nbsp; &nbsp;
                                        <div class="form-check" id="check_ant_lipedema">
                                            <input type="checkbox" class="form-check-input mouse-pointer" id="ant_lipedema">
                                            <label class="form-check-label mouse-pointer" for="ant_lipedema">Lipedema</label>
                                        </div>
                                        &nbsp; &nbsp; &nbsp;
                                        <div class="form-check" id="check_ant_permeabilidad_cap">
                                            <input type="checkbox" class="form-check-input mouse-pointer" id="ant_permeabilidad_cap">
                                            <label class="form-check-label mouse-pointer" for="ant_permeabilidad_cap">Permeabilidad Cap</label>
                                        </div>
                                        &nbsp; &nbsp; &nbsp;
                                        <div class="form-check" id="check_ant_ansiedad">
                                            <input type="checkbox" class="form-check-input mouse-pointer" id="ant_ansiedad">
                                            <label class="form-check-label mouse-pointer" for="ant_ansiedad">Ansiedad</label>
                                        </div>
                                        &nbsp; &nbsp; &nbsp;
                                        <div class="form-check" id="check_ant_diabetes">
                                            <input type="checkbox" class="form-check-input mouse-pointer" id="ant_diabetes">
                                            <label class="form-check-label mouse-pointer" for="ant_diabetes">Diabetes</label>
                                        </div>
                                        &nbsp; &nbsp; &nbsp;
                                        <div class="form-check" id="check_ant_triquiasis">
                                            <input type="checkbox" class="form-check-input mouse-pointer" id="ant_triquiasis">
                                            <label class="form-check-label mouse-pointer" for="ant_triquiasis">Triquiasis</label>
                                        </div>
                                    </div> <!-- Fin fila 7 -->

                                    <div class="form-row justify-content-center espaciado-otro">
                                        <div class="form-group col-sm-12 mt-2" id="input_ant_sindromes">
                                            <label class="col-form-label" for="ant_sindromes">Síndromes</label>
                                            <input type="text" class="form-control" name="ant_sindromes" id="ant_sindromes" required>
                                        </div>
                                    </div><!-- Fin fila 8 -->
                                    <div class="titulos">
                                        <label>VIDA LABORAL</label>
                                    </div>
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_profesion">
                                            <label for="profesion">Profesión</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="profesion" required><br>
                                        </div>
                                        
                                        <div class="form-group ancho" id="input_grado_resp_profesion">
                                            <label for="grado_resp_profesion">Grado de Responsabilidad</label>
                                            &nbsp;
                                            <input type="number" min="1" max="10" class="form-control" name="grado_resp_profesion" id="grado_resp_profesion" required><br>
                                        </div>

                                        <div class="form-group ancho" id="input_grado_stress_profesion">
                                            <label for="grado_stress_profesion">Grado de Estrés</label>
                                            &nbsp;
                                            <input type="number" min="1" max="10" class="form-control" name="grado_stress_profesion" id="grado_stress_profesion" required><br>
                                        </div>
                                    </div> <!--Fin fila 9-->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-submit-2" value='<?php echo($_SESSION["id_especialista"])?>'>Guardar</button>
                                        <input type="hidden" id="opcion-form2" value="registro_historial_clinico">
                                    </div>
                                </form>
                            </div><!-- fin HISTORIAL CLINICO -->

 <!-- =============================== CIRUGIAS  ===========================================  -->

                            <div id="apartado-cirugias">
                                <h3>Cirugías&nbsp;·&nbsp;<span style="color: #6d6d6d; font-size: 15px;">ID de FISIO/ADMIN: <?php echo($_SESSION["id_especialista"])?></span></h3><hr>
                                <!--  TABLA cirugias  -->
                                <form id="form-3" class="margen-form">
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho" id="input_nombre_cirugia">
                                            <label for="nombre_cirugia">Nombre</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="nombre_cirugia" name="nombre_cirugia"><br>
                                        </div>
                                        <div class="form-group ancho" id="input_fecha">
                                            <label for="fecha">Fecha</label>
                                            &nbsp;
                                            <input type="date" class="form-control" name="fecha" id="fecha"><br>
                                        </div>
                                    </div><!-- Fin fila 1 -->
                                    <div class="form-row justify-content-center espaciado-otro">
                                        <div class="form-group col-sm-12 mt-2" id="input_comentarios">
                                            <label class="col-form-label" for="comentarios">Comentarios</label>
                                            <input type="text" class="form-control" name="comentarios" id="comentarios">
                                        </div>
                                    </div><!-- Fin fila 2 -->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-anadir-1" value='<?php echo($_SESSION["id_especialista"])?>'>Añadir cirugía</button>
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-submit-3" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                        <input type="hidden" id="opcion-form3" value="registro_cirugias">
                                    </div>
                                </form>
                            </div> <!-- fin CIRUGIAS -->

                            <!-- =============================== MEDICAMENTOS ===========================================  -->

                            <div id="apartado-medicamentos">
                                <h3>Medicamentos&nbsp;·&nbsp;<span style="color: #6d6d6d; font-size: 15px;">ID de FISIO/ADMIN: <?php echo($_SESSION["id_especialista"])?></span></h3><hr>
        


                                <form id="form-4" class="margen-form">
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho" id="input_medicamento">
                                            <label for="medicamento">Nombre del medicamento</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="medicamento" name="medicamento"><br>
                                        </div>
                                        <div class="form-group ancho" id="input_patologias">
                                            <label for="patologias">Patología/s (separar por comas en caso de haber más de una)</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="patologias" name="patologias"><br>
                                        </div>
                                    </div><!-- Fin fila 1 -->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-anadir-2" value='<?php echo($_SESSION["id_especialista"])?>'>Añadir medicamento</button>
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-submit-4" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                    </div>
                                </form>
                            </div><!-- fin MEDICAMENTOS -->




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
        <script>
            var id_user =0;
            var id_especialista = "";
            

 //  =============================== MOSTRAR Y ESCONDER FORMULARIOS  =========================================== 

            function mostrarFormulario(boton){
            
                $(document).ready(function(){

                    //Ha registrado al usuario
                    if(id_user!=""){

                        if(boton=='datos-personales'){
                            $("body").overhang({
                                        type: "error",
                                        message: "ERROR, ya has registrado los datos personales del paciente.",
                                        duration: 6,
                                        overlay: true,
                                        closeConfirm: true
                            });
                        }
                        else{
                                 //Escondemos todos los formularios y marcamos en gris los botones
                            $("#apartado-usuario").css("display","none");
                            $("#btn-datos-personales").css("background-color","rgb(109, 109, 109)");
                            $("#apartado-historial").css("display","none");
                            $("#btn-historial-clinico").css("background-color","rgb(109, 109, 109)");
                            $("#apartado-cirugias").css("display","none");
                            $("#btn-cirugias").css("background-color","rgb(109, 109, 109)");
                            $("#apartado-medicamentos").css("display","none");
                            $("#btn-medicamentos").css("background-color","rgb(109, 109, 109)");

                            //mostramos el formulario clicado
                            switch(boton){
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
                                            break;
                                            case 'habitos':
                                            break;
                                            case 'historial-trat-linf':
                                            break;
                                            case 'valoracion-linfedema':
                                            break;
                                            case 'medicion':
                                            break;
                            }
                        }
                       
                    }
                    //No ha registrado al usuario
                    else{
                        //mensaje popup de error
                        $("body").overhang({
                                        type: "error",
                                        message: "ERROR, para rellenar más formularios debes registrar los datos personales del paciente primero.",
                                        duration: 6,
                                        overlay: true,
                                        closeConfirm: true
                        });
                    }
                });
            }


            $(document).ready(function(){

                //  =============================== VALIDACIÓN CAMPOS Y RECOGIDA DE DATOS  =========================================== 

                //Según lo que seleccione en el origen del linfedema (primario) le mostramos un select diferente en secundario
                //Eso, una vez seleccione la primera opción
                
                $("#tipo_congenito").change(function(){
                    
                    var tipo_congenito = this.value; //valor option del select
                    
                    if(tipo_congenito=="Secundario"){
                        
                        $("#subtipo_congenito").html("");

                        var $cancer = $("<optgroup label='Cáncer'>");
                        $('#subtipo_congenito').append($cancer);

                        $cancer.append($('<option>', { 
                                //value:"bla",
                                text :  "Mama"
                        }));
                        $cancer.append($('<option>', { 
                                text :  "Ginecológico"
                        }));

                        $cancer.append($('<option>', { 
                                text :  "Próstata"
                        }));

                        $cancer.append($('<option>', { 
                                text :  "Cara"
                        }));

                        $cancer.append($('<option>', {
                                text :  "Linfoma"
                        }));

                        $cancer.append($('<option>', {
                                text :  "Otro"
                        }));

                        var $accidente = $("<optgroup label='Accidente'>");
                        $('#subtipo_congenito').append($accidente);

                        $accidente.append($('<option>', {
                                text :  "Accidente"
                        }));

                    }
                    else{//Secundario
                        $("#subtipo_congenito").html("");

                        $('#subtipo_congenito').append($('<option>', { 
                                text :  "Precoz"
                        }));

                        $('#subtipo_congenito').append($('<option>', { 
                                text :  "Tardío"
                        }));
                       
                    }
                });


                $("#subtipo_congenito").change(function(){
                    var subtipo_congenito = this.value; //valor option del select
                    if(subtipo_congenito=="Otro" || subtipo_congenito=="Accidente"){
                        $('#subtipo_congenito_otro').prop('disabled', false);
                    }
                    else{
                         $('#subtipo_congenito_otro').prop('disabled', true);
                    }
                });

                $("#motivo_secundario").change(function(){
                    var motivo_secundario = this.value; //valor option del select
                    if(motivo_secundario=="Otro"){
                        $('#motivo_secundario_otro').prop('disabled', false);
                    }
                    else{
                         $('#motivo_secundario_otro').prop('disabled', true);
                    }
                });

    //  =============================== AJAX DE LOS FORMULARIOS =========================================== 
                
                //  =============================== USUARIO ===========================================  

                $("#form-1").submit(function(event){
                        event.preventDefault();
                
                        
                        var datos_correctos = true;

                        var nombre =$('#nombre').val();
                        var apellido1=$('#apellido1').val();
                        var apellido2=$('#apellido2').val();
                        var correo =$('#correo').val();
                        var pass =$('#pass').val();
                        var pass2=$('#pass2').val();
                        id_especialista=$('#btn-submit-1').val(); 
                        var opcion= $("#opcion-form").val();

                        datos_correctos = validarDatosPersonales(nombre,apellido1,apellido2,correo,pass,pass2);

                        if(datos_correctos){
                            $.ajax({
                            type:'POST',
                            url: 'control/vista.php',
                            data: {nombre: nombre, apellido1: apellido1, apellido2: apellido2, correo: correo,id_especialista: id_especialista, pass: pass, pass2: pass2, opcion: opcion}
                            })
                            .done(function( msg ) {
                                id_user=msg;
                                console.log(msg);                             	
                                console.log("ajax done"); 

                                //Pasamos al siguiente formulario (HISTORIAL CLÍNICO)
                                $("#apartado-historial").css("display","block");
                                $("#apartado-usuario").css("display","none");
                                $("#btn-datos-personales").css("background-color","rgb(109, 109, 109)");
                                $("#btn-historial-clinico").css("background-color","#7037f4");
                            })
                            .fail(function( jqXHR, textStatus, errorThrown ) {
                                if ( console && console.log ) {
                                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                    console.log("ajax fail");
                                }
                            });
                        }
                       
                });

                //  =============================== HISTORIAL CLÍNICO  ===========================================  

                $("#form-2").submit(function(event){    

                    var doc_identificacion=$('#doc_identificacion').val();
                    var nacionalidad = $('#nacionalidad').val();
                    var raza = $('#raza').val();
                    var fecha_nacimiento = $('#fecha_nacimiento').val();
                    var sexo = $('#sexo').val();
                    var altura = $('#altura').val(); 
                    var peso = $('#peso').val();
                    var tipo_congenito = $('#tipo_congenito').val();
                    var subtipo_congenito = $('#subtipo_congenito').val();
                    if(subtipo_congenito=="Otro" || subtipo_congenito=="Accidente"){
                        subtipo_congenito= $('#subtipo_congenito_otro').val();
                    }
                    var fecha_debut = $('#fecha_debut').val();
                    var familiar_linfedema = $('#familiar_linfedema').val();
                    console.log(id_user);
                    console.log(familiar_linfedema);
                    var motivo_secundario = $('#motivo_secundario').val();
                    if(motivo_secundario=="Otro"){
                        motivo_secundario=$('#motivo_secundario_otro').val();
                    }
                    var ant_vasculares = 'N';
                    var ant_infeccion_venosa = 'N';
                    var ant_sobrepeso = 'N';
                    var ant_lipedema = 'N';
                    var ant_permeabilidad_cap = 'N';
                    var ant_ansiedad = 'N';
                    var ant_diabetes = 'N';
                    var ant_triquiasis = 'N';
                    var ant_sindromes = $('#ant_sindromes').val();
                    if($('#ant_vasculares').prop('checked')){
                        ant_vasculares = 'S';
                    }
                    if($('#ant_infeccion_venosa').prop('checked')){
                        ant_infeccion_venosa='S';
                    }
                    if($('#ant_sobrepeso').prop('checked')){
                            ant_sobrepeso='S';
                    }
                    if($('#ant_lipedema').prop('checked')){
                            ant_lipedema='S';
                    }
                    if($('#ant_permeabilidad_cap').prop('checked')){
                            ant_permeabilidad_cap='S';
                    }
                    if($('#ant_ansiedad').prop('checked')){
                            ant_ansiedad='S';
                    }
                    if($('#ant_diabetes').prop('checked')){
                            ant_diabetes='S';
                    }
                    if($('#ant_triquiasis').prop('checked')){
                            ant_triquiasis='S';
                    }
                    // if($('#ant_sindromes').prop('checked')){
                    //         ant_sindromes='S';
                    // }
                    var profesion = $('#profesion').val();
                    var grado_resp_profesion = $('#grado_resp_profesion').val();
                    var grado_stress_profesion = $('#grado_stress_profesion').val();
                    var opcion= $("#opcion-form2").val();


                    event.preventDefault();

                    $.ajax({
                        method: "POST",
                        url: 'control/vista.php',
                        data: {id_user: id_user, doc_identificacion: doc_identificacion, opcion: opcion,
                            nacionalidad: nacionalidad, raza: raza, fecha_nacimiento: fecha_nacimiento, 
                            sexo: sexo, altura: altura, peso: peso, tipo_congenito: tipo_congenito, subtipo_congenito: subtipo_congenito, 
                            fecha_debut: fecha_debut, familiar_linfedema: familiar_linfedema, motivo_secundario: motivo_secundario, ant_vasculares: ant_vasculares,
                            ant_infeccion_venosa: ant_infeccion_venosa, ant_sobrepeso: ant_sobrepeso, ant_lipedema: ant_lipedema, ant_permeabilidad_cap: ant_permeabilidad_cap, ant_ansiedad: ant_ansiedad,
                            ant_diabetes:ant_diabetes, ant_triquiasis: ant_triquiasis, ant_sindromes: ant_sindromes, profesion: profesion,
                            grado_resp_profesion: grado_resp_profesion, grado_stress_profesion: grado_stress_profesion 
                        },
                        

                    })
                    .done(function( msg ) {                             	
                        console.log("ajax done");
                       
                        
                    })
                    .fail(function( jqXHR, textStatus, errorThrown ) {
                        if ( console && console.log ) {
                            console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                        }
                    });

                });

                //  =============================== CIRUGIAS  ===========================================


                $("#form-3").submit(function(event){
                        event.preventDefault();


                    var nombre_cirugia=$('#nombre_cirugia').val();
                    var fecha = $('#fecha').val();
                    var comentarios = $('#comentarios').val();
                    var opcion= $("#opcion-form3").val();
                
                        $.ajax({
                        type:'POST',
                        url: 'control/vista.php',
                        data: {id_user:id_user, nombre_cirugia:nombre_cirugia, fecha: fecha, comentarios: comentarios, opcion:opcion},
                        })
                        .done(function( msg ) {
                            console.log(msg);                             	
                            console.log("Cirugia registrada"); 

                        })
                        .fail(function( jqXHR, textStatus, errorThrown ) {
                            if ( console && console.log ) {
                                console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                console.log("ajax fail");
                            }
                        });
                    
                });

                //  =============================== MEDICAMENTOS  ===========================================


                $("#form-4").submit(function(event){
                        event.preventDefault();


                    var medicamento=$('#medicamento').val();
                    var patologias = $('#patologias').val();
                    var opcion= $("#opcion-form4").val();

                
                        $.ajax({
                        type:'POST',
                        url: 'control/vista.php',
                        data: {id_user:id_user, medicamento:medicamento, patologias:patologias, opcion:opcion},
                        })
                        .done(function( msg ) {
                            console.log(msg);                             	
                            console.log("Ajax: Medicamento registrado"); 

                        })
                        .fail(function( jqXHR, textStatus, errorThrown ) {
                            if ( console && console.log ) {
                                console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                console.log("ajax fail");
                            }
                        });
                    
                });

                // //  =============================== INFECCIÓN  ===========================================

                // $("#form-5").submit(function(event){
                //         event.preventDefault();


                //     var nombre_infeccion=$('#nombre_infeccion').val();
                //     var fecha = $('#fecha').val();
                //     var descripcion = $('#descripcion').val();
                //     var opcion= $("#opcion-form5").val();

                
                //         $.ajax({
                //         type:'POST',
                //         url: 'control/vista.php',
                //         data: {id_user:id_user, nombre_infeccion: nombre_infeccion, fecha:fecha, descripcion:descripcion, opcion:opcion},
                //         })
                //         .done(function( msg ) {
                //             console.log(msg);                             	
                //             console.log("Ajax: Infección registrada"); 

                //         })
                //         .fail(function( jqXHR, textStatus, errorThrown ) {
                //             if ( console && console.log ) {
                //                 console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                //                 console.log("ajax fail");
                //             }
                //         });
                    
                // });

                // //  =============================== HÁBITOS  ===========================================


                // $("#form-6").submit(function(event){
                //         event.preventDefault();


                //     var fumador=$('#fumador').val();
                //     var cig_dia = $('#cig_dia').val();
                //     var cig_mes = $('#cig_mes').val();
                //     var cig_anyo = $('#cig_anyo').val();
                //     var fumador_social = $('#fumador_social').val();
                //     var freq_alcohol = $('#freq_alcohol').val();
                //     var tipo_alcohol = $('#cig_anyo').val();
                //     var freq_deporte = $('#cig_anyo').val();
                //     var tipo_deporte = $('#tipo_deporte').val();
                //     var t_sesion = $('#t_sesion').val();
                //     var alimentacion = $('#alimentacion').val();
                //     var suenyo_reparador = $('#suenyo_reparador').val();
                //     var h_suenyo = $('#h_suenyo').val();
                //     var astenico = $('#astenico').val();
                //     var erg_sentado = $('#erg_sentado').val();
                //     var erg_bidepes_pasiva = $('#erg_bidepes_pasiva').val();
                //     var erg_bidepes_activa = $('#erg_bidepes_activa').val();
                //     var erg_otro = $('#erg_otro').val();
                //     var opcion= $("#opcion-form6").val();

                
                //         $.ajax({
                //         type:'POST',
                //         url: 'control/vista.php',
                //         data: {id_user:id_user, fumador: fumador, cig_dia: cig_dia, cig_mes: cig_mes, cig_anyo: cig_anyo, 
                //         fumador_social: fumador_social, freq_alcohol: freq_alcohol, tipo_alcohol: tipo_alcohol, freq_deporte: freq_deporte,
                //         tipo_deporte: tipo_deporte, t_sesion: t_sesion, alimentacion: alimentacion, suenyo_reparador: suenyo_reparador,
                //         h_suenyo: h_suenyo, astenico: astenico, erg_sentado: erg_sentado, erg_bipedes_pasiva: erg_bidepes_pasiva, erg_bidepes_activa: erg_bidepes_activa,
                //         erg_otro: erg_otro, opcion: opcion},
                //         })
                //         .done(function( msg ) {
                //             console.log(msg);                             	
                //             console.log("Ajax: Hábitos registrados registrada"); 

                //         })
                //         .fail(function( jqXHR, textStatus, errorThrown ) {
                //             if ( console && console.log ) {
                //                 console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                //                 console.log("ajax fail");
                //             }
                //         });
                    
                // });


                // //  =============================== HISTORIAL TRATAMIETO LINFEDEMA  ===========================================

                // $("#form-7").submit(function(event){
                //         event.preventDefault();


                //     var fecha_ult_tratamiento=$('#fecha_ult_tratamiento').val();
                //     var satisfecho_result = $('#satisfecho_result').val();
                //     var fallo_terapia = $('#fallo_terapia').val();
                //     var tipo_drenaje_linfa = $('#tipo_drenaje_linfa').val();
                //     var vendaje = $('#vendaje').val();
                //     var nota = $('#nota').val();
                //     var contencion_dia = $('#contencion_dia').val();
                //     var contencion_tipo = $('#contencion_tipo').val();
                //     var contencion_sensacion = $('#contencion_sensacion').val();
                //     var contencion_dolor = $('#contencion_dolor').val();
                //     var contencion_escala = $('#contencion_escala').val();
                //     var contencion_pesadez = $('#contencion_pesadez').val();
                //     var opcion= $("#opcion-form7").val();

                
                //         $.ajax({
                //         type:'POST',
                //         url: 'control/vista.php',
                //         data: {id_user:id_user, fecha_ult_tratamiento: fecha_ult_tratamiento,satisfecho_result: satisfecho_result, fallo_terapia:fallo_terapia, tipo_drenaje_linfa:tipo_drenaje_linfa,
                //         vendaje:vendaje, nota: nota, contencion_dia: contencion_dia, contencion_tipo: contencion_tipo, contencion_sensacion: contencion_sensacion, contencion_dolor: contencion_dolor,
                //         contencion_escala: contencion_escala, contencion_pesadez: contencion_pesadez, opcion: opcion},
                //         })
                //         .done(function( msg ) {
                //             console.log(msg);                             	
                //             console.log("Ajax: Tratamiento linfedema registrado"); 

                //         })
                //         .fail(function( jqXHR, textStatus, errorThrown ) {
                //             if ( console && console.log ) {
                //                 console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                //                 console.log("ajax fail");
                //             }
                //         });
                    
                // });


                // //  =============================== VALORACIÓN LINFEDEMA  ===========================================

                // $("#form-8").submit(function(event){
                //         event.preventDefault();


                //     var fecha_val_linfedema=$('#fecha_val_linfedema').val();
                //     var localizacion = $('#localizacion').val();
                //     var consistencia_edema = $('#consistencia_edema').val();
                //     var color = $('#color').val();
                //     var valoracion_piel = $('#valoracion_piel').val();
                //     var stemmer = $('#stemmer').val();
                //     var fovea = $('#fovea').val();
                //     var pesadez = $('#pesadez').val();
                //     var rubor = $('#rubor').val();
                //     var foto_pierna_ant_d = $('#foto_pierna_ant_d').val();
                //     var foto_pierna_post_d = $('#foto_pierna_post_d').val();
                //     var foto_pierna_lat_d1 = $('#foto_pierna_lat_d1').val();
                //     var foto_pierna_lat_d2 = $('#foto_pierna_lat_d2').val();
                //     var foto_pierna_ant_i = $('#foto_pierna_ant_i').val();
                //     var foto_pierna_post_i = $('#foto_pierna_post_i').val();
                //     var foto_pierna_lat_i1 = $('#foto_pierna_lat_i1').val();
                //     var foto_pierna_lat_i2 = $('#foto_pierna_lat_i2').val();
                //     var foto_brazo_cruz_d = $('#foto_brazo_cruz_d').val();
                //     var foto_brazo_frontal_d = $('#foto_brazo_frontal_d').val();
                //     var foto_brazo_cruz_i = $('#foto_brazo_cruz_i').val();
                //     var foto_brazo_frontal_i = $('#foto_brazo_frontal_i').val();
                //     var opcion= $("#opcion-form8").val();

                
                //         $.ajax({
                //         type:'POST',
                //         url: 'control/vista.php',
                //         data: {id_user:id_user, fecha_val_linfedema: fecha_val_linfedema,localizacion:localizacion,consistencia_edema:consistencia_edema,color:color,
                //         valoracion_piel:valoracion_piel,stemmer:stemmer,fovea:fovea,pesadez:pesadez,rubor: rubor, foto_pierna_ant_d: foto_pierna_ant_d,foto_pierna_post_d: foto_pierna_post_d,
                //         foto_pierna_lat_d1: foto_pierna_lat_d1, foto_pierna_lat_d2: foto_pierna_lat_d2, foto_pierna_ant_i: foto_pierna_ant_i, foto_pierna_post_i: foto_pierna_post_i,
                //         foto_pierna_lat_i1: foto_pierna_lat_i1, foto_pierna_lat_i2:foto_pierna_lat_i2, foto_brazo_cruz_d: foto_brazo_cruz_d, foto_brazo_frontal_d:foto_brazo_frontal_d,
                //         foto_brazo_cruz_i: foto_brazo_cruz_i,  foto_brazo_frontal_i:foto_brazo_frontal_i, opcion: opcion},
                //         })
                //         .done(function( msg ) {
                //             console.log(msg);                             	
                //             console.log("Ajax: Valoración linfedema registrado"); 

                //         })
                //         .fail(function( jqXHR, textStatus, errorThrown ) {
                //             if ( console && console.log ) {
                //                 console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                //                 console.log("ajax fail");
                //             }
                //         });
                    
                // });

                // //  =============================== MEDICIONES  ===========================================

                // $("#form-9").submit(function(event){
                //         event.preventDefault();


                //     var fecha_val_mediciones=$('#fecha_val_mediciones').val();
                //     var extremidad = $('#extremidad').val();
                //     var lado = $('#lado').val();
                //     var p1 = $('#p1').val();
                //     var p2 = $('#p2').val();
                //     var p3 = $('#p3').val();
                //     var p4 = $('#p4').val();
                //     var p5 = $('#p5').val();
                //     var p6 = $('#p6').val();
                //     var opcion= $("#opcion-form8").val();

                
                //         $.ajax({
                //         type:'POST',
                //         url: 'control/vista.php',
                //         data: {id_user:id_user, fecha_val_mediciones:fecha_val_mediciones, extremidad:extremidad, lado:lado, p1:p1, p2:p2, p3:p3, p4:p4, p5:p5, p6:p6 opcion: opcion},
                //         })
                //         .done(function( msg ) {
                //             console.log(msg);                             	
                //             console.log("Ajax: Mediciones registradas"); 

                //         })
                //         .fail(function( jqXHR, textStatus, errorThrown ) {
                //             if ( console && console.log ) {
                //                 console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                //                 console.log("ajax fail");
                //             }
                //         });
                    
                // });








                //  =============================== ////////////////// ===========================================

                function validarDatosPersonales(nombre,apellido1,apellido2,correo,pass,pass2){
                    var datos_correctos = true;
                    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

                    //Validar CORREO
                    if(!pattern.test(correo)){
                        $("body").overhang({
                            type: "error",
                            message: "ERROR. El formato de correo no es correcto, introduce una extensión como '.com', por ejemplo.",
                            duration: 3,
                            overlay: true,
                            closeConfirm: true
                        });
                        datos_correctos = false;
                    }
                    //validar contraseñas (deben ser idénticas)
                    if(pass!=pass2){
                        $("body").overhang({
                            type: "error",
                            message: "ERROR. Las contraseñas deben ser idénticas",
                            duration: 3,
                            overlay: true,
                            closeConfirm: true
                        });
                        datos_correctos = false;
                    }
                    

                    return datos_correctos;
                }





            });//document ready
        </script>

    </body>
</html>
