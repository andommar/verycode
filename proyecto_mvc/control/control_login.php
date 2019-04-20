<?php
    header("Content-Type: text/html;charset=utf-8");
    include_once("../modelo/TLogin.php");

    $usuario = $_POST["usuario"];
    $contrasenya = $_POST["contrasenya"];		

    public function acceder($usuario,$contrasenya){
        $l = new TLogin();
        $l->acceder($usuario,$contrasenya);
    }





?>