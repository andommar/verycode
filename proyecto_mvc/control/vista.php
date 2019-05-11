<?php

header("Content-Type: text/html;charset=utf-8");
include_once("control.php");
//include_once("../control/control_login.php");

// ini_set('mssql.charset','utf-8');

if(isset($_POST["opcion"]))
{
    $opcion=$_POST["opcion"];

    $c= new TControl();

    switch($opcion)
    {
        case "borrar_especialista":

            $id_especialista = $_POST["id_especialista"];
            $tipo_especialista = $_POST["tipo_especialista"];

            $error=$c->borrar_especialista($id_especialista, $tipo_especialista);
            if($error==0)
            {
                echo "true";
            }
            else
                echo "false";

            // BORRAR ESPECIALISTA
            // ____________________
            
            
            // -Borrar admin | (si es el mismo -> logout automático y le envía a la página de login)
            // delete from especialista where id_especialista = 10
            
            // -Borrar fisio | 
            
            // (primero tenemos que buscar si ese especialista tiene pacientes)
            // ->select count(*) from usuario where id_especialista = 7
            //     if resultat > 0
            //         -> update usuario set id_especialista=null where id_especialista = 7
                
            // ->delete from especialista where id_especialista = 7
        
        break;
        case "registro_admin":

            

            $correo = $_POST["correo"];
            $pass = $_POST["pass"];
            $pass2 = $_POST["pass2"]; 
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $apellido2 = $_POST["apellido2"];
            $tipo = $_POST["tipo"];

            $error=$c->registro_admin($correo, $pass, $pass2, $nombre, $apellido, $apellido2, $tipo);
            // if($error==0)
            // {
            //     //echo "Usuario registrado correctamente";
            // }
            // else
            //     //echo "Fallo registro";

        break;

        case "registro_paciente":

            $id_usuario=0;
            $correo = $_POST["correo"];
            $pass = $_POST["pass"];
            $pass2 = $_POST["pass2"]; 
            $nombre = $_POST["nombre"];
            $apellido1 = $_POST["apellido1"];
            $apellido2 = $_POST["apellido2"];
            $id_especialista = $_POST["id_especialista"];
            
            
            $error=$c->registro_paciente($correo,$pass,$pass2,$nombre,$apellido1,$apellido2,$id_especialista,$id_usuario);
            if($error==0)
            {
                echo $id_usuario;
            }
            else
                echo "Fallo registro";

        break;

        case "registro_historial_clinico":
            
            $id_user=$_POST["id_user"];
            $doc_identificacion =$_POST["doc_identificacion"];
            $nacionalidad=$_POST["nacionalidad"];
            $raza =$_POST["raza"];
            $fecha_nacimiento =$_POST["fecha_nacimiento"];
            $sexo =$_POST["sexo"];
            $altura =$_POST["altura"];
            $peso =$_POST["peso"];
            $tipo_congenito =$_POST["tipo_congenito"];
            $subtipo_congenito =$_POST["subtipo_congenito"];
            $fecha_debut =$_POST["fecha_debut"];
            $familiar_linfedema =$_POST["familiar_linfedema"];
            $motivo_secundario =$_POST["motivo_secundario"];
            $ant_vasculares =$_POST["ant_vasculares"];
            $ant_infeccion_venosa =$_POST["ant_infeccion_venosa"];
            $ant_sobrepeso =$_POST["ant_sobrepeso"];
            $ant_lipedema =$_POST["ant_lipedema"];
            $ant_permeabilidad_cap =$_POST["ant_permeabilidad_cap"];
            $ant_ansiedad =$_POST["ant_ansiedad"];
            $ant_diabetes =$_POST["ant_diabetes"];
            $ant_triquiasis =$_POST["ant_triquiasis"];
            $ant_sindromes =$_POST["ant_sindromes"];
            $profesion =$_POST["profesion"];
            $grado_resp_profesion =$_POST["grado_resp_profesion"];
            $grado_stress_profesion =$_POST["grado_stress_profesion"];      

            $error=$c->registro_historial_clinico($id_user,$doc_identificacion,
            $nacionalidad, $raza, $fecha_nacimiento,
            $sexo, $altura, $peso, $tipo_congenito, $subtipo_congenito,
            $fecha_debut, $familiar_linfedema,
            $motivo_secundario, $ant_vasculares, $ant_infeccion_venosa, $ant_sobrepeso, $ant_lipedema, $ant_permeabilidad_cap, $ant_ansiedad,
            $ant_diabetes, $ant_triquiasis, $ant_sindromes, $profesion, $grado_resp_profesion, $grado_stress_profesion); 

            if($error==0)
            {
                echo "Historial clinico registrado";
            }
            else
                echo "Fallo registro";

        break;


        case "registro_cirugias":

            $id_user=$_POST["id_user"];
            $nombre = $_POST["nombre_cirugia"];
            $fecha = $_POST["fecha"];
            $comentarios = $_POST["comentarios"];           
            
            $error=$c->registro_cirugias($id_user,$nombre,$fecha,$comentarios);
            if($error==0)
            {
                echo "Cirugias registradas";
            }
            else
                echo "Fallo registro";

        break;

        case "registro_medicamento":

            $id_user=$_POST["id_user"];
            $medicamento = $_POST["medicamento"];
            $patologias = $_POST["patologias"];          
            
            $error=$c->registro_medicamento($id_user,$medicamento,$patologias);
            if($error==0)
            {
                echo "Medicamento registrado";
            }
            else
                echo "Fallo registro";

        break;

        case "registro_infeccion":

            $id_user=$_POST["id_user"];
            $nombre_infeccion = $_POST["nombre_infeccion"];
            $fecha = $_POST["fecha"];   
            $descripcion = $_POST["descripcion"];       
            
            $error=$c->registro_infeccion($id_user,$nombre_infeccion,$fecha,$descripcion);
            if($error==0)
            {
                echo "Infeccion registrada";
            }
            else
                echo "Fallo registro";

        break;

        case "registro_habitos":

            $id_user=$_POST["id_user"];
            $fumador = $_POST["fumador"];
            $cig_dia = $_POST["cig_dia"];
            $cig_mes = $_POST["fumador"];
            $cig_dia = $_POST["cig_dia"];
            $cig_anyo = $_POST["descripcion"];   
            $fumador_social = $_POST["fumador"];
            $freq_alcohol = $_POST["cig_dia"];
            $tipo_alcohol = $_POST["descripcion"];   
            $freq_deporte = $_POST["descripcion"];
            $tipo_deporte = $_POST["tipo_deporte"];
            $t_sesion = $_POST["t_sesion"];
            $alimentacion = $_POST["alimentacion"];   
            $suenyo_reparador = $_POST["suenyo_reparador"];
            $h_suenyo = $_POST["h_suenyo"];
            $astenico = $_POST["astenico"];   
            $erg_sentado = $_POST["erg_sentado"];
            $erg_bidepes_pasiva = $_POST["erg_bidepes_pasiva"];
            $erg_bidepes_activa = $_POST["erg_bidepes_activa"];   
            $erg_otro = $_POST["erg_otro"];

            $error=$c->registro_habitos($id_user,$fumador,$cig_dia,$cig_mes,$cig_anyo,$fumador_social,$freq_alcohol,$tipo_alcohol,
            $freq_deporte,$tipo_deporte,$t_sesion,$alimentacion,$suenyo_reparador,$h_suenyo,$astenico,$erg_sentado,$erg_bidepes_pasiva,$erg_bidepes_activa,
            $erg_otro);

            if($error==0)
            {
                echo "Habitos registrados";
            }
            else
                echo "Fallo registro";

        break;

    }
}

?>