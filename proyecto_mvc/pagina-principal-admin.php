<?php 
    session_start();

    if(!(isset($_SESSION["tipo_usuario"]))){
        header("Location: index.php");
    }
    else{
        if($_SESSION["tipo_usuario"]=='fisioterapeuta'){
            header("Location: pagina-principal.php");
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
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
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
        <link rel="stylesheet" type="text/css" href="css/pagina-principal-admin-style.css">
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
                            <li class="active espaciado-desplegable">
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
                            <li class="espaciado-desplegable apartados">
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
                    <nav id="espaciado-logout">
                        <ul>
                            <a href="logout.php" role="button">
                                <span id="logout-admin" class="ti-user"></span>
                            </a>
                           
                        <span style="margin-right: 4em;color: #555555;font-size: 12px;/* font-weight: 600; */"><i>Bienvenid@, <?php echo($_SESSION["nre_especialista"]);?></i></span></ul>
                        <div class="text-right" style="margin-right: 4em;color: #555555;font-size: 12px;/* font-weight: 600; */">
                            
                        </div>
                    </nav>

                    <!-- <nav id="nav-top" class="navbar navbar-default">
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
                    </nav> -->
                    
                    <!-- Fila título página + Breadcrumb -->
                    <div class="row" id="grupo-titulo-pagina">
                        <!-- Título -->
                        <div class="col-md-6" id="titulo">
                            <h3 class="block-title">Página Principal · Administrador</h3>
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
                            </ol>
                        </div>
                    </div> <!-- Fin fila -->

                     <!-- Cuerpo página (lado derecho)-->
                    <!-- FILA 1 -->
                    <div id="cuerpo-pagina-1" class="row"> 
                        <div class="col-lg-12 text-center" id="apartado-botones-admin">
                            <div id="botones-admin">
                                    <button id="btn-gestionar-especialistas" type="button" class="button btn">Gestionar especialistas</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <button id="btn-gestionar-pacientes" type="button" class="button btn ">Gestionar pacientes</button>
                            </div> 
                        </div>
                        <div class="col-lg-12">
                            <!-- VENTANA CONFIRMACIÓN BORRAR ESPECIALISTAS -->

                            <div class="modal" id="modal-borrar">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 id="titulo-modal" class="modal-title"></h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div id="texto-modal" class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelar-borrar-especialista">Cancelar</button>
                                            <button type="button" class="btn btn-success" data-dismiss="modal" id="aceptar-borrar-especialista">Aceptar</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- TABLA ESPECIALISTAS -->

                            <div id="apartado-especialistas">
                                <table id="titulo-tabla">
                                    <tbody>
                                        <tr>
                                            <td><h3 class="texto-titulo">Listado de especialistas</h3></td>
                                            <td id="btn-tabla"><a style="text-decoration: none;" href="anadir-fisio.php"><button id="btn-anadir-especialista" class="btn">Añadir especialista&nbsp;&nbsp;<i class="fas fa-user-plus"></i></button></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                               
                                <hr>
                                <table class="table" id="fisios-table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>tipo</th>
                                            <th>Nombre</th>
                                            <th>Apellido 1</th>
                                            <th>Apellido 2</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                        
                                    <tbody>     
                                       
                                    </tbody>
							    </table>
                            </div>

                            <!-- TABLA PACIENTES -->

                            <div id="apartado-pacientes" class="">
                                <h3>Listado de pacientes</h3>
                                <hr>
                                <table class="table" id="pacientes-table">
                                    <thead>
                                        <tr>
                                            <th>Id usuario</th>
                                            <th>Id fisio</th>
                                            <th>Nombre</th>
                                            <th>Apellido 1</th>
                                            <th>Apellido 2</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                        <!-- Se rellena con la consulta AJAX de JS a la BD -->
                                    <tbody>     
                                       
                                    </tbody>
							    </table>
                            </div>

                            <!-- DATOS ESPECIALISTA -->
                            <div id="apartado-datos-especialista">
                                <h3>Datos especialista</h3>
                                <hr>

                                <form id="form-1" class="margen-form">
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_nombre">
                                            <label for="nombre">Nombre <span class="rojo"> *</span></label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="30" value=><br>
                                        </div>
                                    
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="input_apellido1">
                                            <label for="apellido1">Primer apellido <span class="rojo"> *</span></label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="apellido1" required maxlength="50"><br>
                                        </div>
                                        &nbsp;&nbsp;

                                        <div class="form-group ancho" id="input_apellido2">
                                            <label for="apellido2">Segundo apellido</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="apellido2" id="apellido2" maxlength="50"><br>
                                        </div>
                                    </div>  <!--Fin fila 1-->
                                    &nbsp;&nbsp;
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_correo">
                                            <label for="correo">Correo <span class="rojo"> *</span></label>
                                            &nbsp;
                                            <input type="email" class="form-control" name="correo" id="correo" required maxlength="100"><br>
                                        </div>
                                            
                                        &nbsp;&nbsp;
                                        <div class="form-group ancho" id="input_pass">
                                            <label for="pass">Contraseña <span class="rojo"> *</span></label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass" id="pass" required maxlength="50"><br>
                                        </div>
                                        
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="input_pass2">
                                            <label for="pass2">Confirmar contraseña <span class="rojo"> *</span></label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass2" id="pass2" required maxlength="50"><br>
                                        </div>

                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="input_pass2">
                                            <label for="tipo">Tipo<span class="rojo"> *</span></label>
                                            &nbsp;
                                            <div>
                                                <select id="tipo" class="form-control form-control-md">
                                                    <option value="administrador">Administrador</option>
                                                    <option value="fisioterapeuta">Fisioterapeuta</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-modificar" value='<?php echo($_SESSION["id_especialista"])?>'>Modificar</button>
                                    </div>
                                    <div class="form-group margen-oblig">
                                        <h5 class="rojo letra">* Campos obligatorios</h5>
                                    </div>
                                </form>
                            </div> 

                            <input id="id_especialista" type="hidden" value="<?php echo $_SESSION["id_especialista"]?>"> 

                              <!-- DATOS PACIENTE -->
                              <div id="apartado-datos-paciente">
                                <h3>Datos paciente</h3>
                                <hr>

                                <form id="form-1-paciente" class="margen-form">
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_nombre">
                                            <label for="nombre_paciente">Nombre <span class="rojo"> *</span></label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" required maxlength="30" value=><br>
                                        </div>
                                    
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="input_apellido1">
                                            <label for="apellido1_paciente">Primer apellido <span class="rojo"> *</span></label>
                                            &nbsp;
                                            <input type="text" class="form-control" id="apellido1_paciente" required maxlength="50"><br>
                                        </div>
                                        &nbsp;&nbsp;

                                        <div class="form-group ancho" id="input_apellido2">
                                            <label for="apellido2_paciente">Segundo apellido</label>
                                            &nbsp;
                                            <input type="text" class="form-control" name="apellido2_paciente" id="apellido2_paciente" maxlength="50"><br>
                                        </div>
                                    </div>  <!--Fin fila 1-->
                                    &nbsp;&nbsp;
                                    <div class="form-row justify-content-center">
                                        <div class="form-group ancho" id="input_correo">
                                            <label for="correo_paciente">Correo <span class="rojo"> *</span></label>
                                            &nbsp;
                                            <input type="email" class="form-control" name="correo_paciente" id="correo_paciente" required maxlength="100"><br>
                                        </div>
                                            
                                        &nbsp;&nbsp;
                                        <div class="form-group ancho" id="input_pass">
                                            <label for="pass_paciente">Contraseña <span class="rojo"> *</span></label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass_paciente" id="pass_paciente" required maxlength="50"><br>
                                        </div>
                                        
                                        &nbsp;&nbsp;
                                        
                                        <div class="form-group ancho" id="input_pass2">
                                            <label for="pass2_paciente">Confirmar contraseña <span class="rojo"> *</span></label>
                                            &nbsp;
                                            <input type="password" class="form-control" name="pass2_paciente" id="pass2_paciente" required maxlength="50"><br>
                                        </div>

                                        &nbsp;&nbsp;
                                        
                                    </div>  
                                    <div class="columna-btn">
                                        <button class="btn estilo-boton-submit" type="submit" id="btn-modificar-paciente" value='<?php echo($_SESSION["id_especialista"])?>'>Modificar</button>
                                    </div>
                                    <div class="form-group margen-oblig">
                                        <h5 class="rojo letra">* Campos obligatorios</h5>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div> <!-- Fin columna derecha-->
            </div> <!-- ROW -->


        </div><!-- CONTAINER FLUID-->

        <!-- SCRIPTS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/jquery-ui/external/jquery/jquery.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/overhang/dist/overhang.min.js"></script> 
        <script type="text/javascript" src="js/notify/notify.min.js"></script>
        
        <script>
          var id_especialista_sesion = $("#id_especialista").val();

var id_especialista_seleccionado="";
var id_especialista="";
var id_usuario="";
var tipo_especialista="";

$( document ).ready(function() {
    $( "#btn-gestionar-especialistas" ).click(function() {
        $( "#apartado-pacientes" ).css("display","none");
        $( "#btn-gestionar-pacientes" ).css("background-color","rgb(109, 109, 109)");
        $( "#apartado-especialistas" ).css("display","block");
        $( "#btn-gestionar-especialistas" ).css("background-color","#3da3bc"); 

        $( "#apartado-datos-especialista" ).css("display","none");
        
    });

    $( "#btn-gestionar-pacientes" ).click(function() {
        $( "#apartado-especialistas" ).css("display","none");
        $( "#btn-gestionar-especialistas" ).css("background-color","rgb(109, 109, 109)"); 
        $( "#apartado-pacientes" ).css("display","block");
        $( "#btn-gestionar-pacientes" ).css("background-color","#3da3bc");
        $( "#apartado-datos-especialista" ).css("display","none");
        
    });


    
});

//================== Cuando la página esté cargada,cargamos los usuarios de tipo fisioterapeuta ===================



//No ponemos document ready porque queremos que se cargue antes de que esté cargada la página

//RELLENAR TABLAS DE ESPECIALISTAS y PACIENTES

$.ajax({
            type: "GET",
            url: "control/control_home_admin.php",
            
        })        
        .done(function( data, textStatus, jqXHR ) {
            
            if ( console && console.log ) {
                // console.log( "La solicitud de acceso se ha completado correctamente." );
            }
            var datos = $.parseJSON(data);
            // console.log(datos);
            // console.log(datos[0]); //tabla especialistas
            // console.log(datos[1]); //tabla pacientes
            var filas_especialistas='';
            var filas_pacientes='';
            datos[0].forEach(function(element) {
                var apellido2="";
                if(!isEmptyOrSpaces(element.apellido2)){
                    apellido2 = element.apellido2;
                }
                filas_especialistas+= '<tr><td>'+element.id_especialista+'</td><td>'+element.tipo+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+apellido2+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" class="btn azul" value="editarEspecialista" onclick="editarEspecialista(\'' + element.id_especialista + '\')"><span class="ti-pencil-alt"></span></button><button type="button" class="btn mt-1 rojo" value="borrarEspecialista" onclick="borrarEspecialista(\'' + element.id_especialista + '\',\'' + element.tipo + '\')"><span class="ti-trash"></span></button></td></tr>';

            });
            $('#fisios-table tbody').html(filas_especialistas);
            datos[1].forEach(function(element) {
                var apellido2_paciente="";
                if(!isEmptyOrSpaces(element.apellido2)){
                    apellido2_paciente = element.apellido2;
                }
                filas_pacientes+= '<tr><td>'+element.id_user+'</td><td>'+element.id_especialista+'</td><td>'+element.nombre+'</td><td>'+element.apellido1+'</td><td>'+apellido2_paciente+'</td><td>'+element.correo+'</td><td>'+element.pass+'</td><td><button type="button" class="btn azul" value="editarPaciente" onclick="editarPaciente(\'' + element.id_user + '\')"><span class="ti-pencil-alt"></span></button></td></tr>';

            });
            $('#pacientes-table tbody').html(filas_pacientes);
            //console.log("datos: "+datos);

        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud de acceso ha fallado: " +  textStatus);
            }
        });

function borrarEspecialista(id_espec, tipo_espec){
    
    event.preventDefault();
    $("#titulo-modal").html("");
    $("#texto-modal").html("");


    var frase = "";
    var titulo="";
    if(tipo_espec=="fisioterapeuta"){
        titulo="¿Estás seguro de que deseas borrar este fisioterapeuta?";
        frase = "Ten en cuenta que eso conlleva que todos sus pacientes (si los tiene) se queden sin especialista." ;
        
    }
    else{//administrador
        if(id_espec == id_especialista_sesion ){//el admin quiere borrarse a sí mismo
            titulo="¿Estás seguro de que deseas borrarte?";
            frase="Ten en cuenta que la sesión se cerrará tras aceptar y serás borrado de la base de datos.";
        }
        else{
            titulo="¿Estás seguro de que deseas borrar este administrador?";
            frase="Ten en cuenta que este usuario se borrará de la base de datos";
        }
        
        
    }
    id_especialista=id_espec;
    tipo_especialista=tipo_espec;

    $("#titulo-modal").html(titulo);
    $("#texto-modal").html(frase);
    $("#modal-borrar").modal();

    
}
// function editarEspecialista(id_user){
//     $("#modal-borrar").modal();
// }
$( document ).ready(function() {

    $( "#aceptar-borrar-especialista" ).click(function() {//Hará ajax de borrar

        var opcion = "borrar_especialista";

        $.ajax({
            method: "POST",
            url: 'control/vista.php',
            data: {id_especialista:id_especialista, tipo_especialista:tipo_especialista, opcion:opcion},
            

        })
        .done(function( msg ) {                             	
            // console.log("ajax done");

            if(msg=="true"){
                $("body").overhang({
                            type: "success",
                            message: "Especialista eliminado correctamente",
                            duration: 6,
                            overlay: true,
                            closeConfirm: true
                });
            }
            else if(msg=="admin"){
                $("body").overhang({
                            type: "error",
                            message: "No puede borrar el único administrador que queda",
                            duration: 6,
                            overlay: true,
                            closeConfirm: true
                });
            }
            else if(msg=="false"){
                $("body").overhang({
                            type: "error",
                            message: "ERROR, algo ha fallado",
                            duration: 6,
                            overlay: true,
                            closeConfirm: true
                });
            }
            
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
            }
        });
        // console.log("id especialista: "+id_especialista);
        // console.log("tipo especialista: "+tipo_especialista);
    });
});

function editarPaciente(id_user){
    event.preventDefault();
    $( "#apartado-especialistas" ).css("display","none");
    $( "#apartado-pacientes" ).css("display","none");
    $( "#apartado-datos-especialista" ).css("display","none");
    $( "#apartado-datos-paciente" ).css("display","block");
    $( "#apartado-botones-admin" ).css("display","none");
    var opcion= "datos_paciente";
    id_usuario = id_user;

    $.ajax({
            method:'GET',
            url: 'control/vista.php',
            data: {id_user:id_usuario, opcion:opcion},
            })
            .done(function( msg ) {
                var datos = $.parseJSON(msg);
                var apellido2="";
                if(!isEmptyOrSpaces(datos[0].apellido2)){
                    apellido2=datos[0].apellido2;
                }
                $( "#nombre_paciente" ).val(datos[0].nombre);
                $( "#apellido1_paciente" ).val(datos[0].apellido1);
                $( "#apellido2_paciente" ).val(apellido2);
                $( "#pass_paciente" ).val(datos[0].pass);
                $( "#pass2_paciente" ).val(datos[0].pass2);
                $( "#correo_paciente" ).val(datos[0].correo);


            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    // console.log("ajax fail");
                }
            });

}

