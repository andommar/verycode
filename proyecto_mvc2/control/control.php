<?php
header("Content-Type: text/html;charset=utf-8");
//include_once("fisio.php");
//include_once("admin.php");
include_once("../modelo/usuario.php");

class TControl{

    public function comprobar_usuario($correo,$contrasenya,&$tipo_usuario){
        $usr = new TUsuario();
        $resultat = $usr->comprobar_usuario($correo,$contrasenya,$tipo_usuario);
        return ($resultat);
    }




}

?>