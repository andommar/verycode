<?php
header("Content-Type: text/html;charset=utf-8");
//include_once("fisio.php");
//include_once("admin.php");
include_once("../modelo/TUsuario.php");

class TControl{
    
    public function comprobar_usuario($correo,$contrasenya,&$tipo_usuario){
        //echo("<h1>CACA DE VACA GIGANTE</h1>");
        $usr = new TUsuario();
        $resultado = $usr->comprobar_usuario($correo,$contrasenya,$tipo_usuario);
        return ($resultado);
    }

    //no usada aún
    public function registro_admin($correo,$pass,$pass2,$nombre,$apellido,$apellido2,$tipo)
    {
        
        $usr = new TUsuario();
        $resultado = $usr->registro_admin($correo,$pass,$pass2,$nombre,$apellido,$apellido2,$tipo);
        return ($resultado);
    }

    public function listado_fisios(){
        $usr = new TUsuario();
        $resultado = $usr->listado_fisios();
        return ($resultado);
    }    


}

?>