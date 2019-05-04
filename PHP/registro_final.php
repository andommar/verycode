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

        $sql = "INSERT INTO especialista VALUES ('$correo','$pass','$pass2','$nombre','$apellido','$apellido2','$tipo')";
        $stmt = sqlsrv_query( $conn, $sql);
        if( $stmt === false ) {
                die( print_r( sqlsrv_errors(), true));
           }






                   // https://www.youtube.com/watch?v=Bkl-MJW8VXc --PHP Ajax jQuery
        // $id_user = $_POST["id_user"];
        // $nacionalidad = $_POST["nacionalidad"];
        // $raza = $_POST["raza"]; 
        // $fecha_nacimiento = $_POST["fecha_nacimiento"];
        // $sexo = $_POST["sexo"];
        // $altura = $_POST["altura"];
        // $peso = $_POST["peso"];
        // $tipo_congenito= $_POST["tipo_congenito"];
        // $subtipo_congenito=$_POST["subtipo_congenito"];
        // $accidente = $_POST["accidente"];
        // $fecha = $_POST["fecha_debut"];
        // $familiar_linfedema = $_POST["familiar_linfedema"];
        // $motivo_secundario = $_POST["motivo_secundario"];
        // $ant_vasculares= $_POST["ant_vasculares"];
        // $ant_infeccion_venosa=$_POST["ant_infeccion_venosa"];
        // $ant_sobrepeso =$_POST["ant_sobrepeso"];
        // $ant_lipedema = $_POST["ant_lipedema"];
        // $ant_permeabilidad_cap = $_POST["ant_permeabilidad_cap"];
        // $ant_ansiedad = $_POST["ant_ansiedad"];
        // $ant_diabetes = $_POST["ant_diabetes"];
        // $ant_triquiasis= $_POST["ant_triquiasis"];
        // $ant_sindromes=$_POST["ant_sindromes"];
        // $profesion=$_POST["profesion"];
        // $grado_resp_profesion = $_POST["grado_resp_profesion"];
        // $grado_stress_profesion = $_POST["grado_stress_profesion"];
        // $medicamentos = $_POST["medicamentos"];


}



?>