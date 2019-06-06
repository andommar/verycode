<?php
//$servidor = "192.168.3.26, 1433";
$servidor = "oracle.ilerna.com, 1433";
$connectionInfo = array( "Database"=>"ONCOSALUT", "UID"=>"DAM2_VESTIGIUM", "PWD"=>"Vestigium2019", "CharacterSet"=>"UTF-8");
$conn = sqlsrv_connect( $servidor, $connectionInfo);

if( $conn ) {



    $sql = "select id_user,fecha,extremidad,lado,p1,p2,p3,p4,p5,p6 from mediciones";

    $stmt = sqlsrv_query( $conn, $sql);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

    $data = array();
    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        array_push($data,(array) $row);
    }


    sqlsrv_free_stmt( $stmt);
    echo json_encode($data);
}
?>
