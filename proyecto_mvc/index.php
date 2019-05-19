<?php 
session_start();                                     
header("Content-Type: text/html;charset=utf8");  
if ( !(isset($_SESSION["tipo_usuario"])) ){ 
    header("Location: login.php"); 
} 
else{ 
    header("Location: pagina-principal.php"); 
} 
 
?>