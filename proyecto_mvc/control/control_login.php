<?php
    header("Content-Type: text/html;charset=utf-8");
    include_once("../modelo/TUsuario.php");

    $usuario = $_POST["usuario"];
    $contrasenya = $_POST["contrasenya"];		

    function __construct()
	{
		$this->acceder($usuario,$contrasenya);
    }

    public function acceder($usuario,$contrasenya){
        $l = new TUsuario();
        $l->acceder($usuario,$contrasenya);
    }





?>