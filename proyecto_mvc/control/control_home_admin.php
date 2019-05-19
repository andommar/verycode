<?php 
    
        session_start();                                    
        header("Content-Type: text/html;charset=utf8"); 
        include_once("control.php");

       	
        $res1=false;
        $res2=false;
        $Ctrl= new TControl() ;                             

        $res1 = $Ctrl->listado_especialistas();      
        $res2 = $Ctrl->listado_pacientes();      

        
        if($res1!=false && $res2!=false){
                $res = array($res1, $res2);
               echo json_encode($res); 
               // $datos = array("usuario_correcto"=>$res,"tipo_usuario"=>$tipo_usuario);
        }
       


?>



