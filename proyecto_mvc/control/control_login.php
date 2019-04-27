<?php
<<<<<<< HEAD
    header("Content-Type: text/html;charset=utf-8");
    include_once("../modelo/TUsuario.php");

    echo 'HOLA';
=======
    session_start();                                    
    header("Content-Type: text/html;charset=utf8"); 
>>>>>>> anna

    include_once("control.php");

<<<<<<< HEAD



    function acceder($usuario,$contrasenya){
        $l = new TUsuario();
        $l->acceder($usuario,$contrasenya);
    }

    acceder($usuario,$contrasenya);

=======
    $correo = $_POST["correo"];
    $contrasenya = $_POST["contrasenya"];	
    $tipo_usuario="";	

    $Ctrl= new TControl() ;                             

    $res = $Ctrl->comprobar_usuario($correo,$contrasenya,$tipo_usuario);                

    if($res){
        $_SESSION["tipo_usuario"]= $tipo_usuario;
        header("Location: ../anadir-paciente.php");
    }
>>>>>>> anna




?>