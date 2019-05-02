<?php
    session_start();                                    
    header("Content-Type: text/html;charset=utf8"); 
    include_once("control.php");
    //echo("<h1>control login</h1>");

    $correo = $_POST['correo'];
    $contrasenya = $_POST['contrasenya'];	
    $tipo_usuario="";	
    $res=false;
    $Ctrl= new TControl() ;                             

    $res = $Ctrl->comprobar_usuario($correo,$contrasenya,$tipo_usuario);      
    if($res){
        //Guardamos la variable de sesión sólo si se trata del admin o del fisio
        if($tipo_usuario!='especialista' && $tipo_usuario!=""){
            $_SESSION["tipo_usuario"]= $tipo_usuario; 
        }
    }
    $datos = array("usuario_correcto"=>$res,"tipo_usuario"=>$tipo_usuario);
    echo json_encode($datos);
    //echo json_encode($res); //devolvemos el resultado de si existe o no el usuario
        

   


?>