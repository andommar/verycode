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
                                <h3>Datos personales&nbsp;·&nbsp;<span style="color: #6d6d6d; font-size: 15px;">ID de FISIO/ADMIN: <?php echo($_SESSION["id_especialista"])?></span></h3><hr>
                                <!--  TABLA usuario  -->
                                <form id="form-1" class="margen-form">
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
                                    </div>  <!--Fin fila 1-->
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
                                        
                                        <div class="form-group ancho" id="input_pass2">
                                            <label for="pass2">Confirmar contraseña</label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass2" id="pass2"><br>
                                        </div>
                                    </div>  <!--Fin fila 2-->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-submit-1" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                        <input type="hidden" id="opcion-form" value="registro_paciente">
                                    </div>
                                </form>
                            </div>

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
                                            <input class="form-control" id="doc_identificacion"><br>
                                        </div>
                                        
                                        <div class="form-group ancho" id="input_nacionalidad">
                                            <label for="nacionalidad">Nacionalidad</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad"><br>
                                        </div>

                                        <div class="form-group ancho" id="input_raza">
                                            <label for="raza">Raza</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="raza" id="raza"><br>
                                        </div>
                                    </div> <!--Fin fila 1-->
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_fecha_nacimiento">
                                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                            &nbsp;
                                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"><br>
                                        </div>
                                        <div class="form-group ancho" id="select_sexo">
                                            <label for="sexo">Sexo</label>
                                            &nbsp;
                                            <div>
                                                <select id="sexo" class="form-control form-control-md">
                                                    <option value="h">Hombre</option>
                                                    <option value="m">Mujer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ancho" id="input_altura">
                                            <label for="altura">Altura (cm)</label>
                                            &nbsp;
                                            <input size="3" type="number" step=".01" class="form-control" id="altura" min="1" max="3">
                                        </div>
                                    </div> <!--Fin fila 2-->
                                    <div class="form-row espaciado-empty">
                                        <div class="form-group ancho" id="input_peso">
                                            <label for="peso">Peso (kg)</label>
                                            &nbsp;
                                            <input type="number" step=".01" min="5" max="500" class="form-control" id="peso"><br>
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
                                                    <option>S</option>
                                                    <option>N</option>
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
                                            <input type="text" class="form-control" name="ant_sindromes" id="ant_sindromes">
                                        </div>
                                    </div><!-- Fin fila 8 -->
                                    <div class="titulos">
                                        <label>VIDA LABORAL</label>
                                    </div>
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_profesion">
                                            <label for="profesion">Profesión</label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="profesion"><br>
                                        </div>
                                        
                                        <div class="form-group ancho" id="input_grado_resp_profesion">
                                            <label for="grado_resp_profesion">Grado de Responsabilidad</label>
                                            &nbsp;
                                            <input type="number" min="1" max="10" class="form-control" name="grado_resp_profesion" id="grado_resp_profesion"><br>
                                        </div>

                                        <div class="form-group ancho" id="input_grado_stress_profesion">
                                            <label for="grado_stress_profesion">Grado de Estrés</label>
                                            &nbsp;
                                            <input type="number" min="1" max="10" class="form-control" name="grado_stress_profesion" id="grado_stress_profesion"><br>
                                        </div>
                                    </div> <!--Fin fila 9-->
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-submit-2" value='<?php echo($_SESSION["id_especialista"])?>'>Siguiente</button>
                                        <input type="hidden" id="opcion-form2" value="registro_historial_clinico">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- Fin cuerpo página-->
                </div> <!-- Fin columna derecha-->
            </div> <!-- ROW -->


        </div><!-- CONTAINER FLUID-->

        <!-- SCRIPTS -->
        <script>
            var id_user = "";
            var id_especialista = "";
            $(document).ready(function(){
                
                //Según lo que seleccione en el origen del linfedema (primario) le mostramos un select diferente en secundario
                //Eso, una vez seleccione la primera opción
                $("#tipo_congenito").change(function(){
                    
                    var tipo_congenito = this.value; //valor option del select
                    
                    if(tipo_congenito=="Secundario"){
                        
                        $("#subtipo_congenito").html("");

                        // <select>
                        //     <optgroup label="Swedish Cars">
                        //         <option value="volvo">Volvo</option>
                        //         <option value="saab">Saab</option>
                        //     </optgroup>
                        //     <optgroup label="German Cars">
                        //         <option value="mercedes">Mercedes</option>
                        //         <option value="audi">Audi</option>
                        //     </optgroup>
                        // </select>

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

                $("#form-1").submit(function(event){
                        event.preventDefault();
                
                        var nombre =$('#nombre').val();
                        var apellido1=$('#apellido1').val();
                        var apellido2=$('#apellido2').val();
                        var correo =$('#correo').val();
                        var pass =$('#pass').val();
                        var pass2=$('#pass2').val();
                        id_especialista=$('#btn-submit-1').val(); 
                        var opcion= $("#opcion-form").val();

                        $.ajax({
                        type:'POST',
                        url: 'control/vista.php',
                        data: {nombre: nombre, apellido1: apellido1, apellido2: apellido2, correo: correo,id_especialista: id_especialista, pass: pass, pass2: pass2, opcion: opcion},
                        success:function(data){
                            id_user=data;
                            console.log(data);
                        }
                        })
                    $("#apartado-historial").css("display","block");
                    $("#apartado-usuario").css("display","none");
                    $("#btn-datos-personales").css("background-color","rgb(109, 109, 109)");
                    $("#btn-historial-clinico").css("background-color","#7037f4");
                    


                });


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
                    var accidente = $('#accidente').val();
                    var fecha_debut = $('#fecha_debut').val();
                    var familiar_linfedema = $('#familiar_linfedema').val();
                    var motivo_secundario = $('#motivo_secundario').val();
                    var ant_vasculares = $('#ant_vasculares').val();
                    var ant_infeccion_venosa = $('#ant_infeccion_venosa').val();
                    var ant_sobrepeso = $('#ant_sobrepeso').val();
                    var ant_lipedema = $('#ant_lipedema').val();
                    var ant_permeabilidad_cap = $('#ant_permeabilidad_cap').val();
                    var ant_ansiedad = $('#ant_ansiedad').val();
                    var ant_diabetes = $('#ant_diabetes').val();
                    var ant_triquiasis = $('#ant_triquiasis').val();
                    var ant_sindromes = $('#ant_sindromes').val();
                    var profesion = $('#profesion').val();
                    var grado_resp_profesion = $('#grado_resp_profesion').val();
                    var grado_stress_profesion = $('#grado_stress_profesion').val();
                    var opcion= $("#opcion-form2").val();

                    $.ajax({
                        type:'POST',
                        url: 'control/vista.php',
                        data: {id_user: id_user, doc_identificacion: doc_identificacion, nacionalidad: nacionalidad, raza: raza, fecha_nacimiento: fecha_nacimiento, 
                            sexo: sexo, altura: altura, peso: peso, tipo_congenito: tipo_congenito, subtipo_congenito: subtipo_congenito, accidente: accidente, 
                            fecha_debut: fecha_debut, familiar_linfedema: familiar_linfedema, motivo_secundario: motivo_secundario, ant_vasculares: ant_vasculares,
                            ant_infeccion_venosa: ant_infeccion_venosa, ant_sobrepeso: ant_sobrepeso, ant_lipedema: ant_lipedema, ant_permeabilidad_cap: ant_permeabilidad_cap,
                            ant_ansiedad: ant_ansiedad, ant_diabetes:ant_diabetes, ant_triquiasis: ant_triaquiasis, ant_sindromes: ant_sindromes, profesion: profesion,
                            grado_resp_profesion: grado_resp_profesion, grado_stress_profesion: grado_stress_profession, opcion: opcion},
                        success:function(data){
                            console.log(data);
                        }
                        })







});







            });//document ready
        </script>

    </body>
</html>
