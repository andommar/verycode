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

    echo json_encode($res); //devolvemos el resultado de si existe o no el usuario
   

    if($res){
        $_SESSION["tipo_usuario"]= $tipo_usuario; 
    }
      
        

   


?>