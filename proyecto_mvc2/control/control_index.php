<?php
   session_start();                                    
   header("Content-Type: text/html;charset=utf8"); 
   
   include_once("control.php");

    $correo = $_POST["correo"];
    $contrasenya = $_POST["contrasenya"];	
    $tipo_usuario="";	

    $Ctrl= new TControl() ;                             

    $res = $Ctrl->comprobar_usuario($correo,$contrasenya,$tipo_usuario);                

    if($res){
        $_SESSION["tipo_usuario"]= $tipo_usuario;
        header("Location: ../anadir-paciente.php");
    }


    
   /*
    acceder($correo,$contrasenya);
        
    function acceder($correo,$contrasenya){
        $l = new TUsuario();
        $l->acceder($correo,$contrasenya);
    }

*/



?>