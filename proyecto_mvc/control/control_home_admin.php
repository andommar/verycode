<?php 
    
        // $juegos= "hola ke ase";
        // echo json_encode($juegos);
        
        session_start();                                    
        header("Content-Type: text/html;charset=utf8"); 
        include_once("control.php");

       	
        $res=false;
        $Ctrl= new TControl() ;                             

        $res = $Ctrl->listado_fisios();      
        if($res!=false){
               echo json_encode($res); 
               // $datos = array("usuario_correcto"=>$res,"tipo_usuario"=>$tipo_usuario);
        }
       


?>