function editarEspecialista(id_especialista){

    event.preventDefault();
    $( "#apartado-especialistas" ).css("display","none");
    $( "#apartado-pacientes" ).css("display","none");
    $( "#apartado-datos-especialista" ).css("display","block");
    $( "#apartado-botones-admin" ).css("display","none");
    var opcion= "datos_especialista";
    id_especialista_seleccionado=id_especialista;

    $.ajax({
            method:'GET',
            url: 'control/vista.php',
            data: {id_especialista: id_especialista, opcion:opcion},
            })
            .done(function( msg ) {
                var datos = $.parseJSON(msg);

                var apellido2_espec="";
                if(!isEmptyOrSpaces(datos[0].apellido2)){
                    apellido2_espec=datos[0].apellido2;
                }
                $( "#nombre" ).val(datos[0].nombre);
                $( "#apellido1" ).val(datos[0].apellido1);
                $( "#apellido2" ).val(apellido2_espec);
                $( "#pass" ).val(datos[0].pass);
                $( "#pass2" ).val(datos[0].pass2);
                $( "#correo" ).val(datos[0].correo);
                $( "#tipo" ).val(datos[0].tipo);


            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                    // console.log("ajax fail");
                }
            });

};

function validarEspecialista(nombre,apellido1,correo,pass, pass2,tipo){
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
    if(isEmptyOrSpaces(apellido1)){
        mensaje_error="ERROR. El primer apellido no puede estar vacío.";
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
function validarPaciente(nombre,apellido1,correo,pass, pass2){
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
    if(isEmptyOrSpaces(apellido1)){
        mensaje_error="ERROR. El primer apellido no puede estar vacío.";
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
$( document ).ready(function() {
    $("#btn-modificar").click(function(e){
        e.preventDefault();
        var opcion = "modificar_especialista";

        var nombre =$('#nombre').val();
        var apellido1=$('#apellido1').val();
        var apellido2=$('#apellido2').val();
        if(isEmptyOrSpaces(apellido2)){
            apellido2="";
        }
        var correo =$('#correo').val();
        var pass =$('#pass').val();
        var pass2=$('#pass2').val();
        var tipo= $( "#tipo" ).val();

        if( validarEspecialista(nombre,apellido1,correo,pass, pass2,tipo) ){

            $.ajax({
            method:"POST",
            url: 'control/vista.php',
            data: {opcion: opcion, id_especialista_seleccionado:id_especialista_seleccionado, nombre:nombre,
                apellido1:apellido1, apellido2:apellido2, correo:correo, pass:pass, pass2:pass2, tipo:tipo}
            })
            .done(function( msg ) {                             	
                // console.log("ajax done");
                    if(msg=="correo"){
                        $("body").overhang({
                                    type: "error",
                                    message: "ERROR, No puede usar un correo que ya existe",
                                    duration: 6,
                                    overlay: true,
                                    closeConfirm: true
                        });
                    }
                    else if(msg=="true"){
                        $.notify("Especialista modificado correctamente", "success");
                    }
                    
                
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                }
                $("body").overhang({
                                type: "error",
                                message: "ERROR, modificación ha fallado",
                                duration: 6,
                                overlay: true,
                                closeConfirm: true
                    });
            });
        }

    });

    $("#btn-modificar-paciente").click(function(e){

        e.preventDefault();
        var opcion = "modificar_paciente";

        var nombre =$('#nombre_paciente').val();
        var apellido1=$('#apellido1_paciente').val();
        var apellido2=$('#apellido2_paciente').val();
        if(isEmptyOrSpaces(apellido2)){
            apellido2="";
        }
        var correo =$('#correo_paciente').val();
        var pass =$('#pass_paciente').val();
        var pass2=$('#pass2_paciente').val();

        if( validarPaciente(nombre,apellido1,correo,pass,pass2) ){

            $.ajax({
            method:"POST",
            url: 'control/vista.php',
            data: {opcion: opcion, id_user:id_usuario, nombre:nombre,
                apellido1:apellido1, apellido2:apellido2, correo:correo, pass:pass, pass2:pass2}
            })
            .done(function( msg ) {                         	
                // console.log("ajax done");

                if(msg=="correo"){
                        $("body").overhang({
                                    type: "error",
                                    message: "ERROR, No puede usar un correo que ya existe",
                                    duration: 6,
                                    overlay: true,
                                    closeConfirm: true
                        });
                    }
                    else if(msg=="true"){
                        $.notify("Paciente modificado correctamente", "success");
                    }
                
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    // console.log( "La solicitud ajax de acceso ha fallado: " +  textStatus);
                }
                $("body").overhang({
                                type: "error",
                                message: "ERROR, modificación ha fallado",
                                duration: 6,
                                overlay: true,
                                closeConfirm: true
                    });
            });
        }

    });
});
        </script>
        
    </body>
</html>
