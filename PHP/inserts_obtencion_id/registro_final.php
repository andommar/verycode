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

                $sql = "INSERT INTO usuario VALUES ('$correo','$pass','$pass2','$nombre','$apellido','$apellido2',1);SELECT SCOPE_IDENTITY()";
                $stmt = sqlsrv_query( $conn, $sql);
                if( $stmt === false ) {
                        die( print_r( sqlsrv_errors(), true));
                }

                
                //DEVOLVER VALORES DESPUÉS DE UN INSERT
                //https://www.php.net/manual/es/function.sqlsrv-next-result.php

                
                sqlsrv_next_result($stmt); //Va al siguiente resultado y lo muestra (es un boolean si devuelve true o false si encuentra resultado)
                sqlsrv_fetch($stmt); //Obtiene el resultado encontrado
                echo sqlsrv_get_field($stmt, 0);  //Coge el campo correspondiente (0 es la primera columna)
                //echo "$id_usuario";


   
        }

?>