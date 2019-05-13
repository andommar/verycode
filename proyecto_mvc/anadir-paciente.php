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
                                        <a href="pacientes.php">Todos los pacientes</a>
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
                                
                    <!-- =============================== USUARIO | vista, sql y validado ===========================================  -->

                                <form id="form-1" class="margen-form">
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_nombre">
                                            <label for="nombre">Nombre</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="30"><br>
                                        </div>
                                    
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="input_apellido1">
                                            <label for="apellido1">Primer apellido</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="apellido1" required maxlength="50"><br>
                                        </div>
                                        &nbsp;&nbsp;

                                        <div class="form-group ancho" id="input_apellido2">
                                            <label for="apellido2">Segundo apellido</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="apellido1" id="apellido2" required maxlength="50"><br>
                                        </div>
                                    </div>  <!--Fin fila 1-->
                                    &nbsp;&nbsp;
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_correo">
                                            <label for="correo">Correo</label>
                                            &nbsp;
                                            <input type="email" class="form-control" name="correo" id="correo" required maxlength="100"><br>
                                        </div>
                                            
                                        &nbsp;&nbsp;
                                        <div class="form-group ancho" id="input_pass">
                                            <label for="pass">Contraseña</label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass" id="pass" required maxlength="50"><br>
                                        </div>
                                        
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="input_pass2">
                                            <label for="pass2">Confirmar contraseña</label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass2" id="pass2" required maxlength="50"><br>
                                        </div>
                                    </div>  <!--Fin fila 2-->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-submit-1" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                       
                                    </div>
                                </form>
                            </div>
            <!-- =============================== HISTORIAL CLINICO | vista, sql y validado ===========================================  -->

                            <div id="apartado-historial">
                                <h3>Historial clínico</h3><hr>
                                <!--  TABLA historial_clinico -->
                                <form id="form-2" class="margen-form">
                                    <div class="titulos color2">
                                        <label>DATOS PRINCIPALES</label>
                                    </div>
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_doc_identificacion">
                                            <label for="doc_identificacion">Documento de identificación</label>
                                            &nbsp;
                                            <input class="form-control" id="doc_identificacion" required maxlength="30"><br>
                                        </div>
                                        
                                        <div class="form-group ancho" id="input_nacionalidad">
                                            <label for="nacionalidad">Nacionalidad</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" required maxlength="150"><br>
                                        </div>

                                        <div class="form-group ancho" id="input_raza">
                                            <label for="raza">Raza</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="raza" id="raza" required maxlength="150"><br>
                                        </div>
                                    </div> <!--Fin fila 1-->
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_fecha_nacimiento">
                                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                            &nbsp;
                                            <input type="date" min="1919-01-01" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required><br>
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
                                    <div class="titulos color2">
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
                                            <input type="text" class="form-control" name="subtipo_congenito_otro" id="subtipo_congenito_otro" disabled="disabled" maxlength="50">
                                        </div>
                                    </div><!-- Fin fila 4 -->
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_fecha_debut">
                                            <label for="fecha_debut">Fecha de debut</label>
                                            &nbsp;
                                            <input type="date" class="form-control" name="fecha_debut" id="fecha_debut" required><br>
                                        </div>
                                        <div class="form-group ancho" id="select_familiar_linfedema">
                                            <label for="familiar_linfedema">Familiar con linfedema</label>
                                            &nbsp;
                                            <div>
                                                <select id="familiar_linfedema" class="form-control form-control-md">
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
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
                                            <input type="text" class="form-control" name="motivo_secundario_otro" id="motivo_secundario_otro" disabled="disabled" maxlength="50">
                                        </div>
                                    </div><!-- Fin fila 6 -->
                                    <div class="titulos color2">
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
                                            <input type="text" class="form-control" name="ant_sindromes" id="ant_sindromes" required maxlength="150">
                                        </div>
                                    </div><!-- Fin fila 8 -->
                                    <div class="titulos color2">
                                        <label>VIDA LABORAL</label>
                                    </div>
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_profesion">
                                            <label for="profesion">Profesión</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="profesion" required maxlength="50"><br>
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
                                            <input type="text" maxlength="50" class="form-control" id="nombre_cirugia" name="nombre_cirugia" required><br>
                                        </div>
                                        <div class="form-group ancho" id="input_fecha_cirugias">
                                            <label for="fecha">Fecha</label>
                                            &nbsp;
                                            <input type="date" class="form-control" name="fecha" id="fecha_cirugia" required><br>
                                        </div>
                                    </div><!-- Fin fila 1 -->
                                    <div class="form-row justify-content-center espaciado-otro">
                                        <div class="form-group col-sm-12 mt-2" id="input_comentarios">
                                            <label class="col-form-label" for="comentarios">Comentarios</label>
                                            <textarea type="text" rows="3" maxlength="200" class="form-control" name="comentarios" id="comentarios"></textarea>
                                        </div>
                                    </div><!-- Fin fila 2 -->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-anadir-1" value='<?php echo($_SESSION["id_especialista"])?>'>Añadir cirugía</button>
                                        <button class="btn estilo-boton-submit" type="button" id="btn-submit-3" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                        
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
                                            <input type="text" maxlength="50" class="form-control" id="medicamento" name="medicamento" required><br>
                                        </div>
                                        <div class="form-group ancho" id="input_patologias">
                                            <label for="patologias">Patología/s (separar por comas en caso de haber más de una)</label>
                                            &nbsp;
                                            <input type="text" maxlength="50" class="form-control" id="patologias" name="patologias" required><br>
                                        </div>
                                    </div><!-- Fin fila 1 -->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-anadir-2" value='<?php echo($_SESSION["id_especialista"])?>'>Añadir medicamento</button>
                                        <button class="btn estilo-boton-submit" type="button" id="btn-submit-4" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                        
                                    </div>
                                </form>
                            </div><!-- fin MEDICAMENTOS -->

                             <!-- =============================== INFECCIONES ===========================================  -->

                             <div id="apartado-infecciones">
                                <h3>Infecciones&nbsp;·&nbsp;<span style="color: #6d6d6d; font-size: 15px;">ID de FISIO/ADMIN: <?php echo($_SESSION["id_especialista"])?></span></h3><hr>
                                <!--  TABLA infecciones  -->
                                <form id="form-5" class="margen-form">
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho" id="input_tipo_inf">
                                            <label for="tipo_inf">Tipo de infección</label>
                                            &nbsp;
                                            <input type="text" maxlength="50" class="form-control" id="tipo_inf" name="tipo_inf" required><br>
                                        </div>
                                        <div class="form-group ancho" id="input_fecha_inf">
                                            <label for="fecha_inf">Fecha</label>
                                            &nbsp;
                                            <input type="date" class="form-control" name="fecha_inf" id="fecha_inf" required><br>
                                        </div>
                                    </div><!-- Fin fila 1 -->
                                    <div class="form-row justify-content-center espaciado-otro">
                                        <div class="form-group col-sm-12 mt-2" id="input_medicamentos_inf">
                                            <label class="col-form-label" for="medicamentos_inf">Medicamento/s</label>
                                            <textarea type="text" rows="3" maxlength="200" class="form-control" name="medicamentos_inf" id="medicamentos_inf"></textarea>
                                        </div>
                                    </div><!-- Fin fila 2 -->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-anadir-3" value='<?php echo($_SESSION["id_especialista"])?>'>Añadir infección</button>
                                        <button class="btn estilo-boton-submit" type="button" id="btn-submit-5" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                        
                                    </div>
                                </form>
                            </div> <!-- fin INFECCIONES -->

                             <!-- =============================== HÁBITOS ===========================================  -->

                             <div id="apartado-habitos">
                                <h3>Hábitos&nbsp;·&nbsp;<span style="color: #6d6d6d; font-size: 15px;">ID de FISIO/ADMIN: <?php echo($_SESSION["id_especialista"])?></span></h3><hr>
                                <!--  TABLA hábitos  -->
                                <form id="form-6" class="margen-form">
                                    <div class="titulos color6">
                                        <label>FUMADOR</label>
                                    </div>
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho col-sm-2" id="select_fumador">
                                            <label for="fumador">Fumador</label>
                                            &nbsp;
                                            <div>
                                                <select id="fumador" class="form-control form-control-md">
                                                    <option value="si">Sí</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="select_frec_cigarros">
                                            <label for="frec_cigarros">Frecuencia</label>
                                            &nbsp;
                                            <div>
                                                <select id="frec_cigarros" class="form-control form-control-md">
                                                    <option value="dia">Día</option>
                                                    <option value="mes">Mes</option>
                                                    <option value="anyo">Año</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="input_cigarros">
                                            <label for="cigarros">Cantidad</label>
                                            &nbsp;
                                            <input type="number" class="form-control" name="cigarros" id="cigarros"><br>
                                        </div>
                                        
                                        <div class="form-group ancho col-sm-2" id="select_fumador_social">
                                            <label for="fumador_social">Fumador social</label>
                                            &nbsp;
                                            <div>
                                                <select id="fumador_social" class="form-control form-control-md">
                                                    <option value="si">Sí</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- Fin fila 1 -->
                                    <div class="titulos color6">
                                        <label>ALCOHOL</label>
                                    </div>
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho col-sm-2" id="select_toma_alcohol">
                                            <label for="toma_alcohol">Toma alcohol</label>
                                            &nbsp;
                                            <div>
                                                <select id="toma_alcohol" class="form-control form-control-md">
                                                    <option value="si">Sí</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="select_frec_alcohol">
                                            <label for="frec_alcohol">Frecuencia</label>
                                            &nbsp;
                                            <div>
                                                <select id="frec_alcohol" class="form-control form-control-md">
                                                    <option value="frecuentemente">Frecuentemente</option>
                                                    <option value="ocasionalmente">Ocasionalmente</option>
                                                    <option value="socialmente">Socialmente</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="input_alcohol">
                                            <label for="alcohol">Cantidad</label>
                                            &nbsp;
                                            <input type="number" min="1" class="form-control" name="alcohol" id="alcohol"><br>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="input_tipo_alcohol">
                                            <label for="tipo_alcohol">Tipo de alcohol</label>
                                            <input type="text" maxlength="50" class="form-control" name="tipo_alcohol" id="tipo_alcohol"><br>
                                        </div>
                                    </div><!-- Fin fila 2 -->
                                    <div class="titulos color6">
                                        <label>DEPORTE</label>
                                    </div>
                                    <div class="form-row espaciado-empty mb-2">
                                        <div class="form-group ancho col-sm-2" id="select_hace_deporte">
                                            <label for="hace_deporte">Practica deporte</label>
                                            &nbsp;
                                            <div>
                                                <select id="hace_deporte" class="form-control form-control-md">
                                                    <option value="si">Sí</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="select_frec_deporte">
                                            <label for="frec_deporte">Frecuencia</label>
                                            &nbsp;
                                            <div>
                                                <select id="frec_deporte" class="form-control form-control-md">
                                                    <option value="todos">Todos los días</option>
                                                    <option value="5sem">5 a la semana</option>
                                                    <option value="3sem">3 a la semana</option>
                                                    <option value="1sem">1 a la semana</option>
                                                    <option value="15dias">Cada 15 días</option>
                                                    <option value="1mes">1 al mes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="select_tipo_deporte">
                                            <label for="tipo_deporte">Tipo de deporte</label>
                                            &nbsp;
                                            <div>
                                                <select id="tipo_deporte" class="form-control form-control-md">
                                                    <option value="aerobico">Aeróbico</option>
                                                    <option value="anaerobico">Anaeróbico</option>
                                                    <option value="impacto">Impacto</option>
                                                    <option value="alta-intensidad">Alta intensidad</option>
                                                    <option value="aero-anaero">Aeróbico+anaeróbico</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- Fin fila 3 -->
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho col-sm-2" id="input_t_sesion">
                                            <label for="t_sesion">Tiempo sesión</label>
                                            &nbsp;
                                            <input type="number" min="1" class="form-control" name="t_sesion" id="t_sesion"><br>
                                        </div>
                                       
                                        <div class="form-group ancho col-sm-2" id="select_t_sesion_medidas">
                                            <label for="t_sesion_medidas">Medida de tiempo</label>
                                            &nbsp;
                                            <div>
                                                <select id="t_sesion_medidas" class="form-control form-control-md">
                                                    <option value="minutos">Minutos</option>
                                                    <option value="horas">Horas</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- Fin fila 4 -->
                                    <div class="titulos color6">
                                        <label>ALIMENTACIÓN</label>
                                    </div>
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho col-sm-3" id="select_alimentacion">
                                            <label for="alimentacion">Tipo de alimentación</label>
                                            &nbsp;
                                            <div>
                                                <select id="alimentacion" class="form-control form-control-md">
                                                    <option value="equilibrada">Equilibrada</option>
                                                    <option value="hipocalorica">Hipocalórica</option>
                                                    <option value="hipercalorica">Hipercalórica</option>
                                                    <option value="cetogenica">Cetogénica</option>
                                                    <option value="proteica">Proteica</option>
                                                    <option value="vegetariana">Vegetariana</option>
                                                    <option value="vegana">Vegana</option>
                                                    <option value="fast-food">Fast food</option>
                                                    <option value="otro">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho col-sm-5" id="input_alimentacion_otro">
                                            <label for="alimentacion_otro">Si seleccionaste "Otras"</label>
                                            &nbsp;
                                            <input type="text" maxlength="50" class="form-control" name="alimentacion_otro" id="alimentacion_otro" disabled="disabled"><br>
                                        </div>
                                    </div><!-- Fin fila 5 -->
                                    <div class="titulos color6">
                                        <label>DESCANSO</label>
                                    </div>
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho col-sm-2" id="select_suenyo_reparador">
                                            <label for="suenyo_reparador">Sueño reparador</label>
                                            &nbsp;
                                            <div>
                                                <select id="suenyo_reparador" class="form-control form-control-md">
                                                    <option value="si">Sí</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="input_h_suenyo">
                                            <label for="h_suenyo">Horas de sueño</label>
                                            &nbsp;
                                            <input type="number" min="1" max="15" class="form-control" name="h_suenyo" id="h_suenyo" required><br>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="select_astenico">
                                            <label for="astenico">Asténico de día</label>
                                            &nbsp;
                                            <div>
                                                <select id="astenico" class="form-control form-control-md">
                                                    <option value="si">Sí</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- Fin fila 5 -->
                                    <div class="titulos color6">
                                        <label>ERGONOMÍA</label>
                                    </div>
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho col-sm-2" id="input_erg_sentado">
                                            <label for="erg_sentado">Sentado (%)</label>
                                            &nbsp;
                                            <input type="number" min="0" class="form-control" name="erg_sentado" id="erg_sentado"><br>
                                        </div>
                                        <div class="form-group ancho col-sm-3" id="input_erg_bidepes_pasiva">
                                            <label for="erg_bidepes_pasiva">Bidepestación Pasiva (%)</label>
                                            &nbsp;
                                            <input type="number" min="0" class="form-control" name="erg_bidepes_pasiva" id="erg_bidepes_pasiva"><br>
                                        </div>
                                        <div class="form-group ancho col-sm-3" id="input_erg_bidepes_activa">
                                            <label for="erg_bidepes_activa">Bidepestación Activa (%)</label>
                                            &nbsp;
                                            <input type="number" min="0" class="form-control" name="erg_bidepes_activa" id="erg_bidepes_activa"><br>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="input_erg_otro">
                                            <label for="erg_otro">Otro (%)</label>
                                            &nbsp;
                                            <input type="number" min="0" class="form-control" name="erg_otro" id="erg_otro"><br>
                                        </div>
                                    </div><!-- Fin fila 6 -->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-submit-6" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                        
                                    </div>
                                </form>
                            </div> <!-- fin HÁBITOS -->

                        <!-- =============================== HISTORIAL TRATAMIENTO LINFEDEMA  ===========================================  -->

                            <div id="apartado-hist-trat-linf">
                                <h3>Historial de Tratamiento del Linfedema&nbsp;·&nbsp;<span style="color: #6d6d6d; font-size: 15px;">ID de FISIO/ADMIN: <?php echo($_SESSION["id_especialista"])?></span></h3><hr>
                                <!--  TABLA hábitos  -->
                                <form id="form-7" class="margen-form">
                                    <div class="titulos color7">
                                        <label>ÚLTIMO TRATAMIENTO</label>
                                    </div>
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho" id="input_fecha_ult_tratamiento">
                                            <label for="fecha_ult_tratamiento">Fecha</label>
                                            &nbsp;
                                            <input type="date" class="form-control" name="fecha_ult_tratamiento" id="fecha_ult_tratamiento" required><br>
                                        </div>
                                        <div class="form-group ancho col-sm-3" id="select_satisfecho_result">
                                            <label for="satisfecho_result">Satisfecho</label>
                                                &nbsp;
                                            <div>
                                                <select id="satisfecho_result" class="form-control form-control-md">
                                                    <option value="si">Sí</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho col-sm-4" id="select_fallo_terapia">
                                        <label for="fallo_terapia">Fallo de la terapia</label>
                                            &nbsp;
                                            <div>
                                                <select disabled="disabled"  id="fallo_terapia" class="form-control form-control-md">
                                                    <option value="falta-seguimiento">Falta de seguimiento</option>
                                                    <option value="falta-programacion">Falta de programación</option>
                                                    <option value="desidia">desidia</option>
                                                    <option value="desesperacion">Desesperación</option>
                                                    <option value="tediosa">Demasiado tediosa</option>
                                                    <option value="falta-medios">Falta de medio económicos</option>
                                                    <option value="otro">Otros</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- Fin fila 1 -->
                                    <div class="form-row justify-content-center espaciado-otro">
                                        <div class="form-group col-sm-12" id="input_fallo_terapia_otro">
                                            <label class="col-form-label" for="fallo_terapia_otro">Si seleccionaste "Otros" en el campo anterior, especifica tu respuesta</label>
                                            <input type="text" class="form-control" name="fallo_terapia_otro" id="fallo_terapia_otro" disabled="disabled" maxlength="50">
                                        </div>
                                    </div><!-- Fin fila 2 -->
                                    <div class="titulos color7">
                                        <label>TIPO DE TRATAMIENTO</label>
                                    </div>
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho" id="select_tipo_drenaje_linfa">
                                            <label for="tipo_drenaje_linfa">Tipo de drenaje linfático</label>
                                                &nbsp;
                                            <div>
                                                <select id="tipo_drenaje_linfa" class="form-control form-control-md">
                                                    <option value="vodder">Vodder</option>
                                                    <option value="leduc">Leduc</option>
                                                    <option value="godoy">Godoy</option>
                                                    <option value="otro">Otros</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho" id="input_tipo_drenaje_linfa_otro">
                                            <label for="tipo_drenaje_linfa_otro">Si seleccionaste "Otros"</label>
                                            &nbsp;
                                            <input disabled="disabled" type="text" maxlength="50" class="form-control" name="tipo_drenaje_linfa_otro" id="tipo_drenaje_linfa_otro" disabled="disabled"><br>
                                        </div>
                                        <div class="form-group ancho" id="select_vendaje">
                                            <label for="vendaje">Vendaje</label>
                                                &nbsp;
                                            <div>
                                                <select id="vendaje" class="form-control form-control-md">
                                                    <option value="si">Sí</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- Fin fila 3 -->
                                    <div class="form-row justify-content-center espaciado-otro">
                                        <div class="form-group col-sm-12" id="input_nota">
                                            <label class="col-form-label" for="nota">Nota</label>
                                            <textarea type="text" rows="3" maxlength="200" class="form-control" name="nota" id="nota"></textarea>
                                        </div>
                                    </div><!-- Fin fila 4  **-->
                                    <div class="titulos color7">
                                        <label>CONTENCIÓN</label>
                                    </div>
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho" id="select_contencion_dia">
                                            <label for="contencion_dia">Contención de día</label>
                                                &nbsp;
                                            <div>
                                                <select id="contencion_dia" class="form-control form-control-md">
                                                    <option value="si">Sí</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho" id="select_contencion_tipo">
                                            <label for="contencion_tipo">Contención de día</label>
                                                &nbsp;
                                            <div>
                                                <select id="contencion_tipo" class="form-control form-control-md">
                                                    <option value="jobst">Jobst</option>
                                                    <option value="medi">Medi</option>
                                                    <option value="vendas">Vendas</option>
                                                    <option value="otro">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho col-sm-3" id="input_contencion_tipo_otro">
                                            <label for="contencion_tipo_otro">Si seleccionaste "Otro"</label>
                                            &nbsp;
                                            <input disabled="disabled" type="text" maxlength="50" class="form-control" name="contencion_tipo_otro" id="contencion_tipo_otro" disabled="disabled"><br>
                                        </div>
                                    </div><!-- Fin fila 5  **-->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-submit-7" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                        
                                    </div>
                                </form>
                            </div> <!-- fin Hist Trat Linfedema -->




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
        <script type="text/javascript" src="js/anadir-paciente.js"></script>
        

    </body>
</html>
