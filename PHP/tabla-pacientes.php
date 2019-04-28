<!DOCTYPE html>
<html>
<head>
    <!-- ctrl+k+c ctrl+k+u -->
    <title>Tabla pacientes</title>
    <meta charset="utf-8">
    <!-- Mobile First -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">  
    <!-- Iconos --> 
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- BOOTSTRAP 4 -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Hojas de estilo -->
    <link rel="stylesheet" type="text/css" href="css/global-style.css">
    <link rel="stylesheet" type="text/css" href="css/anadir-paciente-style.css">
    <!-- Gráficas -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/grafica1.css">
    <link rel="stylesheet" href="css/formularios-style.css">
</head>

<body>

<!-- CONNEXIÓN sqlsrv -->

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

$sql = "SELECT id_user, nombre, apellido1, apellido2 FROM usuario";
$result = sqlsrv_query( $conn, $sql);
    if( $result === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
?>

<!--  -->

<!-- TABLA -->

<div class="container-fluid" id="body-container">
    <div class="row">
        <div class="table-responsive">
            <table class= "table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
                        {
                    ?> 
                            <tr>
                                <td><?php echo $row['id_user']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['apellido1']." ".$row['apellido2']; ?></td>
                                <td><input type="button" name="ver" value="ver" id="<?php echo $row['id_user']; ?>" class="ver-datos"></td>
                            </tr>
                        <?php
                        }
                        ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- FIN TABLA -->

</body>

</html>