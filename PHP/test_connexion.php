<?php
$serverName = "oracle.ilerna.com, 1433"; //serverName\instanceName, portNumber (por defecto es 1433)
$connectionInfo = array( "Database"=>"DAW2_VERYCODE", "UID"=>"DAW2_VERYCODE", "PWD"=>"a1VERYCODE");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>

