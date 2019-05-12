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
                                            <input type="number" class="form-control" name="alcohol" id="alcohol"><br>
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
                                    </div><!-- Fin fila 3 ** -->
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho col-sm-2" id="input_t_sesion">
                                            <label for="t_sesion">Tiempo sesión</label>
                                            &nbsp;
                                            <input type="number" class="form-control" name="t_sesion" id="t_sesion"><br>
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
                                            <input type="number" class="form-control" name="h_suenyo" id="h_suenyo" required><br>
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
                                            <input type="number" class="form-control" name="erg_sentado" id="erg_sentado"><br>
                                        </div>
                                        <div class="form-group ancho col-sm-3" id="input_erg_bidepes_pasiva">
                                            <label for="erg_bidepes_pasiva">Bidepestación Pasiva (%)</label>
                                            &nbsp;
                                            <input type="number" class="form-control" name="erg_bidepes_pasiva" id="erg_bidepes_pasiva"><br>
                                        </div>
                                        <div class="form-group ancho col-sm-3" id="input_erg_bidepes_activa">
                                            <label for="erg_bidepes_activa">Bidepestación Activa (%)</label>
                                            &nbsp;
                                            <input type="number" class="form-control" name="erg_bidepes_activa" id="erg_bidepes_activa"><br>
                                        </div>
                                        <div class="form-group ancho col-sm-2" id="input_erg_otro">
                                            <label for="erg_otro">Otro (%)</label>
                                            &nbsp;
                                            <input type="number" class="form-control" name="erg_otro" id="erg_otro"><br>
                                        </div>
                                    </div><!-- Fin fila 6 -->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="button" id="btn-submit-6" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                        
                                    </div>
                                </form>
                            </div> <!-- fin HÁBITOS -->




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
                //**
                $("#fumador").change(function(){
                    var fumador = this.value; //valor option del select
                    if(fumador=="no"){
                        $('#cigarros').prop('disabled', true);
                        $('#frec_cigarros').prop('disabled', true);
                        $('#fumador_social').prop('disabled', true);
                    }
                    else{
                        $('#cigarros').prop('disabled', false);
                        $('#frec_cigarros').prop('disabled', false);
                        $('#fumador_social').prop('disabled', false);
                    }
                });

                $("#toma_alcohol").change(function(){
                    var toma_alcohol = this.value; //valor option del select
                    if(toma_alcohol=="no"){
                        $('#frec_alcohol').prop('disabled', true);
                        $('#alcohol').prop('disabled', true);
                        $('#tipo_alcohol').prop('disabled', true);
                    }
                    else{
                        $('#frec_alcohol').prop('disabled', false);
                        $('#alcohol').prop('disabled', false);
                        $('#tipo_alcohol').prop('disabled', false);
                    }
                });

                $("#hace_deporte").change(function(){
                    var hace_deporte = this.value; //valor option del select
                    if(hace_deporte=="no"){
                        $('#frec_deporte').prop('disabled', true);
                        $('#tipo_deporte').prop('disabled', true);
                        $('#t_sesion').prop('disabled', true);
                        $('#t_sesion_medidas').prop('disabled', true);
                    }
                    else{
                        $('#frec_deporte').prop('disabled', false);
                        $('#tipo_deporte').prop('disabled', false);
                        $('#t_sesion').prop('disabled', false);
                        $('#t_sesion_medidas').prop('disabled', false);
                    }
                });
                $("#alimentacion").change(function(){
                    var alimentacion = this.value; //valor option del select
                    if(alimentacion=="otro"){
                        $('#alimentacion_otro').prop('disabled', false);
                      
                    }
                    else{
                        $('#alimentacion_otro').prop('disabled', true);
                    }
                });

    //  =============================== AJAX DE LOS FORMULARIOS =========================================== 
                
                //  =============================== USUARIO ===========================================  

                $("#form-1").submit(function(event){
                        event.preventDefault();
                
                        
                        var datos_correctos = true;
                        var datos_correctos_queries = true;


                        var nombre =$('#nombre').val();
                        var apellido1=$('#apellido1').val();
                        var apellido2=$('#apellido2').val();
                        var correo =$('#correo').val();
                        var pass =$('#pass').val();
                        var pass2=$('#pass2').val();
                        id_especialista=$('#btn-submit-1').val(); 
                        var opcion="registro_paciente";

                        datos_correctos = validarDatosPersonales(nombre,apellido1,apellido2,correo,pass,pass2);

                        if(datos_correctos){
                            $.ajax({
                            type:'POST',
                            url: 'control/vista.php',
                            data: {nombre: nombre, apellido1: apellido1, apellido2: apellido2, correo: correo,id_especialista: id_especialista, pass: pass, pass2: pass2, opcion: opcion}
                            })
                            .done(function( msg ) {
                                console.log(msg);
                                console.log(msg[0]);
                                console.log(msg[1]);
                                var resultado = $.parseJSON(msg);
                                console.log(resultado[0]);
                                console.log(resultado[1]);
                               
                                // console.log(msg);                             	
                                console.log("ajax done"); 
                                if(resultado[1]=="false"){
                                    $.notify("Error en la consulta SQL", "error");
                                    datos_correctos_queries = false;
                                }
                                else if(resultado[1]=="correo"){
                                    $("body").overhang({
                                        type: "error",
                                        message: "ERROR. Este correo ya está en uso",
                                        duration: 3,
                                        overlay: true,
                                        closeConfirm: true
                                    });
                                    datos_correctos_queries = false;
                                }
                                else{
                                    id_user=resultado[0];
                                    $.notify("Datos personales guardados correctamente", "success");
                                }

                                if(datos_correctos_queries){
                                    //Pasamos al siguiente formulario (HISTORIAL CLÍNICO)
                                    $("#apartado-historial").css("display","block");
                                    $("#apartado-usuario").css("display","none");
                                    $("#btn-datos-personales").css("background-color","rgb(109, 109, 109)");
                                    $("#btn-historial-clinico").css("background-color","#7037f4");
                                }
                                
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

                    event.preventDefault();

                    $('#subtipo_congenito_otro').css("border","1px solid #ced4da");
                    $('#motivo_secundario_otro').css("border","1px solid #ced4da");

                    var datos_correctos = true; 

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
                    var motivo_secundario = $('#motivo_secundario').val();
                    
                    if(motivo_secundario=="Otro"){
                        motivo_secundario=$('#motivo_secundario_otro').val();
                    }
                    var ant_vasculares = 'no';
                    var ant_infeccion_venosa = 'no';
                    var ant_sobrepeso = 'no';
                    var ant_lipedema = 'no';
                    var ant_permeabilidad_cap = 'no';
                    var ant_ansiedad = 'no';
                    var ant_diabetes = 'no';
                    var ant_triquiasis = 'no';
                    var ant_sindromes = $('#ant_sindromes').val();
                    if($('#ant_vasculares').prop('checked')){
                        ant_vasculares = 'si';
                    }
                    if($('#ant_infeccion_venosa').prop('checked')){
                        ant_infeccion_venosa='si';
                    }
                    if($('#ant_sobrepeso').prop('checked')){
                            ant_sobrepeso='si';
                    }
                    if($('#ant_lipedema').prop('checked')){
                            ant_lipedema='si';
                    }
                    if($('#ant_permeabilidad_cap').prop('checked')){
                            ant_permeabilidad_cap='si';
                    }
                    if($('#ant_ansiedad').prop('checked')){
                            ant_ansiedad='si';
                    }
                    if($('#ant_diabetes').prop('checked')){
                            ant_diabetes='si';
                    }
                    if($('#ant_triquiasis').prop('checked')){
                            ant_triquiasis='si';
                    }
                    
                    var profesion = $('#profesion').val();
                    var grado_resp_profesion = $('#grado_resp_profesion').val();
                    var grado_stress_profesion = $('#grado_stress_profesion').val();
                    var opcion= "registro_historial_clinico";

                    datos_correctos = validarHistorialClinico(doc_identificacion,nacionalidad,raza,
                                        fecha_nacimiento,sexo,altura, peso, tipo_congenito, subtipo_congenito,fecha_debut,
                                        familiar_linfedema,motivo_secundario,ant_vasculares,ant_infeccion_venosa, 
                                        ant_sobrepeso, ant_lipedema, ant_permeabilidad_cap, ant_ansiedad,ant_diabetes, 
                                        ant_triquiasis, ant_sindromes, profesion,grado_resp_profesion,grado_stress_profesion);
                    
                    if(datos_correctos){
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
                            if(msg=="false"){
                                    $.notify("Error en la consulta SQL", "error");
                                    datos_correctos_queries = false;
                                }
                            else{
                                $.notify("Historial clínico guardado correctamente", "success");
                            }
                            
                        })
                        .fail(function( jqXHR, textStatus, errorThrown ) {
                            if ( console && console.log ) {
                                console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                            }
                        });
                    }
                    

                });




                //  =============================== CIRUGIAS  ===========================================


                $("#form-3").submit(function(event){
                        event.preventDefault();

                        var datos_correctos = true;
                        var datos_correctos_queries = true;

                        var nombre_cirugia=$('#nombre_cirugia').val();
                        var fecha = $('#fecha_cirugia').val();
                        var comentarios = $('#comentarios').val();
                        var opcion= "registro_cirugias";
                    
                        datos_correctos = validarCirugias(nombre_cirugia,fecha,comentarios);

                        if(datos_correctos){

                            $.ajax({
                            type:'POST',
                            url: 'control/vista.php',
                            data: {id_user:id_user, nombre_cirugia:nombre_cirugia, fecha: fecha, comentarios: comentarios, opcion:opcion},
                            })
                            .done(function( msg ) {
                                console.log("ajax done");
                                if(msg=="false"){
                                    $.notify("Error en la consulta SQL", "error");
                                    datos_correctos_queries = false;
                                }
                                else if(msg=="cirugia"){
                                    $("body").overhang({
                                        type: "error",
                                        message: "ERROR. Los datos de esta cirugía ya existen.",
                                        duration: 3,
                                        overlay: true,
                                        closeConfirm: true
                                    });
                                    datos_correctos_queries = false;
                                }
                                else{
                                    $.notify("Cirugías guardadas correctamente.", "success");
                                }
                            })
                            .fail(function( jqXHR, textStatus, errorThrown ) {
                                if ( console && console.log ) {
                                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                    console.log("ajax fail");
                                }
                            });
                        }
                        
                });




                //  =============================== MEDICAMENTOS  ===========================================


                $("#form-4").submit(function(event){
                    
                    event.preventDefault();

                    var datos_correctos = true;
                    var datos_correctos_queries = true;
                    var medicamento=$('#medicamento').val();
                    var patologias = $('#patologias').val();
                    var opcion= "registro_medicamento";

                    datos_correctos = validarMedicamentos(medicamento,patologias);

                    if(datos_correctos){
                        $.ajax({
                            type:'POST',
                            url: 'control/vista.php',
                            data: {id_user:id_user, medicamento:medicamento, patologias:patologias, opcion:opcion},
                            })
                            .done(function( msg ) {                           	
                                console.log("Ajax done"); 
                                if(msg=="false"){
                                    $.notify("Error en la consulta SQL", "error");
                                    datos_correctos_queries = false;
                                }
                                else if(msg=="medicamento"){
                                    $("body").overhang({
                                        type: "error",
                                        message: "ERROR. Los datos del medicamento ya existen.",
                                        duration: 3,
                                        overlay: true,
                                        closeConfirm: true
                                    });
                                    datos_correctos_queries = false;
                                }
                                else{
                                    $.notify("Medicamentos guardados correctamente.", "success");
                                }

                            })
                            .fail(function( jqXHR, textStatus, errorThrown ) {
                                if ( console && console.log ) {
                                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                                    console.log("ajax fail");
                                }
                        });
                    }
                    
                    
                });




                //  =============================== INFECCIÓN  ===========================================

                $("#form-5").submit(function(event){
                        event.preventDefault();


                    var tipo_inf=$('#tipo_inf').val();
                    var medicamentos_inf = $('#medicamentos_inf').val(); 
                    var fecha_inf = $('#fecha_inf').val();
                    var opcion= "registro_infeccion";

                    console.log(tipo_inf);
                    console.log(medicamentos_inf);
                    console.log(fecha_inf);
                    console.log(opcion);
                
                        // $.ajax({
                        // type:'POST',
                        // url: 'control/vista.php',
                        // data: {id_user:id_user, tipo_inf:tipo_inf, medicamentos_inf:medicamentos_inf, fecha_inf:fecha_inf, opcion:opcion},
                        // })
                        // .done(function( msg ) {
                        //     console.log(msg);                             	
                        //     console.log("Ajax: Infección registrada"); 

                        // })
                        // .fail(function( jqXHR, textStatus, errorThrown ) {
                        //     if ( console && console.log ) {
                        //         console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                        //         console.log("ajax fail");
                        //     }
                        // });
                    
                });




                //  =============================== HÁBITOS  ===========================================**


                $("#form-6").submit(function(event){
                    
                    event.preventDefault();

                // HE CAMBIADO "freq" por frec!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                    var fumador=$('#fumador').val();
                    var cig_dia = $('#cig_dia').val();
                    var cig_mes = $('#cig_mes').val();
                    var cig_anyo = $('#cig_anyo').val();
                    var fumador_social = $('#fumador_social').val();
                    var frec_alcohol = $('#frec_alcohol').val();
                    var tipo_alcohol = $('#cig_anyo').val();
                    var frec_deporte = $('#cig_anyo').val();
                    var tipo_deporte = $('#tipo_deporte').val();
                    var t_sesion = $('#t_sesion').val();
                    var alimentacion = $('#alimentacion').val();
                    var suenyo_reparador = $('#suenyo_reparador').val();
                    var h_suenyo = $('#h_suenyo').val();
                    var astenico = $('#astenico').val();
                    var erg_sentado = $('#erg_sentado').val();
                    var erg_bidepes_pasiva = $('#erg_bidepes_pasiva').val();
                    var erg_bidepes_activa = $('#erg_bidepes_activa').val();
                    var erg_otro = $('#erg_otro').val();
                    var opcion= $("#opcion-form6").val();

                
                    // $.ajax({
                    // type:'POST',
                    // url: 'control/vista.php',
                    // data: {id_user:id_user, fumador: fumador, cig_dia: cig_dia, cig_mes: cig_mes, cig_anyo: cig_anyo, 
                    // fumador_social: fumador_social, frec_alcohol: frec_alcohol, tipo_alcohol: tipo_alcohol, frec_deporte: frec_deporte,
                    // tipo_deporte: tipo_deporte, t_sesion: t_sesion, alimentacion: alimentacion, suenyo_reparador: suenyo_reparador,
                    // h_suenyo: h_suenyo, astenico: astenico, erg_sentado: erg_sentado, erg_bipedes_pasiva: erg_bidepes_pasiva, erg_bidepes_activa: erg_bidepes_activa,
                    // erg_otro: erg_otro, opcion: opcion},
                    // })
                    // .done(function( msg ) {
                    //     console.log(msg);                             	
                    //     console.log("Ajax: Hábitos registrados registrada"); 

                    // })
                    // .fail(function( jqXHR, textStatus, errorThrown ) {
                    //     if ( console && console.log ) {
                    //         console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    //         console.log("ajax fail");
                    //     }
                    // });
                    
                });




                //  =============================== HISTORIAL TRATAMIENTO LINFEDEMA  =========================================== 

                $("#form-7").submit(function(event){
                        event.preventDefault();


                    var fecha_ult_tratamiento=$('#fecha_ult_tratamiento').val();
                    var satisfecho_result = $('#satisfecho_result').val();
                    var fallo_terapia = $('#fallo_terapia').val();
                    var tipo_drenaje_linfa = $('#tipo_drenaje_linfa').val();
                    var vendaje = $('#vendaje').val();
                    var nota = $('#nota').val();
                    var contencion_dia = $('#contencion_dia').val();
                    var contencion_tipo = $('#contencion_tipo').val();
                    var contencion_sensacion = $('#contencion_sensacion').val();
                    var contencion_dolor = $('#contencion_dolor').val();
                    var contencion_escala = $('#contencion_escala').val();
                    var contencion_pesadez = $('#contencion_pesadez').val();
                    var opcion= $("#opcion-form7").val();

                
                        // $.ajax({
                        // type:'POST',
                        // url: 'control/vista.php',
                        // data: {id_user:id_user, fecha_ult_tratamiento: fecha_ult_tratamiento,satisfecho_result: satisfecho_result, fallo_terapia:fallo_terapia, tipo_drenaje_linfa:tipo_drenaje_linfa,
                        // vendaje:vendaje, nota: nota, contencion_dia: contencion_dia, contencion_tipo: contencion_tipo, contencion_sensacion: contencion_sensacion, contencion_dolor: contencion_dolor,
                        // contencion_escala: contencion_escala, contencion_pesadez: contencion_pesadez, opcion: opcion},
                        // })
                        // .done(function( msg ) {
                        //     console.log(msg);                             	
                        //     console.log("Ajax: Tratamiento linfedema registrado"); 

                        // })
                        // .fail(function( jqXHR, textStatus, errorThrown ) {
                        //     if ( console && console.log ) {
                        //         console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                        //         console.log("ajax fail");
                        //     }
                        // });
                    
                });




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



                //  =============================== MEDICIONES  ===========================================

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
                    var mensaje_error="";
                    
                  
                    if(isEmptyOrSpaces(pass) || isEmptyOrSpaces(pass2)){
                        mensaje_error="ERROR. Las contraseñas no pueden estar vacías.";
                        datos_correctos = false;
                    }
                    //validar contraseñas (deben ser idénticas)
                    if(pass!=pass2){
                        mensaje_error="ERROR. Las contraseñas deben ser idénticas";
                        datos_correctos = false;
                    } 
                    //Validar CORREO
                    if(!pattern.test(correo)){
                        mensaje_error="ERROR. El formato de correo no es correcto, introduce una extensión como '.com', por ejemplo.";
                        datos_correctos = false;
                    } 
                    if(isEmptyOrSpaces(apellido1) || isEmptyOrSpaces(apellido2)){
                        mensaje_error="ERROR. Los apellidos no pueden estar vacíos.";
                        datos_correctos = false;
                    } 
                    if(isEmptyOrSpaces(nombre)){
                        mensaje_error="ERROR. El nombre no puede estar vacío.";
                        datos_correctos = false;
                    }
                    if(!datos_correctos){
                        $("body").overhang({
                            type: "error",
                            message: mensaje_error,
                            duration: 3,
                            overlay: true,
                            closeConfirm: true
                        });
                    }
                    

                    return datos_correctos;
                }
                function isEmptyOrSpaces(str){
                    return str === null || str.match(/^ *$/) !== null;
                }
                function validarHistorialClinico(doc_identificacion,nacionalidad,raza,
                        fecha_nacimiento,sexo,altura, peso, tipo_congenito, subtipo_congenito,fecha_debut,
                        familiar_linfedema,motivo_secundario,ant_vasculares,ant_infeccion_venosa, 
                        ant_sobrepeso, ant_lipedema, ant_permeabilidad_cap, ant_ansiedad,ant_diabetes, 
                        ant_triquiasis, ant_sindromes, profesion,grado_resp_profesion,grado_stress_profesion){
                    
                    var mensaje_error = "";
                    var datos_correctos = true;
                    if($('#subtipo_congenito').val()=="Otro" || $('#subtipo_congenito').val()=="Accidente"){
                        if(subtipo_congenito==undefined || subtipo_congenito=="" || isEmptyOrSpaces(subtipo_congenito)){
                            
                            mensaje_error="ERROR. Al seleccionar Otro/Accidente en 'subtipo' debes especificarlo en el campo siguiente";
                            $('#subtipo_congenito_otro').css("border","2px solid #dc3545");
                            datos_correctos = false;
                        }
                    }
                    if($('#motivo_secundario').val()=="Otro"){
                        if(motivo_secundario==undefined || motivo_secundario=="" || isEmptyOrSpaces(motivo_secundario)){
                            
                            mensaje_error="ERROR. Al seleccionar Otro en 'motivo secundario' especificarlo en el campo siguiente";
                            $('#motivo_secundario_otro').css("border","2px solid #dc3545");
                            datos_correctos = false;
                        }
                    }
                    if(!isNaN(doc_identificacion)){//es solo numeros
                        
                        mensaje_error= "ERROR. El documento de identificación debe contener letras y números.";
                        datos_correctos = false;
                    }
                    if(isEmptyOrSpaces(doc_identificacion)){
                        mensaje_error="ERROR. El doc. de identificación no puede estar vacío.";
                        datos_correctos = false;
                        
                    }
                    if(isEmptyOrSpaces(nacionalidad)){
                        mensaje_error="ERROR. La nacionalidad no puede estar vacía.";
                        datos_correctos = false;
                        
                    }
                    if(isEmptyOrSpaces(raza)){
                        mensaje_error="ERROR. La raza no puede estar vacía.";
                        datos_correctos = false;
                        
                    }
                    if(isEmptyOrSpaces(fecha_nacimiento) || fecha_nacimiento==undefined){
                        mensaje_error="ERROR. No has seleccionado la fecha de nacimiento.";
                        datos_correctos = false;
                        
                    }
                    if(isEmptyOrSpaces(ant_sindromes)){
                        mensaje_error="ERROR. No has rellenado el campo de síndromes.";
                        datos_correctos = false;
                        
                    }
                    if(isEmptyOrSpaces(profesion)){
                        mensaje_error="ERROR. No has rellenado el campo de profesión.";
                        datos_correctos = false;
                        
                    }

                    if(!datos_correctos){
                        $("body").overhang({
                                type: "error",
                                message: mensaje_error,
                                duration: 3,
                                overlay: true,
                                closeConfirm: true
                            });
                    }
                    return datos_correctos;

                }

                function validarCirugias(nombre_cirugia,fecha,comentarios){
                    var mensaje_error = "";
                    var datos_correctos = true;
                    if(isEmptyOrSpaces(nombre_cirugia)){
                        mensaje_error="ERROR. El nombre de cirugía no puede estar vacío.";
                    }
                    if(!datos_correctos){
                        $("body").overhang({
                                type: "error",
                                message: mensaje_error,
                                duration: 3,
                                overlay: true,
                                closeConfirm: true
                            });
                    }
                    return datos_correctos;

                }

                function validarMedicamentos(medicamento,patologias){
                    
                    var mensaje_error = "";
                    var datos_correctos = true;
                    
                    if(isEmptyOrSpaces(medicamento)){
                        mensaje_error="ERROR. El nombre del medicamento no puede estar vacío.";
                        datos_correctos = false;
                    }
                    if(isEmptyOrSpaces(patologias)){
                        mensaje_error="ERROR. El campo de patologías no puede estar vacío.";
                        datos_correctos = false;
                    }

                    if(!datos_correctos){
                            $("body").overhang({
                                    type: "error",
                                    message: mensaje_error,
                                    duration: 3,
                                    overlay: true,
                                    closeConfirm: true
                                });
                        }
                    return datos_correctos;

                }

                // function validarInfecciones{
                //      var mensaje_error = "";
                    // var datos_correctos = true;
                    //  if(!datos_correctos){
                    //     $("body").overhang({
                    //             type: "error",
                    //             message: mensaje_error,
                    //             duration: 3,
                    //             overlay: true,
                    //             closeConfirm: true
                    //         });
                    // }
                    // return datos_correctos;
                // }

                // function validarHabitos{
                //      var mensaje_error = "";
                    // var datos_correctos = true;
                    //  if(!datos_correctos){
                    //     $("body").overhang({
                    //             type: "error",
                    //             message: mensaje_error,
                    //             duration: 3,
                    //             overlay: true,
                    //             closeConfirm: true
                    //         });
                    // }
                    // return datos_correctos;
                // }

                // function validarHistorialLinfedema{
                //      var mensaje_error = "";
                    // var datos_correctos = true;
                    //  if(!datos_correctos){
                    //     $("body").overhang({
                    //             type: "error",
                    //             message: mensaje_error,
                    //             duration: 3,
                    //             overlay: true,
                    //             closeConfirm: true
                    //         });
                    // }
                    // return datos_correctos;
                // }

                // function validarLinfedema{
                //      var mensaje_error = "";
                    // var datos_correctos = true;
                    //  if(!datos_correctos){
                    //     $("body").overhang({
                    //             type: "error",
                    //             message: mensaje_error,
                    //             duration: 3,
                    //             overlay: true,
                    //             closeConfirm: true
                    //         });
                    // }
                    // return datos_correctos;
                // }

                // function validarMediciones{
                //      var mensaje_error = "";
                    // var datos_correctos = true;
                    //  if(!datos_correctos){
                    //     $("body").overhang({
                    //             type: "error",
                    //             message: mensaje_error,
                    //             duration: 3,
                    //             overlay: true,
                    //             closeConfirm: true
                    //         });
                    // }
                    // return datos_correctos;
                // }




            });//document ready
        </script>

    </body>
</html>
