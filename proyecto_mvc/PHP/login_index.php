<?php
session_start();



if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['correo'] ) && isset( $_POST['contrasenya'] ) ) {
        
        $correo = $_POST['correo'];
        $contrasenya = $_POST['contrasenya'];

        // Conexión BD
        $serverName = "oracle.ilerna.com, 1433"; //serverName\instanceName, portNumber (por defecto es 1433)
        $connectionInfo = array( "Database"=>"DAW2_VERYCODE", "UID"=>"DAW2_VERYCODE", "PWD"=>"a1VERYCODE");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);

        if ($conn){
            
            $sql ="SELECT correo FROM especialista WHERE id_especialista = 1";
            //$param = 'fisioterapeuta';
            $stmt = sqlsrv_query( $conn, $sql);

            if( sqlsrv_fetch( $stmt ) === false) {
                die( print_r( sqlsrv_errors(), true));
           } 

            $correo = sqlsrv_get_field( $stmt, 0);
            echo "$correo: ";

        

        }else{
            echo "No se pudo establecer la conexión.<br />";
            die( print_r( sqlsrv_errors(), true));
        }
    
        
    		
    	// Verify user password and set $_SESSION
    	//if ( password_verify( $_POST['password'], $user->password ) ) {
    	//	$_SESSION['user_id'] = $user->ID;
    	//}
    }
}
?>