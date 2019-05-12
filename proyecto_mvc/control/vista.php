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
                // echo $id_usuario;
                $resultado = array($id_usuario,"");
            }
            else if($error==-2){
                // echo "correo"
                $resultado = array("","correo");
            }
            else
                // echo "false";
                $resultado = array("","false");
            
           echo json_encode($resultado);

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
                echo "true";
            }
            else
                echo "false";

        break;

        

        case "registro_cirugias":

            $id_user=$_POST["id_user"];
            $nombre = $_POST["nombre_cirugia"];
            $fecha = $_POST["fecha"];
            $comentarios = $_POST["comentarios"];           
            
            $error=$c->registro_cirugias($id_user,$nombre,$fecha,$comentarios);
            if($error==0)
            {
                echo "true";
            }
            else if($error==-2){
                echo "cirugia";
            }
            else
                echo "false";

        break;

        case "registro_medicamento":

            $id_user=$_POST["id_user"];
            $medicamento = $_POST["medicamento"];
            $patologias = $_POST["patologias"];          
            
            $error=$c->registro_medicamento($id_user,$medicamento,$patologias);
            if($error==0)
            {
                echo "true";
            }
            else if($error==-2){
                echo "medicamento";
            }
            else
                echo "false";

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

        case "registro_tratamiento_linfedema":

            $id_user=$_POST["id_user"];
            $fecha_ult_tratamiento = $_POST["fecha_ult_tratamiento"];
            $satisfecho_result = $_POST["satisfecho_result"];
            $fallo_terapia = $_POST["fallo_terapia"];
            $tipo_drenaje_linfa = $_POST["tipo_drenaje_linfa"];
            $vendaje = $_POST["vendaje"];
            $nota = $_POST["nota"];
            $contencion_dia = $_POST["contencion_dia"];
            $contencion_tipo = $_POST["contencion_tipo"];
            $contencion_sensacion = $_POST["contencion_sensacion"];
            $contencion_dolor = $_POST["contencion_dolor"];
            $contencion_escala = $_POST["contencion_escala"];
            $contencion_pesadez = $_POST["contencion_pesadez"];

            $error=$c->registro_tratamiento_linfedema($id_user,$fecha_ult_tratamiento,$satisfecho_result,$fallo_terapia,$tipo_drenaje_linfa,
            $vendaje,$nota,$contencion_dia,$contencion_tipo,$contencion_sensacion,$contencion_dolor,$contencion_escala,$contencion_pesadez);
            if($error==0)
            {
                echo "Tratamiento linfedema registrado";
            }
            else
                echo "Fallo registro";

        break;

        case "registro_valoracion_linfedema":

            $id_user=$_POST["id_user"];
            $fecha_val_linfedema = $_POST["fecha_val_linfedema"];
            $localizacion = $_POST["localizacion"];
            $consistencia_edema = $_POST["consistencia_edema"];
            $color = $_POST["color"];
            $valoracion_piel = $_POST["valoracion_piel"];
            $stemmer = $_POST["stemmer"];
            $fovea = $_POST["fovea"];
            $pesadez = $_POST["pesadez"];
            $rubor = $_POST["rubor"];
            $foto_pierna_ant_d = $_POST["foto_pierna_ant_d"];
            $foto_pierna_post_d = $_POST["foto_pierna_post_d"];
            $foto_pierna_lat_d1 = $_POST["foto_pierna_lat_d1"];
            $foto_pierna_lat_d2 = $_POST["foto_pierna_lat_d2"];
            $foto_pierna_ant_i = $_POST["foto_pierna_ant_i"];
            $foto_pierna_post_i = $_POST["foto_pierna_post_i"];
            $foto_pierna_lat_i1 = $_POST["foto_pierna_lat_i1"];
            $foto_pierna_lat_i2 = $_POST["foto_pierna_lat_i2"];
            $foto_brazo_cruz_d = $_POST["foto_brazo_cruz_d"];
            $foto_brazo_frontal_d = $_POST["foto_brazo_frontal_d"];
            $foto_brazo_cruz_i = $_POST["foto_brazo_cruz_i"];
            $foto_brazo_frontal_i = $_POST["foto_brazo_frontal_i"];

            
            $error=$c->registro_tratamiento_linfedema($id_user,$fecha_val_linfedema,$localizacion,$consistencia_edema,$color,
            $valoracion_piel,$stemmer,$fovea,$pesadez,$rubor,$foto_pierna_ant_d,$foto_pierna_post_d,$foto_pierna_lat_d1,$foto_pierna_lat_d2,$foto_pierna_ant_i,$foto_pierna_post_i,
            $foto_pierna_lat_i1,$foto_pierna_lat_i2,$foto_brazo_cruz_d,$foto_brazo_frontal_d, $foto_brazo_cruz_i,$foto_brazo_frontal_i);
            if($error==0)
            {
                echo "Valoración linfedema registrado";
            }
            else
                echo "Fallo registro";

        break;

        case "registro_mediciones":

            $id_user=$_POST["id_user"];
            $fecha_val_mediciones = $_POST["fecha_val_mediciones"];
            $extremidad = $_POST["extremidad"];
            $lado = $_POST["lado"];
            $p1 = $_POST["p1"];
            $p2 = $_POST["p2"];
            $p3 = $_POST["p3"];
            $p4 = $_POST["p4"];
            $p5 = $_POST["p5"];
            $p6 = $_POST["p6"];

            $fecha = $_POST["fecha"];   
            $descripcion = $_POST["descripcion"];       
            
            $error=$c->registro_mediciones($id_user,$fecha_val_mediciones,$extremidad,$lado,$p1,$p2,$p3,$p4,$p5,$p6);
            if($error==0)
            {
                echo "Mediciones registrada";
            }
            else
                echo "Fallo registro";

        break;  



    }
}

?>