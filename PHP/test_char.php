<?php
$serverName = "oracle.ilerna.com, 1433"; //serverName\instanceName, portNumber (por defecto es 1433)
$connectionInfo = array( "Database"=>"ONCOSALUT", "UID"=>"DAM2_VESTIGIUM", "PWD"=>"Vestigium2019");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
        echo "Conexión establecida.<br />";
    
        $test = $_POST["test"];
        
        /*
        $sql = "INSERT INTO Table_1 (id, data) VALUES (?, ?)";
        $params = array(1, "some data");
    
        $stmt = sqlsrv_query( $conn, $sql, $params);
        if( $stmt === false ) {
            die( print_r( sqlsrv_errors(), true));
        }
    
        */
    
        $sql = "insert into test values ('$test')";

        $stmt = sqlsrv_query( $conn, $sql);
        if( $stmt === false ) {
            die( print_r( sqlsrv_errors(), true));
        }
        else
            echo "test bien <br />";

    
}
?>
