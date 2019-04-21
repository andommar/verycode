<?php
header("Content-Type: text/html;charset=utf-8");
//include_once("fisio.php");
//include_once("admin.php");
include_once("../modelo/usuario.php");

class TControl{

    public function comprobar_usuario($correo,$contrasenya){
        $usr = new TUsuario();
        $resultat = $usr->comprobar_usuario($correo,$contrasenya);
        return ($resultat);
    }




}

?>