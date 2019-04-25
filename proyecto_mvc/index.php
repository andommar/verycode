<?php 
session_start();                                     
header("Content-Type: text/html;charset=utf8");  
if ( !(isset($_SESSION["tipo_usuario"])) ){ 
    header("Location: login.html"); 
} 
else{ 
    header("Location: anadir-paciente.php"); 
} 
 
?>