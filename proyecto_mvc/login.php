
<!DOCTYPE html>
<html>
    <!-- ===============  HEAD ============= -->
    <head>
        <title>Acceder</title>
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
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <!-- Gráficas -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/grafica1.css">


        <script src="js/index_scripts.js"></script>  

  <!-- NOTIFICACIONES OVERHANG.JS  1 -->
  <link rel="stylesheet" type="text/css" href="js/overhang/dist/overhang.min.css" />
  <link rel="stylesheet" href="js/jquery-ui/jquery-ui.min.css">

    </head>
  
    <!-- ===============  BODY ============= -->
    <body>  
        <!-- Cuadrícula con el máximo ancho de la página -->
        <div class="container-fluid" id="body-container">
            <div class="row">
                <div id="panel-login" class="col-sm-6">
                    <h3 id="titulo">Iniciar Sesión</h3>
                    <hr>
                    <!--<form id="form-login"  action="control/control_vista.php" method = "post">-->
                    <form id="form-login" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control" placeholder="" name="correo" id="correo">
                            </div>
                            <div class="form-group col-md-12">
                                    <label for="contrasenya">Contraseña</label>
                                    <input type="password" class="form-control" placeholder="" name="contrasenya" id="contrasenya">
                            </div>
                            <div id="zona-boton" class="form-group col-md-12">
                                <button class="btn" id="btn-submit" type="submit" value="submit">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/jquery-ui/external/jquery/jquery.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/overhang/dist/overhang.min.js"></script>  
        <script>
            $(document).ready(function() { 
                $("#form-login").submit(function(event){

                    event.preventDefault();
                    var correo= $("#correo").val().trim();
                    var contrasenya= $("#contrasenya").val().trim();

                    // console.log("correo: "+correo);
                    // console.log("contraseña: "+contrasenya);

                    //action="control/control_login.php"

                    $.ajax({
                        method: "POST",
                        data: {correo : correo, contrasenya : contrasenya},
                        url: "control/control_login.php",
                        async: true
                    })        
                    .done(function( msg ) {                             	
                        console.log("ajax done");
                        // console.log(msg);
                        var datos = $.parseJSON(msg);
                        var usuario_correcto = datos.usuario_correcto;
                        var tipo_usuario = datos.tipo_usuario;
                        if(usuario_correcto){
                            if(tipo_usuario=="especialista"){
                                //mensaje popup de error
                                $("body").overhang({
                                    type: "error",
                                    message: "ERROR. Como especialista no tienes acceso a esta plataforma.",
                                    duration: 6,
                                    overlay: true,
                                    closeConfirm: true
                                });
                            }
                            else if(tipo_usuario=="fisioterapeuta"){
                                window.location.assign("pagina-principal.php");
                            }
                            else if(tipo_usuario=="administrador"){
                                window.location.assign("pagina-principal-admin.php");
                            }
                        }
                        else{
                                //mensaje popup de error
                                $("body").overhang({
                                    type: "error",
                                    message: "ERROR. Correo o contraseña incorrectos",
                                    duration: 3,
                                    overlay: true,
                                    closeConfirm: true
                                });
                        }
                        
                    })
                    .fail(function( jqXHR, textStatus, errorThrown ) {
                        if ( console && console.log ) {
                            console.log( "La solicitud ajax de acceso a usuarios.json ha fallado: " +  textStatus);
                        }
                    });
                });


            });
        </script>
    </body>
</html>

