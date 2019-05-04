<?php

        
        $serverName = "oracle.ilerna.com, 1433"; //serverName\instanceName, portNumber (por defecto es 1433)
        $connectionInfo = array( "Database"=>"ONCOSALUT", "UID"=>"DAM2_VESTIGIUM", "PWD"=>"Vestigium2019"); //DAW2_VERYCODE, DAW2_VERYCODE, a1VERYCODE
        $conn = sqlsrv_connect( $serverName, $connectionInfo);
        
               
        if($conn)
        {
                
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellido"];
                $apellido2 = $_POST["apellido2"];
                $correo = $_POST["correo"];
                $tipo =$_POST["tipo"];
                $pass=$_POST["pass"];
                $pass2=$_POST["pass2"];

                $sql = "INSERT INTO usuario VALUES ('$correo','$pass','$pass2','$nombre','$apellido','$apellido2',1)";
                $stmt = sqlsrv_query( $conn, $sql);
                if( $stmt === false ) {
                        die( print_r( sqlsrv_errors(), true));
                }

                
                $sql2 = "SELECT id_user FROM usuario WHERE correo = '$correo'";
                $stmt2 = sqlsrv_query($conn, $sql2);
                if( $stmt2 === false ) {
                        die( print_r( sqlsrv_errors(), true));
                }


                if( sqlsrv_fetch( $stmt2 ) === false) {
                        die( print_r( sqlsrv_errors(), true));
                        }
                        
                        // Obtener los campos de la fila. Los índices de campo empiezan desde 0 y se deben obtener en orden.
                        // Recuperar los nombres de campo por su nombre no está soportado por sqlsrv_get_field.
                $id_usuario = sqlsrv_get_field( $stmt, 0);
                echo "$id_usuario";


   
        }

?>