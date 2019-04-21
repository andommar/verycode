<?php
    header("Content-Type: text/html;charset=utf-8");
    include_once("../modelo/TUsuario.php");

    $correo = $_POST["correo"];
    $contrasenya = $_POST["contrasenya"];		



    
    echo '<h1>Control login</h1>';
    acceder($correo,$contrasenya);
        
    function acceder($correo,$contrasenya){
        $l = new TUsuario();
        $l->acceder($correo,$contrasenya);
    }





?>