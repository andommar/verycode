<?php
header("Content-Type: text/html;charset=utf-8");		
include_once ("accessbd.php");

class TUsuario{

    public function comprobar_usuario($correo, $contrasenya,&$tipo_usuario){
    
      $res=false;
      $abd = new TAccesbd ();

      if($abd->conectado()){
        
        $res=true;

              $servidor = "oracle.ilerna.com, 1433";
          $connectionInfo = array( "Database"=>"DAW2_VERYCODE", "UID"=>"DAW2_VERYCODE", "PWD"=>"a1VERYCODE");
              $conn = sqlsrv_connect( $servidor, $connectionInfo);

              //header("Location: ../anadir-paciente.html");
              
              
              $query = "SELECT tipo FROM especialista WHERE correo='$correo'";
              $stmt = sqlsrv_query( $conn, $query);
              if( $stmt === false ) {
                  die( print_r( sqlsrv_errors(), true));
              }
              if( sqlsrv_fetch( $stmt ) === false) {
                  die( print_r( sqlsrv_errors(), true));
              }
              // Get the row fields. Field indices start at 0 and must be retrieved in order.
              // Retrieving row fields by name is not supported by sqlsrv_get_field.
              $tipo_usuario = sqlsrv_get_field( $stmt, 0);
              //echo "$tipo_usuario";



		}
		else{
			echo '<h1>No conectao luser</h1>';
		}
    
    return $res;
    }




}


?>