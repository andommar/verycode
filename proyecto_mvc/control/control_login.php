<?php
    header("Content-Type: text/html;charset=utf-8");
    include_once("../modelo/TUsuario.php");

    $usuario = $_POST["usuario"];
    $contrasenya = $_POST["contrasenya"];		

    echo '<h1>Control login</h1>';
    acceder($usuario,$contrasenya);
        
    function acceder($usuario,$contrasenya){
        $l = new TUsuario();
        $l->acceder($usuario,$contrasenya);
    }





?>