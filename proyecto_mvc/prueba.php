<?php

session_start();                                    
header("Content-Type: text/html;charset=utf8"); 
//echo("<h1>CACA DE VACA</h1>");

$correo = $_POST['correo'];
$contrasenya = $_POST['contrasenya'];	
$tipo_usuario="";	


    $_SESSION["tipo_usuario"]= "pedo";
    header("Location: anadir-paciente.php");


?>