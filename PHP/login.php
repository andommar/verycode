<?php
//oracle.ilerna.com, 1433
$serverName = "192.168.3.26, 1433"; //serverName\instanceName, portNumber (por defecto es 1433)
$connectionInfo = array( "Database"=>"DAW2_VERYCODE", "UID"=>"DAW2_VERYCODE", "PWD"=>"a1VERYCODE");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    echo "Conexión establecida.<br />";

    $correo = $_POST["correo"];
    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"]; 
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $tipo = $_POST["tipo"];


    /*
    $sql = "INSERT INTO Table_1 (id, data) VALUES (?, ?)";
    $params = array(1, "some data");

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

    */

    $sql = "insert into especialista values (?,?,?,?,?,?)";
    $params = array($correo,$pass,$pass2,$nombre,$apellido,$tipo);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    else
        echo "Admin registrado correctamente!.<br />";



}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>