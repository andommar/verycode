<?php
    header("Content-Type: text/html;charset=utf-8");
    include_once("../modelo/TUsuario.php");

    echo 'HOLA';

    $usuario = $_POST["usuario"];
    $contrasenya = $_POST["contrasenya"];		




    function acceder($usuario,$contrasenya){
        $l = new TUsuario();
        $l->acceder($usuario,$contrasenya);
    }

    acceder($usuario,$contrasenya);





?>