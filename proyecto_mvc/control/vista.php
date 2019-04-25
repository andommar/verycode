<?php

header("Content-Type: text/html;charset=utf-8");
include_once("control.php");
//include_once("../control/control_login.php");


if(isset($_POST["opcion"]))
{
    $opcion=$_POST["opcion"];

    $c= new TControl();

    switch($opcion)
    {
        case "registro_admin":

            

            $correo = $_POST["correo"];
            $pass = $_POST["pass"];
            $pass2 = $_POST["pass2"]; 
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $apellido2 = $_POST["apellido2"];
            $tipo = $_POST["tipo"];

            $error=$c->registro_admin($correo, $pass, $pass2, $nombre, $apellido, $apellido2, $tipo);
            if($error==0)
            {
                echo "Usuario registrado correctamente";
            }
            else
                echo "Fallo registro";

        break;

    }
}

?>